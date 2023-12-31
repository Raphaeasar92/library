<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'pages'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Coloque o título!',
            'pages.numeric'  => 'Coloque números para as páginas.',
        ];
    }
}