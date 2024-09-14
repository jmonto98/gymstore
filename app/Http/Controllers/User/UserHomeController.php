<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserHomeController extends Controller
{
    public function index(): View
    {
        $user = User::all();

        return view('user.index');
    }

    public function create(Request $request): RedirectResponse
    {
        User::validate($request);

        $newUser = new User;
        $newUser->setName($request->input('name'));
        $newUser->setLastName($request->input('lastName'));
        $newUser->setAddress($request->input('address'));
        $newUser->setEmail($request->input('email'));
        $newUser->setUsername($request->input('username'));
        $newUser->setPassword($request->input('password'));
        $newUser->setRol($request->input('rol'));
        $newUser->setState($request->input('state'));
        $newUser->setBalance($request->input('balance'));

        $newUser->save();

        return redirect()->route('user.index')->with('success', 'User created successfully.');
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
