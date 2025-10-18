<?php

namespace App\infrastructure\persistence;

use App\architecture\onion\domain\entity\AbstractEntity;
use App\architecture\onion\domain\repository\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{

    public function create(AbstractEntity $entity): int
    {
        // TODO: Implement create() method.
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
