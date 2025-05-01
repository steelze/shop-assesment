<?php

namespace App\Http\Controllers;

use App\Helpers\RespondWith;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::all();
        return RespondWith::success($products);
    }

    public function store(ProductRequest $request): JsonResponse
    {
        $product = Product::create(array_merge($request->validated(), ['supplier_id' => Auth::id()]));
        return RespondWith::success($product, 'Product Created Succesfully');
    }

    public function show(Product $product): JsonResponse
    {
        return RespondWith::success($product);
    }

    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        throw_if($product->supplier_id !== Auth::id(), ModelNotFoundException::class);
        $product->update($request->validated());

        return RespondWith::success($product, 'Product Updated Succesfully');
    }

    public function destroy(Product $product): JsonResponse
    {
        throw_if($product->supplier_id !== Auth::id(), ModelNotFoundException::class);
        $product->delete();

        return RespondWith::success(code: Response::HTTP_NO_CONTENT);
    }
}
