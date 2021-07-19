<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        /** @var User $user */
        $user = User::first();
        return $user->addresses();
    }
}
