<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
            <table class="table">
                    <th>
                    <h1>Lista Productos</h1>
                    </th>
                    @include("notificacion")
                    <th>
                    <br>
                    <div>
                    <button type="button" onclick="location.href = '/producto/register'"class="btn btn-success">+ Agregar Nuevo Producto</button>
                    </th>
                 </div>   
                </div>
                 </table>             
            </div>
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Accion</th>

                    </tr>
                </thead>
                    <ul>
                        @foreach ($producto as $producto)
                            <tbody>
                                <tr>
                                <td>{{ $producto-> descripcion}}</td>
                                <td>{{ $producto-> precio}}</td>

                                <td>
                                    <button type="button"  onclick="location.href= '/producto/show/{{$producto->id}}/{{$producto->id_proveedores}}'" class="btn btn-success">Ver</button>
                                    <button type="button" onclick="location.href = '/producto/edit/{{$producto->id}}' "class="btn btn-secondary">Editar</button>
                                </td>
                                </tr>
                            </tbody>
                           
                        @endforeach
                        
                    </ul>
                    </table>
                 </div>               
            </div>
        </div> 
    </body>
</html>