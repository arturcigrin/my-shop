<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ValidateUpdateCategory extends FormRequest
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
    public function rules(Request $request)
    {
       
       $idCategories =$this->getIdCategories($request->requestUri);
      $category =   Category::find($idCategories);
   
   if($category->title === $request->title) {
          return [
            'title'=> 'required',
            'show' =>  'max:1|min:0|integer|required'
        ];
   }

        
          return [
            'title'=> ['required', 'unique:categories'],
            'show' =>  'max:1|min:0|integer|required'
        ];
    }

        public function messages()
{
    return [
        'title.required' => 'Это поле обязательно для заполнения',
        'title.unique' => 'Такая категория существует',
        'show.required' => 'Это поле обязательно для заполнения',
        'show.min' => 'Неверное значение',
        'show.max' => 'Неверное значение',
        'show.integer' => 'Неверное значение',
    ];
}

public function getIdCategories($uri) {
     $listUri = explode('/',$uri);
    return array_pop($listUri);
}
}