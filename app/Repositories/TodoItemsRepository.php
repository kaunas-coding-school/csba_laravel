<?php

namespace App\Repositories;

use App\Models\TodoItem;
use Illuminate\Support\Collection;

class TodoItemsRepository
{
    public function getWithStatus(string $status): Collection
    {
        if (!in_array($status, TodoItem::STATES)) {
            throw new \RuntimeException('Wrong TodoItem status');
        }

       return TodoItem::query()
            ->where('status', $status)
            ->get();
    }
}
