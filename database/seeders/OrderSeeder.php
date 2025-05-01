<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        User::select('id')->where('role', RoleEnum::CUSTOMER)->get()->each(function ($user) {
            Order::factory()->count(3)->create(['user_id' => $user->id])->each(function ($order) {
                $items = OrderItem::factory()->count(rand(2, 4))->create(['order_id' => $order->id]);
                $total = $items->sum(fn ($item) => $item->unit_price * $item->quantity);
                $order->update(['total' => $total]);
            });
        });
    }
}
