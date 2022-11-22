<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbar')
         <div class="container p-4">
            <form action="register" method="POST" class="card border-info">
                @csrf 
                
                <div class="card-body">
                 <input 
                    type = "text"
                    name = "name"
                    class = "form-control mb-2"
                    placeholder = "Nombre..." 
                    min =3
                    max=50
                 />
                 
                 <input 
                    type = "text"
                    name = "lastname"
                    class ="form-control mb-2"
                    placeholder = "Apellido..." 
                    min=3
                    max=50
                 />
                 
                 <input 
                    type = "text"
                    name = "rut"
                    class = "form-control mb-2"
                    placeholder = "Rut..." 
                    min=12
                    max=12
                    
                 />
                 
                 <input 
                    type = "text"
                    name = "contact"
                    class ="form-control mb-2"
                    placeholder = "Contacto..." 
                 />

                 <input 
                    type = "text"
                    name = "position"
                    class = "form-control mb-2"
                    placeholder = "Cargo..." 
                 />

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
                   >Crear Usuario
                 </button>
                </div>
             </div>  
            
        </div>
    </body>
</html>