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
                   <label>Tipos de usuario <br>
                          1-Jefe<br>
                          2-Administrador <br>
                          3-Usuario  <br>
                   </label>
                
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
            
                              <th >id</th>
                              <th >nombre</th>
                              <th >correo</th>
                              <th>Tipo de usuario</th>
                              <th>Asignar rol</th>
                            </tr>
                          </thead>
                         
                         <tbody>
                              @foreach($usuario as $User)
                             <tr class="thead-light">
                                 
                                <td>
                                    {{$User->id}}
                                </td>

                                 <td>
                                    {{$User->name}}
                                </td>

                                 <td>
                                    {{$User->email}}
                                </td>

                                 <td>
                                    {{$User->tipo}}
                                </td>

                                <td>

                                    <form action="{{route('AsigRol',$User->id)}}" method="POST" >
                                         @method('put')
                                        @csrf   
                               <select name="rol" id="rol" onchange="if(confirm('Seguro que deseas asignar ese rol?')){this.form.submit()}else{return}">
                                            <option selected hidden>Seleccionar</option>
                                            <option value="1" >Jefe</option>
                                            <option value="2">Administrador</option>
                                            <option value="3">Usuario</option>
                                        </select> 
                                    

                                    </form>
                           
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
