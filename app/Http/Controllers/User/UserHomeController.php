<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
class UserHomeController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return view('user.index', compact('users'));

    }

    public function register(): View
    {

        return view('user.register');

    }

    public function edit($id): View
    {
        $user = User::findOrFail($id);
        $viewData = [
            'user' => $user,
            'title' => 'Edit User',
        ];

        return view('user.edit', $viewData);
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
        $newUser->setPassword(Hash::make($request->input('password')));
        $newUser->setRol($request->input('rol'));
        $newUser->setState($request->input('state'));
        $newUser->setBalance($request->input('balance'));   

        $newUser->save();

        return redirect()->route('home.index')->with('success', 'User created successfully.');
    }

    public function update(Request $request, $id): RedirectResponse
    {

        User::validate($request);
        $user = User::findOrFail($id);
        $user->setName($request->input('name'));
        $user->setLastName($request->input('lastName'));
        $user->setAddress($request->input('address'));
        $user->setEmail($request->input('email'));
        $user->setUsername($request->input('username'));
        $user->setPassword($request->input('password'));
        $user->setRol($request->input('rol'));
        $user->setState($request->input('state'));
        $user->setBalance($request->input('balance'));

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
}
