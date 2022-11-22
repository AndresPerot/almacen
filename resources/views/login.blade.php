<!DOCTYPE html>
<html lang="en">
    @include('partials/head')
    <body>
        @include('partials/navbar')
         <div class="container p-4">
            <form action="login" method="POST" class="card border-info">
                @csrf 
                
                <div class="card-body">
                 <input 
                    type = "email"
                    name = "email"
                    class = "form-control mb-2"
                    placeholder = "Email..." 
                 />
                 
                 <input 
                    type = "password"
                    name = "password"
                    class ="form-control mb-2"
                    placeholder = "Password..." 
                 />
                 <button 
                   class ="btn btn-info"
                   >Inicar Sesion
                 </button>
                </div>
             </div>  
            
        </div>
    </body>
</html>
