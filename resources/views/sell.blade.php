<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbar')
     
        <div class="container p-4">
                 <div class="card border-info">
                    <h1>Sala Ventas</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/sell') }}" class="navbar-brand">Ventas</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/sell') }}" class="navbar-brand">Informe Uso Diario</a>
                 </div>               
            </div>
        </div> 
    </body>
</html>