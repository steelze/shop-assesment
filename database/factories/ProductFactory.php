<?php

namespace Database\Factories;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supplier_id' => User::where('role', RoleEnum::SUPPLIER)->inRandomOrder()->value('id') ?? User::factory()->create(['role' => 'supplier']),
            'name' => fake()->name(),
            'category' => fake()->title(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(10, 100)
        ];
    }
}
