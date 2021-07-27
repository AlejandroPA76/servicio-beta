@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
        
                    <a class="btn btn-primary" href="{{route('inv')}}">Inventario</a>
            
                    <a class="btn btn-primary" href="{{route('int')}}">Integrantes</a>
                </div>

                <div class="card-body">
                   
                    @if(session('info'))
                   <div class="alert alert-success">
                        {{
                        session('info')
                        }}
                   </div>
                    @endif
                    <table class="table">
                          <thead class="thead-dark">
                            <tr>
            
                              <th >Codigo</th>
                              <th> Reponsable</th>
                              <th> Producto</th>
                              <th> Descripcion </th>
                              <th> Stock </th>
                              <th> Medida </th>
                            </tr>
                          </thead>
                         
                             <tbody>
                            @foreach($products as $producto)
                            <tr>

                                <td>
                                    {{$producto->codigo}}
                                </td>

                                  <td>
                                    {{$producto->responsable}}
                                  </td>

                                 <td>
                                    {{$producto->nombre}}
                                </td>
                                 <td>
                                    {{$producto->descripcion}}
                                </td>
                        
                                <td>
                                    {{$producto->stock}}
                                </td>
                                <td>
                                    {{$producto->medida}}
                                </td>
                                 
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
