<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateProjectRequest extends FormRequest
{
    protected $errorBag='create';
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
            'project'=>[
                'required',
                Rule::unique('projects','name')->where(function($query){
                return $query->where('user_id',request()->user()->id);
                })
],
            'thumbnail'=>'image',
        ];
    }
}
