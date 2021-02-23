@extends('layout')

@section('title','Productos | '. $producto->name)

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h4> {{$producto->name}} </h4>
            @foreach ($producto->files as $file)
                <img class="img-fluid" src="/{{$file->url}}" alt="">
            @endforeach
            <small><i>{{$producto->brand}}</i></small>
            <p> {{$producto->color}} - {{$producto->price}}$ </p>

            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href=" {{route('productos.index')}} ">Regresar</a>
                    <br>
                    <a class="btn-sm btn-success" href=" {{route('files.crear',$producto)}} ">Subir imagen</a>
                </div>
                @auth
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-primary text-white" href=" {{route('productos.edit',$producto)}} "> 
                            Editar</a>
                        
                        @if (auth()->user()->hasRoles(['admin']))
                            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-product').submit()">
                                Eliminar</a>

                            <form id="delete-product" 
                                class="d-none"
                                method="POST" action=" {{route('productos.destroy',$producto)}} ">
                                @csrf @method('DELETE')
                            </form>
                        @endif
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection
