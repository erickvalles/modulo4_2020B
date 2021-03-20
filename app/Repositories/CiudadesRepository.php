<?php
namespace App\Repositories;

use App\Http\Resources\CiudadCollection;
use App\Http\Resources\CiudadResource;
use App\Models\Ciudad;

class CiudadesRepository{

    public function todasCiudades(){
        return Ciudad::all();
    }

    public function todasCiudadesApi(){
        return new CiudadCollection(Ciudad::all());
    }

    public function buscarCiudad($id){
        return new CiudadResource(Ciudad::find($id));
    }


}