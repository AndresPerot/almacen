<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradminhome')
     
            <div class="container p-4">
                 <div>
                    <h1>Bienvenidos</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class=>
                 <a href="{{ url('/mantencion/sell') }}" class="navbar-brand">Sala Ventas</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div>
                 <a href="{{ url('admin/proveedor/index') }}" class="navbar-brand">Mantencion Proveedores</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div>
                 <a href="{{ url('admin/producto/index') }}" class="navbar-brand">Mantencion Productos</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div>
                 <a href="{{ url('admin/users/index') }}" class="navbar-brand">Mantencion Usuarios</a>
                 </div>               
            </div>
        </div> 
    </body>
</html>