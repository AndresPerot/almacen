<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">Codigo Barra</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Stock</th>
                    </tr>
                </thead>
                    <ul>
                            <tbody>
                                <tr>
                                <td>{{ $producto-> codbarra}}</td>
                                <td>{{ $producto-> descripcion}}</td>
                                <td>{{ $producto-> precio}}</td>
                                <td>{{ $proveedor-> nombre}}</td>
                                <td>{{ $producto-> stock}}</td>
                                </tr>
                            </tbody>                        
                    </ul>
                    </table>
                 </div>               
            </div>
        </div> 
    </body>
</html>