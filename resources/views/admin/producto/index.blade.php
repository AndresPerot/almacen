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
                    <th>
                    <br>
                    <div>
                    <button type="button" onclick="location.href = '/admin/producto/register'"class="btn btn-success">+ Agregar Nuevo Producto</button>
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
                                    <button type="button"  onclick="location.href= '/admin/producto/show/{{$producto->id}}/{{$producto->id_proveedores}}'" class="btn btn-success">Ver</button>
                                    <button type="button" onclick="location.href = '/admin/producto/edit/{{$producto->id}}' "class="btn btn-secondary">Editar</button>
                                    @if( $producto-> deleted_at)
                                    <form action="{{route('productos.activar',$producto->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirma activar el producto: {{$producto->descripcion}}')">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Activar</button>
                                    </form> 
                                    @else
                                    <form action="{{route('productos.desactivar',$producto->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirma desactivar al proveedor: {{$producto->descripcion}}')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Desactivar</button>
                                    </form> 
                                    @endif
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