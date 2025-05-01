<?php

namespace App\Http\Controllers;

use App\Helpers\RespondWith;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(): JsonResponse
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        if (!$cart) return RespondWith::success([]);

        $items = $cart->items()->with('product')->get();
        return RespondWith::success($items);
    }

    public function store(CartRequest $request): JsonResponse
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        // This same endpoint can be used to update quantity of item in cart.
        // Just switch to updateOrCreate and we should be good 😉
        $item = $cart->items()->firstOrCreate(
            ['product_id' => $request->product_id],
            ['quantity' => $request->quantity ?? 1]
        );

        $item->load('product');

        return RespondWith::success($item);
    }

    public function destroy(Request $request, int $product): JsonResponse
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        if (!$cart) return RespondWith::success();

        $cart->items()->where('product_id', $product)->delete();
        return RespondWith::success();
    }
}
