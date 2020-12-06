<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCreateCategory extends FormRequest
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
            'title'=> 'required|unique:categories',
            'show' =>  'max:1|min:0|integer|required',
        ];
    }

    public function messages()
{
    return [
        'title.required' => 'Это поле обязательно для заполнения',
        'title.unique' => 'Такая категория уже существует',
        'show.required' => 'Это поле обязательно для заполнения',
        'show.min' => 'Неверное значение',
        'show.max' => 'Неверное значение',
        'show.integer' => 'Неверное значение',


    ];
}

   public function defaultNull($parentId) {
        $id = (int)  $parentId;

       return !$id ? null : $id;
   }
}