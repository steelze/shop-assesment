<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $quantity = $this->faker->numberBetween(1, 5);

        return [
            'order_id' => Order::inRandomOrder()->value('id'),
            'product_id' => $product->id,
            'supplier_id' => $product->supplier_id,
            'quantity' => $quantity,
            'unit_price' => $product->price,
            'total' => $quantity * $product->price,
        ];
    }
}
