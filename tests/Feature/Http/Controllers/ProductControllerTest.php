<?php

use App\Models\Product;
use App\Models\User;

test('returns all products', function () {
    User::factory()->create(['role' => 'supplier']);
    Product::factory()->create();

    $response = $this->getJson('/api/v1/products');
    $response->assertOk()->assertJsonStructure(['data']);
});

test('creates a product as supplier', function () {
    $user = User::factory()->create(['role' => 'supplier']);

    $payload = [
        'name' => 'Test Product',
        'price' => 1000,
        'category' => 'Electronics',
        'description' => 'A test product.',
        'stock' => 10,
    ];

    $response = $this->actingAs($user)->postJson('/api/v1/products', $payload);
    $response->assertOk()->assertJsonFragment(['name' => 'Test Product']);
    expect(Product::first()->supplier_id)->toBe($user->id);
});

test('shows a single product', function () {
    $user = User::factory()->create(['role' => 'supplier']);
    $product = Product::factory()->create();

    $response = $this->getJson("/api/v1/products/{$product->id}");
    $response->assertOk()->assertJsonFragment(['id' => $product->id]);
});

test('updates a product if owner', function () {
    $user = User::factory()->create(['role' => 'supplier']);
    $product = Product::factory()->create(['supplier_id' => $user->id]);

    $response = $this->actingAs($user)->putJson("/api/v1/products/{$product->id}", [
        'name' => 'Updated Product',
        'price' => 2000,
        'category' => 'Updated Category',
        'description' => 'Updated Description',
        'stock' => 10,
    ]);
    $response->assertOk()->assertJsonFragment(['name' => 'Updated Product']);
});

test('throws not found if updating someone else\'s product', function () {
    $user = User::factory()->create(['role' => 'supplier']);
    $other = User::factory()->create(['role' => 'supplier']);
    $product = Product::factory()->create(['supplier_id' => $other->id]);

    $response = $this->actingAs($user)->putJson("/api/v1/products/{$product->id}", [
        'name' => 'Invalid Update',
        'price' => 5000,
        'category' => 'Invalid',
        'description' => 'Invalid',
        'stock' => 10,
    ]);
    $response->assertNotFound();
});

test('deletes a product if owner', function () {
    $user = User::factory()->create(['role' => 'supplier']);
    $product = Product::factory()->create(['supplier_id' => $user->id]);

    $response = $this->actingAs($user)->deleteJson("/api/v1/products/{$product->id}");
    $response->assertNoContent();
    expect(Product::find($product->id))->toBeNull();
});

test('throws not found if deleting someone else\'s product', function () {
    $user = User::factory()->create(['role' => 'supplier']);
    $other = User::factory()->create(['role' => 'supplier']);
    $product = Product::factory()->create(['supplier_id' => $other->id]);

    $response = $this->actingAs($user)->deleteJson("/api/v1/products/{$product->id}");
    $response->assertNotFound();
});
