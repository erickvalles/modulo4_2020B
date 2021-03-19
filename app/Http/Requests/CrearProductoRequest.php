<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:3',
            'descripcion'=>'required|min:20',
            'precio'=>'required|numeric',
            'stock'=>'required|numeric',
            'categoria_id'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'El campo nombre es requerido',
            'descripcion.required'=>'El campo descripcion es obligatorio',
            'precio.required'=>'El campo precio es obligatorio',
            'stock.required'=>'Debes especificar el stock',
            'categoria_id.required'=>'Debes seleccionar una categoría'
        ];
    }
}
