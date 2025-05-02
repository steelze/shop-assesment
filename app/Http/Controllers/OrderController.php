<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatusEnum;
use App\Helpers\RespondWith;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $orders = $this->orders($request, Auth::user());
        return RespondWith::success($orders);
    }

    /**
     * @return Collection<Order> Paginated collection of orders
     */
    public function orders(Request $request, User $user): Collection
    {
        return Order::query()
            ->when($user->isSupplier(), function($sql) use ($user) {
                return $sql->select('id', 'user_id', 'status', 'created_at', 'updated_at')
                    ->with('items.product', 'user:id,name')
                    ->withWhereHas('items', fn ($query) => $query->where('supplier_id', $user->id));
            }, function($sql) use ($user) {
                return $sql->with('items.product.supplier')->where('user_id', $user->id);
            })
            ->get();
    }

    public function store(Request $request): JsonResponse
    {
        $total = 0;
        $cart = Cart::with('items.product')->where('user_id', Auth::id())->first();

        if (!$cart?->items) {
            return RespondWith::error(message: 'No item in cart!!');
        }

        $order = Order::create(['user_id' => Auth::id(), 'status' => OrderStatusEnum::PAID, 'total' => 0]);
        foreach($cart->items as $item) {
            $order->items()->create([
                'product_id' => $item->product->id,
                'supplier_id' => $item->product->supplier_id,
                'quantity' => $item->quantity,
                'unit_price' => $item->product->price,
                'total' => $item->product->price * $item->quantity,
            ]);

            $total += $item->product->price * $item->quantity;
        }

        $order->update(['total' => $total]);

        $cart->items()->delete();
        $cart->delete();
        return RespondWith::success($order);
    }
}
