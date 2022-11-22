<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="/admin/producto/register" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="descripcion">Descripcion :</label>
                    <input type="text" class="form-control" id="descripcion" name='descripcion' placeholder="Descripcion...">
                </div>
                <div class="form-group">
                    <label for="precio">Precio :</label>
                    <input type="text" class="form-control" id="precio" name='precio' placeholder="Precio...">
                </div>
                
                <div class="form-group">
                    <label class="my-1 mr-2" for="id_proveedores">Proveedores :</label>
                        <select class="custom-select my-1 mr-sm-2" id="id_proveedores"name='id_proveedores'>
                            @foreach ($proveedores as $proveedores)
                            <option value="{{$proveedores->id}}" name='id_proveedores'>{{$proveedores->nombre}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="stock">Stock :</label>
                    <input type="text" class="form-control" id="stock" name='stock' placeholder="Stock...">
                </div>
                <div class="form-group">
                    <label for="codbarra">Codigo de Barra :</label>
                    <input type="text" class="form-control" id="codbarra" name='codbarra' placeholder="Codigo de Barra...">
                </div>
               
                <button 
                   class ="btn btn-info"
                   >Crear Producto
                 </button>
            </form>
        </div>
    </body>
</html>