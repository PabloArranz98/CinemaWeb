<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->user_id == auth()->user()->id){
        return true;
    }else{
        return false;
    }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $pelicula = $this->route()->parameter('pelicula');

      $rules = [
          'titulo' => 'required|unique:peliculas',
          'AñoDeEstreno'=>'required',
          'director'=>'required',
          'reparto'=>'required',
          'sinopsis'=>'required',
          'genero_id'=>'required',
          'file'=>'image'

      ];
 
     if ($pelicula) {
         # code...
         $rules['titulo'] = 'required|unique:peliculas,titulo,' . $pelicula->id;
     }

      return $rules;
    }

  
}
