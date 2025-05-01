<?php

namespace App\Http\Controllers;

use App\Helpers\RespondWith;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __invoke(Request $request): JsonResponse
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
}
