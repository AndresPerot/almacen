<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbar')
         <div class="container p-4">
         <th>
            <h2>Editando {{$producto->descripcion}}</h2>
        </th>
            <form action="{{route('productos.updateUsuario',$producto->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="precio">Precio :</label>
                    <input type="text" class="form-control" id="precio" name='precio' value="{{ $producto->precio}}">
                </div>
                <div class="form-group">
                    <label for="stock">Stock :</label>
                    <input type="text" class="form-control" id="stock" name='stock' value="{{ $producto->stock}}">
                </div>
                <button 
                   class ="btn btn-info"
                   >Actualizar Producto
                 </button>
            </form>
        </div>
    </body>
</html>