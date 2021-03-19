<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id'
    ];

    /**
     * Relación de 1 a muchos (inversa)
     */
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    /**
     * Relación de muchos a muchos
     */
    public function tiendas(){
        return $this->belongsToMany(Tienda::class,'producto_has_tienda','producto_id','tienda_id');
    }

}
