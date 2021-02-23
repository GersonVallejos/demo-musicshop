@extends('layout')

@section('title','Quienes Somos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 container-fluid">
            <img class="img-fluid mb-4" src="/img/portada.jpg" alt="portada web">
        </div>
        <div class="col-12 col-lg-6 col-sm-10 mx-auto">
            <h1 class="display-5 text-primary">Quienes somos</h1>
            <p>MusicShop es una tienda enfocada en la venta de productos musicales
                de calidad que satisfagan las necesidades de nuestros clientes con
                periodos de garantía.
            </p>
            <a class="btn btn-lg btn-block btn-primary text-white" href=" {{route('contacto')}} ">Contáctanos</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href=" {{route('productos.index')}} ">Productos destacados</a>
        </div>
    </div>
</div>
@endsection