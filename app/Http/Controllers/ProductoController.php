<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearProductoRequest;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Tienda;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with('categoria')->get();

        //dd($productos);
        
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all('id','nombre');
        
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearProductoRequest $request)
    {
        Producto::create($request->only(
            ['nombre',
            'descipcion',
            'precio',
            'categoria_id',
            'stock'])
        );
        

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return $producto->tiendas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all('id','nombre');
        $tiendas = Tienda::all();
        return view('productos.edit', compact('categorias','producto','tiendas'));
    }

    public function storeDistribuidores(Request $request,Producto $producto){
        $producto->tiendas()->sync($request->tiendas);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->fill($request->only(['nombre',
        'descipcion',
        'precio',
        'categoria_id',
        'stock']));
        
        if($producto->isClean()){
            return redirect()->back()->with("sin_modificaciones","Debes cambiar al menos un valor");
        }

        $producto->save();

        return redirect()->back()->with("exito","Se ha modificado exitosamente el producto");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->back()->with("exito_eliminando","Se eliminó con éxito el producto ".$producto->nombre);
    }
}
