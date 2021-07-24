@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{--se tiene que colocar un enctype porque vamos a colocar una imagen--}}
<form action="{{route('actualizar.producto',$producto->id)}}" method="POST" >
  @method('put')
  @csrf

  <div class="form-group">
    <label for="">Codigo:</label>
    <input type="text" class="form-control" name="codigo" value="{{$producto->codigo}}">
  </div>

  <div class="form-group">
    <label for="">Nombre del producto:</label>
    <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}" >
  </div>


  <div class="form-group">
    <label for="">Descripcion:</label>
   <textarea class="form-control"rows="3" name="descripcion" >{{$producto->descripcion}}
   </textarea>
  </div>

  <div class="form-group">
    <label for="">stock</label>
    <input type="number" class="form-control" name="stock" value="{{$producto->stock}}">
  </div>

   <div class="form-group">
    <label for="">Medida:</label>
    <input type="text" class="form-control" name="medida" value="{{$producto->medida}}">
  </div>


  <button class="btn btn-primary" type="submit">Actualizar</button>
  <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
</form>
</div>
</div>
</div>
@endsection
