<?php

namespace Vhom\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Vhom\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
