<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserHomeController extends Controller
{
    public function index(): View
    {
        $user = User::all();

        return view('user.index');
    }

    public function update(Request $request, $id): void
    {
        $request->validate([
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email',
            'username' => 'required|max:255',
            'password' => 'current_password',
            'rol' => 'required',
            'state' => 'required',
            'balance' => 'required|numeric|gt:0',
        ]);
    }
}
