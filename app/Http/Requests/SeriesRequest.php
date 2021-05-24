<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesRequest extends FormRequest
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

        $series = $this->route()->parameter('series');

        $rules = [
         'titulo' => 'required|unique:series',
          'AñoDeEmision'=>'required',
          'AñoDeFinalizacíon'=>'required',
          'temporadas'=>'required',
          'director'=>'required',
          'reparto'=>'required',
          'sinopsis'=>'required',
          'genero_id'=>'required',
          'file' =>'image'
          

        ];

        if ($series) {
            # code...
            $rules['titulo'] = 'required|unique:series,titulo,' . $series->id;

        
    }

    return $rules;
}

}
