<?php

namespace App\Modules\Product\Services;

use App\Modules\Product\Repositories\ProductRepositoryInterface;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $repository
    ) {}

    public function listProducts()
    {
        return $this->repository->all();
    }

    public function createProduct(array $data)
    {
        //   لاحقًا:
        // - حساب ضريبة
        // - تحقق business rules
        // - logging

        return $this->repository->create($data);
    }
}
