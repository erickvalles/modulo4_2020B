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
                        <h4 class="card-title">Listado de categorías</h4>
                        @if(session()->has('exito_eliminando'))
                            <div class="alert alert-success">
                               {{session('exito_eliminando')}}
                            </div>
                        @endif
                        <nav>
                        <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categorias as $categoria)
                                    <tr>
                                        <td>{{$categoria->nombre}}</td>
                                        <td>
                                           <a href="{{route('categorias.edit',$categoria->id)}}"><img src="{{asset('assets/img/lapiz.png')}}" alt="Editar" title="Editar"></a>
                                           <a href="{{route('categorias.show',$categoria->id)}}"><img src="{{asset('assets/img/visibilidad.png')}}" alt="Detalles" title="Detalles"></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2">
                                            No se encuentran categorías
                                        </td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </nav> 

                    </div>
                </div>
            </div>
          </div>

@endsection