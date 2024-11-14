<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UsersController extends Controller
{
    public function create(): View
    {
        return view('form');
    }

    public function store()
    {
        // Validate the request...
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        return('User created with values : ' . $validated['name'] . ', ' . $validated['email'] . ', ' . $validated['password']);
    }
}
