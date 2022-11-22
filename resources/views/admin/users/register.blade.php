<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="register" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="name">Nombre :</label>
                    <input type="text" class="form-control" id="name" name='name' placeholder="Nombre...">
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido :</label>
                    <input type="text" class="form-control" id="lastname" name='lastname' placeholder="Apellido...">
                </div>
                <div class="form-group">
                    <label for="contact">Celular :</label>
                    <input type="text" class="form-control" id="contact" name='contact' placeholder="Celular...">
                </div>
                <div class="form-group">
                    <label class="my-1 mr-2" for="position">Cargo :</label>
                        <select class="custom-select my-1 mr-sm-2" id="position" name='position'>
                            <option selected>Cargo...</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Usuario">Usuario</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name='email' placeholder="Email...">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name='password' placeholder="Password...">
                </div>
                <button 
                   class ="btn btn-info"
                   >Crear Usuario
                 </button>
            </form>
        </div>
    </body>
</html>