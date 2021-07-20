<?php

namespace App\Managers;

use App\Models\TodoItem;
use App\Repositories\TodoItemsRepository;
use Illuminate\Support\Collection;

class TodoItemsManager
{
    public function __construct(private TodoItemsRepository $repository)
    {
    }

    public function getNewAll(): Collection
    {
        return $this->repository->getWithStatus(TodoItem::STATE_NEW);
    }

    public function getDoneAll(): Collection
    {
        return $this->repository->getWithStatus(TodoItem::STATE_DONE);
    }

    public function delete(TodoItem $todoItem): void
    {
        $this->repository->delete($todoItem);
    }

    public function removeDoneItems(): void
    {
        TodoItem::query()->where('status', TodoItem::STATE_DONE)->delete();
    }
}
