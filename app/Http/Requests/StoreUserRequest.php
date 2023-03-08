<?php

namespace App\Http\Requests;
use App\Enums\ServerStatus;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class StoreUserRequest extends FormRequest
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
        // dd($data);
        return  [
            'name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'image' => 'mimes:jpeg,png,jpg,gif',
            'gender'  => "required",
        ];

    }




//     public function messages(): array
// {
//     return [
//         'name.required' => ' name is required',
//         'email.required' => ' email is required',
//         'gender.required' => ' gender is required',


//     ];
// }
}
