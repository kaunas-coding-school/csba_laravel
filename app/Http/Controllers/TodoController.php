<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function list(Request $request)
    {
        $newTodo = new TodoItem();
        $newTodo->title = ("Pavadinimas ".random_int(1, 999));
        $newTodo->description = ("Aprasymas. ".random_int(1, 999));
        $newTodo->status = (TodoItem::STATE_NEW);

        $newTodo->save();

        $items = TodoItem::all();

        return view('list', ['list' => $items]);
    }

    public function edit(TodoItem $todoItem)
    {
        return view('todo-edit', $todoItem);
    }

    public function done(TodoItem $todoItem)
    {
        $todoItem->update(['status' => TodoItem::STATE_DONE]);
        return redirect(route('todo.list'));
    }

    public function update(TodoItem $todoItem, Request $request)
    {
        $todoItem->update($request->toArray());
        return redirect(route('todo.list'));
    }
}
