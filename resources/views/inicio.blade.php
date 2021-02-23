@extends('layout')

@section('title','Inicio')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="\img\banda1.png" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="\img\banda2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="\img\banda3.jpg" alt="Third slide">
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>


<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5">Categorias</h1>
            </div>
            <div class="col-lg-4 col-md-4 box box-small">
                <a class="box-link" href="#">
                    <img class="box-img" src="\img\altavoces.jpg" alt="cat-interfaz">
                </a>
                <div class="box-title">
                    <h3 class="text-white"><b>Altavoces</b></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 box box-small">
                <a class="box-link" href="#">
                    <img class="box-img" src="\img\microfonos.jpg" alt="cat-interfaz">
                </a>
                <div class="box-title">
                    <h3 class="text-white"><b>Microfonos</b></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 box box-small">
                <a class="box-link" href="#">
                    <img class="box-img" src="\img\guitarras.jpg" alt="cat-interfaz">
                </a>
                <div class="box-title">
                    <h3 class="text-white"><b>Guitarras</b></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 box box-small">
                <a class="box-link" href="#">
                    <img class="box-img" src="\img\pedales.jpg" alt="cat-interfaz">
                </a>
                <div class="box-title">
                    <h3 class="text-white"><b>Pedales</b></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 box box-small">
                <a class="box-link" href="#">
                    <img class="box-img" src="\img\interfaz.jpg" alt="cat-interfaz">
                </a>
                <div class="box-title">
                    <h3 class="text-white"><b>Interfaces</b></h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 box box-small">
                <a class="box-link" href="#">
                    <img class="box-img" src="\img\baterias-e.jpg" alt="cat-interfaz">
                </a>
                <div class="box-title">
                    <h3 class="text-white"><b>Baterias electrónicas</b></h3>
                </div>
            </div>

        </div>
</div>
    
@endsection