<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\VenderController;

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');


Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/ventas/index', function () {
    return view('/ventas/index');
})->middleware('auth');


Route::post('/login', [LoginController::class, 'login']);

Route::put('/login', [LoginController::class, 'logout']);


Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')    
->name('admin.index');

//Rutas de creacion de Usuarios

Route::resource('users', UserController::class);

Route::get('/admin/users/show/{id}', [UserController::class, 'show'])
->middleware('auth.admin')
->name('users.show') ;

Route::put('/admin/users/show/{id}', [UserController::class, 'update'])
->middleware('auth.admin')
->name('users.update') ;

Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])
->middleware('auth.admin')
->name('users.edit') ;

Route::delete('/admin/users/edit/{id}', [UserController::class, 'desactivar'])
->middleware('auth.admin')
->name('users.desactivar') ;

Route::post('/admin/users/edit/{id}', [UserController::class, 'activar'])
->middleware('auth.admin')
->name('users.activar') ;

Route::get('/admin/users/index', [UserController::class, 'index'])
->middleware('auth.admin')
->name('users.index') ;

Route::post('/admin/users/register', [UserController::class, 'create'])
->middleware('auth.admin')
->name('users.create');

Route::get('/admin/users/register', [UserController::class, 'register'])
->middleware('auth.admin')
->name('users.register') ;


//Rutas de creacion de Proveedores

Route::resource('proveedores', ProveedorController::class);

Route::get('/admin/proveedor/show/{id}', [ProveedorController::class, 'show'])
->middleware('auth.admin')
->name('proveedores.show') ;

Route::put('/admin/proveedor/show/{id}', [ProveedorController::class, 'update'])
->middleware('auth.admin')
->name('proveedores.update') ;

Route::get('/admin/proveedor/edit/{id}', [ProveedorController::class, 'edit'])
->middleware('auth.admin')
->name('proveedores.edit') ;

Route::get('/admin/proveedor/index', [ProveedorController::class, 'index'])
->middleware('auth.admin')
->name('proveedores.index') ;

Route::post('/admin/proveedor/register', [ProveedorController::class, 'create'])
->middleware('auth.admin')
->name('proveedores.create');

Route::get('/admin/proveedor/register', [ProveedorController::class, 'register'])
->middleware('auth.admin')
->name('proveedores.register') ;

Route::delete('/admin/proveedor/edit/{id}', [ProveedorController::class, 'desactivar'])
->middleware('auth.admin')
->name('proveedores.desactivar') ;

Route::post('/admin/proveedor/edit/{id}', [ProveedorController::class, 'activar'])
->middleware('auth.admin')
->name('proveedores.activar') ;

//Rutas de creacion de Productos Administrador

Route::resource('productos', ProductoController::class);

Route::get('/admin/producto/show/{id}/{id_proveedores}', [ProductoController::class, 'show'])
->middleware('auth.admin')
->name('productos.show') ;


Route::put('/admin/producto/show/{id}', [ProductoController::class, 'update'])
->middleware('auth.admin')
->name('productos.update') ;

Route::get('/admin/producto/edit/{id}', [ProductoController::class, 'edit'])
->middleware('auth.admin')
->name('productos.edit') ;

Route::get('/admin/producto/index/', [ProductoController::class, 'index'])
->middleware('auth.admin')
->name('productos.index') ;

Route::post('/admin/producto/register', [ProductoController::class, 'create'])
->middleware('auth.admin')
->name('productos.create');


Route::get('/admin/producto/register', [ProductoController::class, 'register'])
->middleware('auth.admin')
->name('productos.register') ;

Route::delete('/admin/producto/edit/{id}', [ProductoController::class, 'desactivar'])
->middleware('auth.admin')
->name('productos.desactivar') ;

Route::post('/admin/producto/edit/{id}', [ProductoController::class, 'activar'])
->middleware('auth.admin')
->name('productos.activar') ;

//Rutas de creacion de Productos Usuario


Route::get('/producto/show/{id}/{id_proveedores}', [ProductoController::class, 'showUsuario'])
->middleware('auth')
->name('productos.showUsuario') ;

Route::put('/producto/show/{id}', [ProductoController::class, 'updateUsuario'])
->middleware('auth')
->name('productos.updateUsuario') ;

Route::get('/producto/edit/{id}', [ProductoController::class, 'editUsuario'])
->middleware('auth')
->name('productos.editUsuario') ;

Route::get('/producto/register', [ProductoController::class, 'registerUsuario'])
->middleware('auth')
->name('productos.registerUsuario') ;

Route::post('/producto/register', [ProductoController::class, 'createUsuario'])
->middleware('auth')
->name('productos.createUsuario');

Route::get('/producto/index', [ProductoController::class, 'indexUsuario'])
->middleware('auth')
->name('productos.indexUsuario') ;



//Ruta Ventas

Route::resource('ventas', VentasController::class);


//Rutas Para Vender

Route::post("/productoDeVenta", [VenderController::class, 'agregarProductoVenta'])
->middleware('auth')
->name("agregarProductoVenta");

Route::delete("/productoDeVenta", [VenderController::class, 'quitarProductoDeVenta'])
->middleware('auth')
->name("quitarProductoDeVenta");

Route::post("/terminarOCancelarVenta", [VenderController::class, 'terminarOCancelarVenta'])
->middleware('auth')
->name("terminarOCancelarVenta");

Route::get('/vender/vender', [VenderController::class, 'index'])
->middleware('auth')
->name("vender.index");

