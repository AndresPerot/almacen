<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbar')
     
            <div class="container p-4">
                 <div>
                    <h1>Bienvenidos</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class=>
                 <a href="{{ url('/vender/vender') }}" class="navbar-brand">Sala Ventas</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div>
                 <a href="{{ url('producto/index') }}" class="navbar-brand">Mantencion Productos</a>
                 </div>               
            </div>
        </div> 
    </body>
</html>