@extends('layout.main')

@section('contenido')

<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-primary">
                      <div class="card-icon">
                        <i class="material-icons">room_service</i>
                      </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Productos que pertenecen a {{$categoria->nombre}}</h4>
                        @if(session()->has('exito_eliminando'))
                            <div class="alert alert-success">
                               {{session('exito_eliminando')}}
                            </div>
                        @endif
                        <nav>
                            @include('productos.tabla',['productos'=>$productos])
                        </nav> 

                    </div>
                </div>
            </div>
          </div>

@endsection