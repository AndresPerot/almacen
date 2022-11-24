<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\proveedor;

class ProductoController extends Controller
{
    //Funciones de Administrador

    public function create(Request $request){

        $producto = new producto();
        $producto->codbarra = $request->input('codbarra');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->id_proveedores = $request->input('id_proveedores');
        $producto->stock = $request->input('stock');
        $producto->save();
        return redirect()->intended('/admin/producto/index');
    }

    public function index(){
        $producto = \DB::table('productos')->get();

        return view(('admin/producto/index'), compact('producto'));   

    }

    public function register(){

        $proveedores=proveedor::all();

        return view(('admin/producto/register'), compact('proveedores'));   

    }

    public function proveedor($id){

        $proveedor=proveedor::find($id);
 

    }

    public function show($id, $id_proveedores)
    {
        $producto = producto::find($id);
        $proveedor = proveedor::withTrashed()->find($id_proveedores);
        return view('admin/producto/show', compact('producto'), compact('proveedor'));
    }

    public function edit($id){
        $producto = producto::find($id);
        $proveedor=proveedor::all();
        return view('admin/producto/edit', compact('producto'),compact('proveedor'));
    }

    public function update(Request $request, $id){
        $producto = producto::find($id);
        $data = $request-> only('descripcion','precio','stock','id_proveedores');
        $producto->update($data);
        return redirect()->route('productos.index');
    }

    public function desactivar(Request $request, $id){
        $producto = producto::find($id);
        $producto->delete();
        return back();
    }

    public function activar(Request $request, $id){

        $producto = producto::withTrashed()->find($id);
        if($producto && $producto->trashed()){
           $producto->restore();
        }
        return back();
    }

    //Funciones de Usuario

    public function createUsuario(Request $request){

        $producto = new producto();
        $producto->codbarra = $request->input('codbarra');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->id_proveedores = $request->input('id_proveedores');
        $producto->stock = $request->input('stock');
        $producto->save();
        return redirect()->intended('/producto/index')->with("mensaje", "Producto guardado");
    }

    public function registerUsuario(){

        $proveedores=proveedor::all();

        return view(('producto/register'), compact('proveedores'));   

    }

    public function indexUsuario(){
        $producto = \DB::table('productos')->get();
        return view(('producto/index'), compact('producto'));   

    }

    public function editUsuario($id){
        $producto = producto::find($id);
        $proveedor=proveedor::all();
        return view('producto/edit', compact('producto'),compact('proveedor'));
    }
    
    public function updateUsuario(Request $request, $id){
        $producto = producto::find($id);
        $data = $request-> only('precio','stock');
        $producto->update($data);
        return redirect()->route('productos.indexUsuario');
    }

    public function showUsuario($id, $id_proveedores)
    {
        $producto = producto::find($id);
        $proveedor = proveedor::withTrashed()->find($id_proveedores);
        return view('producto/show', compact('producto'), compact('proveedor'));
    }
}
