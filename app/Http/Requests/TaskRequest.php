<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
        if($this->method()==='PATCH')
        {
            $title = ['required',Rule::unique('tasks')->ignore($this->id)];
        }else{
            $title = 'required|unique:tasks,title';
        }
        return [
            'title'=> $title,
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'فیلد عنوان را وارد کنید',
            'title.unique'=>'این مقدار از قبل وجود دارد!',
        ];

    }
}
