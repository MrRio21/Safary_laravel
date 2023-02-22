<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Providers\RouteServiceProvider;
use App\Models\hotelOwner;

use Illuminate\Support\Facades\Validator;



class StoreHotelOwnerRequest extends FormRequest
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
        
           'commercial_reg_No' => 'required',
        ];
    }


 

    public function messages(): array
{
    return [
        'commercial_reg_No.required' => 'A commercial_reg_No is required',
       
    ];
}
}
