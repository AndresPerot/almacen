<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

       $credentials =  $request->only('email', 'password');

       if (Auth::attempt($credentials)) {

           
          $request->session()->regenerate();

          if(auth()->user()->position == 'Administrador'){
            return redirect() -> route('admin.index');
          }else {

          return redirect()->intended('/');
          }
        }

       return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    } 

}