@extends('layout')

@section('title','Servicios')

@section('content')
<div class="container">
    <h1 class="display-5 text-primary">Servicios</h1>

    <div class="row">
        <div class="col-lg-6 col-md-6 box box-small shadow-sm">
            <a class="box-link" href="#">
                <img class="box-img" src="\img\luther.jpg" alt="cat-interfaz">
            </a>
            <div class="box-title">
                <h3 class="text-white"><b>Lutheria</b></h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 box box-small shadow-sm">
            <a class="box-link" href="#">
                <img class="box-img" src="\img\cursos.png" alt="cat-interfaz">
            </a>
            <div class="box-title">
                <h3 class="text-white"><b>Cursos</b></h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 box box-small shadow-sm">
            <a class="box-link" href="#">
                <img class="box-img" src="\img\servicio-t.png" alt="cat-interfaz">
            </a>
            <div class="box-title">
                <h3 class="text-white"><b>Servicio técnico</b></h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 box box-small shadow-sm">
            <a class="box-link" href="#">
                <img class="box-img" src="\img\equipos.png" alt="cat-interfaz">
            </a>
            <div class="box-title">
                <h3 class="text-white"><b>Alquiler de equipos de sonido</b></h3>
            </div>
        </div>
        
    </div>
</div>
@endsection