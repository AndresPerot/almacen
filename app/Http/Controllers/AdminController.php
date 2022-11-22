<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('/admin/index');
    }

    public function indexproductos(){
        return view('/admin/products/index');
    }

    public function indexusers(){
        $users = Users::all();
        return view('/admin/users/index');
    }

}
