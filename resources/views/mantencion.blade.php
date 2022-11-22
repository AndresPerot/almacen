<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbar')
     
        <div class="container p-4">
                 <div class="card border-info">
                    <h1>Mantencion</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/sell') }}" class="navbar-brand">Ingreso Nuevo Producto</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/sell') }}" class="navbar-brand">Cambio Precio Producto</a>
                 </div>               
            </div>
        </div> 
    </body>
</html>