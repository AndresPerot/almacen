<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                    <ul>
                            <tbody>
                                <tr>
                                <td>{{ $user-> name}}</td>
                                <td>{{ $user-> lastname}}</td>
                                <td>{{ $user-> contact}}</td>
                                <td>{{ $user-> position}}</td>
                                <td>{{ $user-> email}}</td>
                                </tr>
                            </tbody>                        
                    </ul>
                    </table>
                 </div>               
            </div>
        </div> 
    </body>
</html>