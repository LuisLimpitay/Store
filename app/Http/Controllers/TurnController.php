<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TurnController extends Controller
{
    public function index(User $user)
        {

            $users = User::find($user->id);
            //dump($users);
            return view('customers.enrollments', compact('users'));
        }
}
