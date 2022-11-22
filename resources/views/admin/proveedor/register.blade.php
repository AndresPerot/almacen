<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="/admin/proveedor/register" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="nombre">Proveedor :</label>
                    <input type="text" class="form-control" id="nombre" name='nombre' placeholder="Nombre...">
                </div>
                <div class="form-group">
                    <label for="vendedor">Vendedor :</label>
                    <input type="text" class="form-control" id="vendedor" name='vendedor' placeholder="Nombre Vendedor...">
                </div>
                <div class="form-group">
                    <label for="contacto">Celular Vendedor :</label>
                    <input type="text" class="form-control" id="contacto" name='contacto' placeholder="Celular Vendedor...">
                </div>
                <button 
                   class ="btn btn-info"
                   >Crear Nuevo Proveedor
                 </button>
            </form>
        </div>
    </body>
</html>