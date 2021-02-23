@extends('layout')

@section('title','Perfil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @auth
                <h1 class="display-5 text-primary">PERFIL</h1>
                <hr>
                <div class="float-right">
                    <button class="btn btn-info text-white">Editar perfil</button>
                </div>
                <br>
                {{auth()->user()->name}} - {{auth()->user()->roles->pluck('display_name')->implode('')}}
                <br>
                {{auth()->user()->email}}
            @endauth
        </div>
    </div>
</div>








@endsection