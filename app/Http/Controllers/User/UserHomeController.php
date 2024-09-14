<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
public function update(Request $request, $id): void
    {
        $request->validate([
        "name" => "required|max:255",
        "description" => "required",
        "price" => "required|numeric|gt:0",
        'image' => 'image',
    ]); 
    }
}