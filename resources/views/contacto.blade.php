@extends('layout')

@section('title','Contacto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('mensajes.store')}}">
                    @csrf
                    <h1 class="display-5">Contacto</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm 
                            @error('name') is-invalid @else border-0 @enderror" 
                            id="name"
                            name="name" 
                            placeholder="Nombre.." 
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control bg-light shadow-sm 
                            @error('email') is-invalid @else border-0 @enderror"
                            id="email"
                            type="email" 
                            name="email" 
                            placeholder="Email.." 
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="motivo">Motivo</label>
                        <input class="form-control bg-light shadow-sm 
                            @error('motivo') is-invalid @else border-0 @enderror" 
                            id="motivo"
                            name="motivo" 
                            placeholder="Motivo.." 
                            value="{{ old('motivo') }}">
                        @error('motivo')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{$message}} <strong>
                            </span>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm
                            @error('contenido') is-invalid @else border-0 @enderror" 
                            id="contenido" 
                            name="contenido" 
                            placeholder="Contenido..">{{ old('name') }}
                        </textarea>
                        @error('contenido')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{$message}} </strong>
                            </span>
                        @enderror
                    </div>
    
                    <button class="btn btn-primary text-white btn-lg btn-block">Enviar</button>
                    
                </form>
            </div>
        </div>
        
    

    </div>
@endsection