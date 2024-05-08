<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function rules()
    {
        return [
            "name"                    => 'required|min:5|max:50',
            "phone"                   => 'required',
            "message"                 => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'             => 'İsim Soyisim alanı zorunludur.',
            'name.min'                  => 'İsim Soyisim en az 3 karakterden oluşmalıdır.',
            'name.max'                  => 'İsim Soyisim en fazla 50 karakterden oluşmalıdır.',
    
            'phone.required'            => 'Telefon alanı zorunludur.',
            'message.required'          => 'Mesaj alanı zorunludur.',
        ];
    }

    protected function getRedirectUrl()
    {
        return parent::getRedirectUrl() .'#form';
    }
}
