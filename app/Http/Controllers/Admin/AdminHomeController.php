<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\View\View;
=======
>>>>>>> bc23343a033d79ee485172ce535bd115cbe0521d

class AdminHomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Admin - Online Store';

        return view('admin.index')->with('viewData', $viewData);
    }
}
