<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function register(): View
    {
        return view('auth.register');
    }

    public function save(Request $request): RedirectResponse
    {
        User::validate($request);

        $newUser = new User;
        $newUser->setName($request->input('name'));
        $newUser->setLastName($request->input('lastName'));
        $newUser->setAddress($request->input('address'));
        $newUser->setEmail($request->input('email'));
        $newUser->setUsername($request->input('username'));
        $newUser->setPassword(Hash::make($request->input('password')));
        $newUser->save();

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }
}
