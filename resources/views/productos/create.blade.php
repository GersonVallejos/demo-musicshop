@extends('layout')

@section('title','Registrar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validate-error')
            
                <form class="bg-white py-3 px-4 shadow rounded" 
                    method="POST" 
                    action=" {{route('productos.store')}} ">

                    <h1 class="display-5">Registrar productos</h1>
                    <hr>

                    @include('productos._form')

                    <button class="btn btn-primary btn-lg btn-block text-white">Guardar</button>
                    <a class="btn btn-link btn-block" href=" {{route('productos.index')}} ">Cancelar</a>

                </form>


            </div>
        </div>
    </div>

@endsection