@extends('layout.main')

@section('contenido')
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-primary">
                      <div class="card-icon">
                        <i class="material-icons">list</i>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3>Guardar un nuevo producto</h3>
                      @if($errors->any)
                         @foreach($errors->all() as $error)
                         <div class="alert alert-danger">
                            {{$error}}
                         </div>

                         @endforeach

                      @endif

                      <form action="{{route('productos.store')}}" method="POST">
                            @csrf
                          <div class="for-row">
                              <div class="form-group">
                                  <label for="nombre">Nombre:</label>
                                  <input type="text" name="nombre" class="form-control">
                              </div>
                          </div>

                          <div class="for-row">
                              <div class="form-group">
                                  <label for="descripcion">Descripción:</label>
                                  <input type="text" name="descripcion" class="form-control">
                              </div>
                          </div>
                          
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="categoria">Categoría</label>
                                  <select class="form-control" name="categoria_id" >
                                      @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              
                              <div class="form-group col-md-4">
                                  <label for="precio">Precio:</label>
                                  <input class="form-control" type="text" name="precio" value="10">
                              </div>
                  
                              <div class="form-group col-md-2">
                                  <label for="precio">Stock:</label>
                                  <input class="form-control" type="number" name="stock" placeholder="stock">
                              </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Guardar</button>

                      </form>
                  </div>
                </div>
              </div>
            </div>

@endsection