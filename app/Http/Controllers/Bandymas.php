<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class Bandymas extends Controller
{
    public function testas(Request $request)
    {
        $newTodo = new TodoItem();
        $newTodo->title = ("Pavadinimas ".random_int(1, 999));
        $newTodo->description = ("Aprasymas. ".random_int(1, 999));
        $newTodo->status = (TodoItem::STATE_NEW);

        $newTodo->save();

        $items = TodoItem::all();

        return view('testas', ['list' => $items]);
    }
}
