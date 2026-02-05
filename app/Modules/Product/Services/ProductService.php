<?php

namespace App\Modules\Product\Services;

use App\Modules\Product\Models\Product;

class ProductService
{
    public function listProducts()
    {
        return Product::latest()->get();
    }

    public function create(array $data): Product
    {
        return Product::create($data);
    }

    public function update(Product $product, array $data): Product
    {
        $product->update($data);

        return $product;
    }

    public function delete(Product $product): void
    {
        $product->delete();
    }
}
