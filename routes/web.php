<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');


Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::get('/sell', function () {
    return view('sell');
})->middleware('auth')->name('sell');

Route::get('/mantencion', function () {
    return view('mantencion');
})->middleware('auth')->name('mantencion');


Route::get('/admin/users/register', function () {
    return view('/admin/users/register');
})->middleware('auth.admin')    
   ->name('register');

Route::get('/admin/proveedor/register', function () {
    return view('/admin/proveedor/register');
})->middleware('auth.admin')
    ->name('register.proveedor');

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
->middleware('auth.admin');


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

Route::delete('/admin/proveedor/edit/{id}', [ProveedorController::class, 'desactivar'])
->middleware('auth.admin')
->name('proveedores.desactivar') ;

Route::post('/admin/proveedor/edit/{id}', [ProveedorController::class, 'activar'])
->middleware('auth.admin')
->name('proveedores.activar') ;

//Rutas de creacion de Productos

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

Route::get('/admin/producto/index', [ProductoController::class, 'index'])
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



