<?php

namespace App\architecture\onion\domain\repository;

use App\architecture\onion\domain\entity\AbstractEntity;

interface RepositoryInterface
{
    public function create(AbstractEntity $entity): int;
    public function readById(string $id): AbstractEntity;
    public function readAll(): array;
    public function update(AbstractEntity $entity): AbstractEntity;
    public function delete(AbstractEntity $entity): AbstractEntity;

}
