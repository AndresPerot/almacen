<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
            <table class="table">
                    <th>
                    <h1>Lista de Usuarios</h1>
                    </th>
                    <th>
                    <br>
                    <div>
                    <button type="button" onclick="location.href = '/admin/users/register'"class="btn btn-success">+ Agregar usuario</button>
                    </th>
                 </div>   
                </div>
                 </table>             
            </div>
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Accion</th>
                    </tr>
                </thead>
                    <ul>
                        @foreach ($users as $users)
                            <tbody>
                                <tr>
                                <td>{{ $users-> id}}</td>    
                                <td>{{ $users-> name}}</td>
                                <td>{{ $users-> lastname}}</td>

                                <td>
                                    <button type="button" onclick="location.href = '/admin/users/show/{{$users->id}}' " class="btn btn-success">Ver</button>
                                    <button type="button" onclick="location.href = '/admin/users/edit/{{$users->id}}' "class="btn btn-secondary">Editar</button>
                                    @if( $users-> deleted_at)
                                    <form action="{{route('users.activar',$users->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirma activar al empleado: {{$users->name}} {{$users->lastname}}')">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Activar</button>
                                    </form> 
                                    @else
                                    <form action="{{route('users.desactivar',$users->id)}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Confirma desactivar al empleado: {{$users->name}} {{$users->lastname}}')">
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