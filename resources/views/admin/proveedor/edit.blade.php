<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="{{route('proveedores.update',$proveedor->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="vendedor">Vendedor :</label>
                    <input type="text" class="form-control" id="vendedor" name='vendedor' value="{{ $proveedor->vendedor}}">
                </div>
                <div class="form-group">
                    <label for="contacto">Celular Vendedor :</label>
                    <input type="text" class="form-control" id="contacto" name='contacto' value="{{ $proveedor->contacto}}">
                </div>
                <button 
                   class ="btn btn-info"
                   >Actualizar Proveedor
                 </button>
            </form>
        </div>
    </body>
</html>