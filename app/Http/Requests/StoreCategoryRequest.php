<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:255',
            'slug'=>'required|min:3|max:255',
            'status'=>'required',
            'order_by'=>'required|numeric',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Catagory is required',
        //'slug.required' => 'A message is required',
        'status.required' => 'Slect status field',
        'order_by.required' => 'Slect order_bys field',
    ];
}

}
