<?php

use App\Models\User;
use App\Models\Product;

test('returns an empty array when user has no cart', function () {
    $user = User::factory()->create(['role' => 'customer']);

    $response = $this->actingAs($user)->getJson('/api/v1/carts');
    $response->assertOk()->assertJson(['data' => []]);
});

test('stores item in cart (creates cart if missing)', function () {
    $user = User::factory()->create(['role' => 'customer']);
    $product = Product::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/carts', ['product_id' => $product->id]);
    $response->assertOk()
        ->assertJsonPath('data.product_id', $product->id)
        ->assertJsonPath('data.quantity', 1);
});
