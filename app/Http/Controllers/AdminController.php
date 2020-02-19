<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function role()
    {
        return view('admin.role');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function pejabat()
    {
        return view('admin.pejabat');
    }
}
