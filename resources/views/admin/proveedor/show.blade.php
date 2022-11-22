<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Vendedor</th>
                    <th scope="col">Celular</th>
                    </tr>
                </thead>
                    <ul>
                            <tbody>
                                <tr>
                                <td>{{ $proveedor-> nombre}}</td>
                                <td>{{ $proveedor-> vendedor}}</td>
                                <td>{{ $proveedor-> contacto}}</td>
                                </tr>
                            </tbody>                        
                    </ul>
                    </table>
                 </div>               
            </div>
        </div> 
    </body>
</html>