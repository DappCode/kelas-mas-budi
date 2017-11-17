<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        switch( $this->method() ) {
            case "POST":
                return [
                    'nama' => 'required',
                    'address' => 'required',
                    'age' => 'required|numeric', // --> harus Numberic
                    'email' => 'required|email|unique:students'  // --> Harus unique
                ];       
                break;
                
            case "PUT":
                return [
                    'nama' => 'required',
                    'address' => 'required',
                    'age' => 'required|numeric', // --> harus Numberic
                    'email' => 'required|email'  // --> Harus unique
                ];      
                break;
            
        }

    }

    public function messages()
    {
        return [
            'nama.required' => 'Isi Nama Dulu CahKupluk!!',
            'address.required' => 'Isi alamat Dulu CahKupluk!!',
            'age.required' => 'Isi umur Dulu CahKupluk!!',
            'email.required' => 'Isi Email Dulu CahKupluk!!'
        ];
    }
}
