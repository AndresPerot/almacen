<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="{{route('users.update',$user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre :</label>
                    <input type="text" class="form-control" id="name" name='name' value="{{ $user->name}}">
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido :</label>
                    <input type="text" class="form-control" id="lastname" name='lastname' value="{{ $user->lastname}}">
                </div>
                <div class="form-group">
                    <label for="contact">Celular :</label>
                    <input type="text" class="form-control" id="contact" name='contact' value="{{ $user->contact}}">
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2" for="position">Cargo :</label>
                        <select class="custom-select my-1 mr-sm-2" id="position" name='position'>
                            <option selected>{{ $user->position}}</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Usuario">Usuario</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name='email' value="{{ $user->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name='password' placeholder="Ingrese solo en caso de modificarla.">
                </div>
                <button 
                   class ="btn btn-info"
                   >Actualizar Usuario
                 </button>
            </form>
        </div>
    </body>
</html>