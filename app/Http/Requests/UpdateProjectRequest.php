<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
{
    protected $errorBag = 'update';
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
                Rule::unique('projects','name')->ignore($this->route('id'))->where(function($query){
                    return $query->where('user_id', $this->user()->id);
                })
            ],
            'thumbnail'=>'image|max:2048'

        ];
    }
}
