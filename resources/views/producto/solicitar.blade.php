@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{--se tiene que colocar un enctype porque vamos a colocar una imagen--}}
<form action="{{route('almacenar.producto')}}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
    <label for="" >Lugar:</label>
    <input type="text" class="form-control" name="codigo" value="TUXTLA GUTIERREZ, CHIAPAS">
  </div>

  <div>
    <label>Fecha:</label>
     <p><input type="date" name="fechaesperada"></p>
  </div>

<div class="dropdown">
  <select class="form-control">
    <option value="UNIDAD DE INFORMATICA Y DESARROLLO DIGITAL">UNIDAD DE INFORMATICA Y DESARROLLO DIGITAL</option>
    <option value="AREA DE RECURSOS HUMANOS">AREA DE RECURSOS HUMANOS</option>
</select>
</div>

  <div class="form-group">
    <label for="">Nombre del producto:</label>
    <input type="text" class="form-control" name="nombre">
  </div>


  <div class="form-group">
    <label for="">Observaciones:</label>
   <textarea class="form-control"rows="3" name="descripcion"></textarea>
  </div>
  


  <button class="btn btn-primary" type="submit">Generar Solicitud</button>
  <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
</form>
</div>
</div>
</div>
@endsection
