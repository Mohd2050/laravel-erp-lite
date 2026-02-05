<?php

namespace App\Modules\Product\Repositories;

use App\Modules\Product\Models\Product;

interface ProductRepositoryInterface
{
    public function all();
    public function find(int $id): ?Product;
    public function create(array $data): Product;
}
