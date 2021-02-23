@extends('layout')

@section('content') 
<div class="container">
    <div class="row bg-white p-5 shadow rounded">
        <div class="col-12">
            <form method="POST" action=" {{route('files.store')}} " enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" accept="image/*">
                <input type="hidden" name="id" value=" {{$producto->id}} ">
                <button type="submit" class="btn btn-outline-success float-right">Subir imagen</button>
            </form>
        </div>
    </div>
</div>

@endsection