<?php

namespace App\Repositories;

use App\Http\Requests\CrearProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosRepository{

    public function todosProductos(){
        return Producto::all();
    }

    public function productosConCategorias(){
        return Producto::with('categoria')->get();
    }

    public function crearProducto(CrearProductoRequest $request){
        return Producto::create($request->only(
            ['nombre',
            'descripcion',
            'precio',
            'categoria_id',
            'stock'])
        );
    }

    public function actualizarProducto(Request $request, Producto $producto){
        $producto->fill($request->only(['nombre',
        'descipcion',
        'precio',
        'categoria_id',
        'stock']));
        
        if($producto->isClean()){
            return redirect()->back()->with("sin_modificaciones","Debes cambiar al menos un valor");
        }

        return $producto->save();      
        

    }


}