<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function create(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->contact = $request->input('contact');
        $user->position = $request->input('position');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->intended('/admin/users/index');
    }

    public function register(){

        return view(('admin/users/register'));  

    }

    public function index(){
        $users = \DB::table('users')->get();
        return view(('admin/users/index'), compact('users'));   

    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin/users/show', compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin/users/edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $data = $request-> only('name', 'lastname','contact', 'position', 'email');
        if(trim($request -> password) =='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function desactivar(Request $request, $id){
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function activar(Request $request, $id){

        $user = User::withTrashed()->find($id);
        if($user && $user->trashed()){
           $user->restore();
        }
        return back();
    }

}

