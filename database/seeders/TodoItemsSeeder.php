<?php

namespace Database\Seeders;

use App\Models\TodoItem;
use Illuminate\Database\Seeder;

class TodoItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoItem::factory()->count(10)->create();
    }
}
