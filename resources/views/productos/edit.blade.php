@extends('layout.main')

@section('contenido')
<div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon card-header-primary">
                      <div class="card-icon">
                        <i class="material-icons">list</i>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3>Modificando producto</h3>
                      @if(session()->has('sin_modificaciones'))
                          <div class="alert alert-warning">
                            {{session('sin_modificaciones')}}
                          </div>
                      @endif

                      @if(session()->has('exito'))
                          <div class="alert alert-success">
                             {{session('exito')}}
                          </div>
                      @endif
                      <form action="{{route('productos.update',$producto->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                          <div class="for-row">
                              <div class="form-group">
                                  <label for="nombre">Nombre:</label>
                                  <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control">
                              </div>
                          </div>

                          <div class="for-row">
                              <div class="form-group">
                                  <label for="descripcion">Descripción:</label>
                                  <input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control">
                              </div>
                          </div>
                          
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="categoria">Categoría</label>
                                  <select class="form-control" name="categoria" >
                                      @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}" @if($categoria->id==$producto->categoria_id) selected @endif>
                                          {{$categoria->nombre}}
                                        </option>
                                      @endforeach
                                  </select>
                                </div>
                              
                              <div class="form-group col-md-4">
                                  <label for="precio">Precio:</label>
                                  <input class="form-control" type="text" name="precio" value="{{$producto->precio}}">
                              </div>
                  
                              <div class="form-group col-md-2">
                                  <label for="precio">Stock:</label>
                                  <input class="form-control" type="number" name="stock" value="{{$producto->stock}}" placeholder="stock">
                              </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Guardar modificaciones</button>

                      </form>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
              <div class="card">
                    <div class="card-header card-header-icon card-header-primary">
                      <div class="card-icon">
                        <i class="material-icons">list</i>
                      </div>
                    </div>
                    <div class="card-body">
                    Tiendas donde se oferta el producto

                    <form action="{{route('guardar_distribuidores',$producto->id)}}" method="post">
                    @csrf
                      <div class="form-group">
                        @foreach($tiendas as $tienda)
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" 
                            name="tiendas[]" 
                            id="tiendas" 
                            value="{{$tienda->id}}" 
                            class="form-check-input"
                            @if($producto->tiendas->contains('id',$tienda->id)) checked @endif>
                            {{$tienda->nombre}}
                            <span class="form-check-sign">
                            <span class="check"></span>
                            </span>
                          </label>
                        </div>


                        @endforeach
                      </div>
                      <input class="btn btn-success btn-block" type="submit" value="Guardar tiendas">
                    </form>
                    </div>
              </div>
              </div>
            </div>

@endsection