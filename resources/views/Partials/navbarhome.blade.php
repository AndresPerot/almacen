<div class="navbar navbar-dark bg-info">
    @if (Route::has('login'))
        <div class="nav-item">
            @auth
               
                <a href="{{ url('/') }}" class="navbar-brand">Home</a>
                
            @endauth
        </div>
    @endif
</div>