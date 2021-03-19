<table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Categoría</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($productos as $producto)
                                    <tr>
                                        <td>{{$producto->nombre}}</td>
                                        <td>{{$producto->descripcion}}</td>
                                        <td>$ {{$producto->precio}}</td>
                                        <td>{{$producto->stock}}</td>
                                        <td><a href="{{route('categorias.show',$producto->categoria->id)}}">{{$producto->categoria->nombre}}</a></td>
                                        <td>
                                           <a href="{{route('productos.edit',$producto->id)}}"><img src="{{asset('assets/img/lapiz.png')}}" alt="Editar" title="Editar"></a>
                                           <a href="{{route('productos.show',$producto->id)}}"><img src="{{asset('assets/img/visibilidad.png')}}" alt="Detalles" title="Detalles"></a>
                                           <form action="{{route('productos.destroy',$producto->id)}}" id="eliminar{{$producto->id}}" method="POST">
                                           @method('DELETE')
                                           @csrf
                                              <a href="javascript:{}" onclick="document.getElementById('eliminar{{$producto->id}}').submit();"><img src="{{asset('assets/img/borrar.png')}}" alt="Eliminar" title="Eliminar"></a>
                                           </form>
                                           
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">
                                            No se encuentran productos
                                        </td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>