<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Student_Create_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          
                'nis'=>'unique:students|max:8|required',
                'name'=>'max:20|required',
                'gender'=>'required',
                'class_id'=>'required'
        ];
    }

        public function attributes(): array
        {
            return [
                'class_id' => 'class',
            ];
        }
    
        public function messages(): array
        {
            return [
                'name.required' => 'Nama wajib diisi',
                'gender.required'=> 'Gender wajib diisi',
                'nis.required' => 'Nis wajib diisi',
                'class_id'=> 'Class wajib diisi',
                'nis.max'=>'Nis maksimal :max karakter',
                'name.max'=> 'Nama maksimal :max karakter'
            ];
        }
}
