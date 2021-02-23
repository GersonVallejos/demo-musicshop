@extends('layout')

@section('title','Productos')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-5 mb-0">Productos</h1>
            @auth
                @if (auth()->user()->hasRoles(['admin']))
                    <a class="btn btn-primary text-white" 
                        href=" {{route('productos.create')}} "
                    >Registrar Producto</a>
                @endif
            @endauth
        </div>

        <p class="lead text-secondary"><small>Productos disponibles</small></p>

        
        <div class="row">
            @forelse ($productos as $producto)
                <div class="col-lg-6 border-0">
                    
                    <div class="d-flex bg-transparent product-item justify-content-center">
                        <a class="card text-secondary align-items-center border-0 shadow" 
                            href=" {{route('productos.show',$producto)}} ">
                            @foreach ($producto->files as $file)
                                <img class="img-fluid card-img-top" src="/{{$file->url}}" alt="Responsive image"><br>
                            @endforeach
                            <br>
                            <div class="card-body font-weight-bold"> 
                                <h6 class="card-text">{{ $producto->name }}</h6>
                                <h2><span class="badge badge-success text-wrap float-left">{{$producto->price}} €</span></h2>
                                <span class="badge badge-danger text-wrap float-right">Envio Gratis</span>
                            </div>
                            
                        </a>
                    
                    </div>
                </div>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay proyectos para mostrar</li>
            @endforelse

                {{ $productos->links() }}
        </div>
    </div>
@endsection