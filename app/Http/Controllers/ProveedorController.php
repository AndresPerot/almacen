<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;

class ProveedorController extends Controller
{
    public function create(Request $request){
        $proveedor = new proveedor();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->vendedor = $request->input('vendedor');
        $proveedor->contacto = $request->input('contacto');
        $proveedor->save();
        return redirect()->intended('/admin/proveedor/index');
    }

    public function index(){
        $proveedores = \DB::table('proveedores')->get();
        return view(('admin/proveedor/index'), compact('proveedores'));   

    }

    public function show($id)
    {
        $proveedor = proveedor::find($id);
        return view('admin/proveedor/show', compact('proveedor'));
    }

    public function edit($id){
        $proveedor = proveedor::find($id);
        return view('admin/proveedor/edit', compact('proveedor'));
    }

    public function update(Request $request, $id){
        $proveedor = proveedor::find($id);
        $data = $request-> only('vendedor','contacto');
        $proveedor->update($data);
        return redirect()->route('proveedores.index');
    }

    public function desactivar(Request $request, $id){
        $proveedor = proveedor::find($id);
        $proveedor->delete();
        return back();
    }

    public function activar(Request $request, $id){

        $proveedor = proveedor::withTrashed()->find($id);
        if($proveedor && $proveedor->trashed()){
           $proveedor->restore();
        }
        return back();
    }
}
