<?php

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

use function Pest\Laravel\actingAs;

test('returns orders for an authenticated supplier', function () {
    $supplier = User::factory()->create(['role' => 'supplier']);
    $customer = User::factory()->create();

    // Create product owned by the supplier
    $product = Product::factory()->create(['supplier_id' => $supplier->id]);

    // Create an order placed by the customer
    $order = Order::factory()->create(['user_id' => $customer->id]);

    // Attach the product to the order via OrderItem
    OrderItem::factory()->create([
        'order_id'     => $order->id,
        'product_id'   => $product->id,
        'supplier_id'  => $supplier->id,
    ]);

    $response = $this->actingAs($supplier)->getJson('/api/v1/orders');

    $response->assertOk();
    $response->assertJsonStructure([
        'data' => [
            '*' => ['id', 'user_id', 'status', 'created_at', 'updated_at', 'items']
        ]
    ]);
});

test('returns orders for an authenticated customer', function () {
    $customer = User::factory()->create();
    $supplier = User::factory()->create(['role' => 'supplier']);

    // Create product owned by the supplier
    $product = Product::factory()->create(['supplier_id' => $supplier->id]);

    // Create order by the customer
    $order = Order::factory()->create(['user_id' => $customer->id]);

    OrderItem::factory()->create([
        'order_id'     => $order->id,
        'product_id'   => $product->id,
        'supplier_id'  => $supplier->id,
    ]);

    $response = $this->actingAs($customer)->getJson('/api/v1/orders');

    $response->assertOk();
    $response->assertJsonStructure([
        'data' => [
            '*' => ['id', 'user_id', 'status', 'created_at', 'updated_at', 'items']
        ]
    ]);
});
