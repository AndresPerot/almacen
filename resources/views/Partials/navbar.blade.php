<div class="navbar navbar-dark bg-info">
    @if (Route::has('login'))
        <div class="nav-item">
            @auth
               
                <a href="{{ url('/') }}" class="navbar-brand">Home</a>
                 
                <form action="login" method="post" class="navbar-brand ">
                    @method('put')
                    @csrf
                    <button class="btn btn-danger">Logout</button>
                </form>

            @else
                <a href="{{ route('login') }}" class="navbar-brand">Login</a>
            @endauth
        </div>
    @endif
</div>