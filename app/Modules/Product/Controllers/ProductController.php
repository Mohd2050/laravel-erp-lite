<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Modules\Product\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Modules\Product\Models\Product;


class ProductController extends Controller
{
    public function __construct(
        protected ProductService $service
    ) {}

    public function index(): View
    {
        return view('products.index', [
            'products' => $this->service->listProducts(),
        ]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        $this->service->create($request->validated());

        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully');
    }


    public function edit(Product $product): View
    {
        return view('products.edit', [
            'product' => $product,
        ]);
    }

    public function update(
        UpdateProductRequest $request,
        Product $product
    ): RedirectResponse {
        $this->service->update($product, $request->validated());

        return redirect()
            ->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->service->delete($product);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
