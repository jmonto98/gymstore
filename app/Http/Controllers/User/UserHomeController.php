<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserHomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.users');
        $viewData['subtitle'] = __('messages.list_of_users');
        $viewData['users'] = User::all();

        return view('user.index')->with('viewData', $viewData);
    }

    public function edit($id): View
    {
        $viewData = [];
        $viewData['user'] = User::findOrFail($id);
        $viewData['title'] = __('messages.edit_user');

        return view('user.edit')->with('viewData', $viewData);
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

        return redirect()->route('admin.user.index')->with('success', __('messages.user_created_successfully'));
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

        return redirect()->route('admin.user.index')->with('success', __('messages.user_updated_successfully'));
    }
}
