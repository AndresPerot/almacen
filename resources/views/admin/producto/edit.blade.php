<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="{{route('productos.update',$producto->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="descripcion">Descripcion :</label>
                    <input type="text" class="form-control" id="descripcion" name='descripcion' value="{{ $producto->descripcion}}">
                </div>
                <div class="form-group">
                    <label for="precio">Precio :</label>
                    <input type="text" class="form-control" id="precio" name='precio' value="{{ $producto->precio}}">
                </div>
                <div class="form-group">
                    <label for="stock">Stock :</label>
                    <input type="text" class="form-control" id="stock" name='stock' value="{{ $producto->stock}}">
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2" for="id_proveedores">Proveedores :</label>
                        <select class="custom-select my-1 mr-sm-2" id="id_proveedores"name='id_proveedores'>
                            @foreach ($proveedor as $proveedor)
                            <option value="{{$proveedor->id}}" name='id_proveedores'>{{$proveedor->nombre}}</option>
                            @endforeach
                        </select>
                </div>
                <button 
                   class ="btn btn-info"
                   >Actualizar Producto
                 </button>
            </form>
        </div>
    </body>
</html>