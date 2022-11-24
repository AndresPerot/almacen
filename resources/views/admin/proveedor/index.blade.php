<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
            <table class="table">
                    <th>
                    <h1>Lista de Proveedores</h1>
                    </th>
                    <th>
                    <br>
                    <div>
                    <button type="button" onclick="location.href = '/admin/proveedor/register'"class="btn btn-success">+ Agregar Nuevo Proveedor</button>
                    </th>
                 </div>   
                </div>
                 </table>             
            </div>
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">Proveedor</th>
                    </tr>
                </thead>
                    <ul>
                        @foreach ($proveedores as $proveedores)
                            <tbody>
                                <tr>
                                <td>{{ $proveedores-> nombre}}</td>
                                <td>
                                <button type="button" onclick="location.href = '/admin/proveedor/show/{{ $proveedores-> id}}' " class="btn btn-success">Ver</button>
                                <button type="button" onclick="location.href = '/admin/proveedor/edit/{{ $proveedores-> id}}' "class="btn btn-secondary">Editar</button>
                                @if( $proveedores-> deleted_at)
                                <form action="{{route('proveedores.activar',$proveedores->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirma activar al proveedor: {{$proveedores->nombre}}')">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Activar</button>
                                </form> 
                                @else
                                <form action="{{route('proveedores.desactivar',$proveedores->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirma desactivar al proveedor: {{$proveedores->nombre}}')">
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