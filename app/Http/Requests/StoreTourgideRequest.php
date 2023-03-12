<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Providers\RouteServiceProvider;
use App\Models\tourgide;
use Illuminate\Support\Facades\Validator;
class StoreTourgideRequest extends FormRequest
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
 

    public function rules()
    {
        return [
            'price_per_day' =>'required',
            'syndicate_No' => 'required' ,
            // 'desc' => 'required' ,
      
        ];
    }


 

    public function messages(): array
{
    return [
        'price_per_day.required' => 'A price is required',
        'syndicate_No.required' => 'A syndicate_No is required',
        // 'desc.required' => 'A desc is required',
    ];
}
}
