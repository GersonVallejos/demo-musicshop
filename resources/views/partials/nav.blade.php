<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    
    <div class="container">
    
        <a class="navbar-brand" href=" {{route('inicio')}} ">
            {{config('app.name')}}
        </a>

        

        <div class="search-box">
            <input class="search-text" type="text" name="search" placeholder="    Search">
            
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>
        

        <button class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" 
            id="navbarSupportedContent">

            
            

            <ul class="nav nav-pills ml-auto">

                <li class="nav-item">
                    <a class="nav-link  {{ setActive('inicio') }} " href=" {{route('inicio')}} ">
                        Inicio</a></li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('productos.*') }} " href=" {{route('productos.index')}} ">
                        Productos</a></li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('servicios') }} " href=" {{route('servicios')}} ">
                        Servicios</a></li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('contacto') }} " href=" {{route('contacto')}} ">
                        Contacto</a></li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('sobre') }} " href=" {{route('sobre')}} ">
                        Sobre</a></li>

                @auth
                    <li class="dropdown">
                        <button class="btn border-primary dropdown-toggle text-primary" 
                            type="button" 
                            id="dropdownMenuButton" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="nav-link" href=" {{route('perfil')}} ">Perfil</a></li>
                            <li><a class="nav-link" href="#">Configuración</a></li>
                            <li><a class="nav-link" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Cerrar sesión</a></li>
                        </ul>
                    </li>
                   
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login') }} " href=" {{route('login')}} ">
                            Login</a></li>
                    
                @endauth

            </ul>

        </div>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>