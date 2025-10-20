<?php

namespace App\infrastructure\persistence;

use App\architecture\onion\domain\entity\AbstractEntity;
use App\architecture\onion\domain\repository\ProductRepositoryInterface;
use App\Models\Product as Model;

class ProductRepository implements ProductRepositoryInterface
{

    protected Model $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function create(AbstractEntity $entity): int
    {
        $product = $this->model::query()->create([
            'category_id'=>$entity->getCategory()->getId(),
            'productTitle'=>$entity->getProductTitle(),
            'productDescription'=>$entity->getProductDescription(),
            'productImage'=>$entity->getProductImage(),
            'productPrice'=>$entity->getProductPrice(),
        ]);
        return $product->id;
    }

    public function readById(string $id): AbstractEntity
    {
        // TODO: Implement readById() method.
    }

    public function readAll(): array
    {
        // TODO: Implement readAll() method.
    }

    public function update(AbstractEntity $entity): AbstractEntity
    {
        // TODO: Implement update() method.
    }

    public function delete(AbstractEntity $entity): AbstractEntity
    {
        // TODO: Implement delete() method.
    }
}
