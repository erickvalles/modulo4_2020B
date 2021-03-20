<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CiudadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
    
        return [
            'clave_ciudad' => $this->id,
            'nombre_ciudad' => $this->nombre,
        ];
    }
}
