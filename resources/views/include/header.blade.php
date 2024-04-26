<nav class="navbar navbar-dark navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    Welcome, {{auth()->user()->name }}
                </li>
                    
                @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('login')}}">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('registration')}}">Registration</a>
                        </li>
                    @endguest
            </ul>
            
            <span class="navbar-text">
                @auth
                    <a class="nav-link" href="{{route('logout')}}">Logout</a> 
                @endauth
                @guest
                    First Task
                @endguest
                    
                    
            </span>

        </div>
    </div>
</nav>