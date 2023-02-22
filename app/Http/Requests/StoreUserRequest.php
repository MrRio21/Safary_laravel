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
    public function rules(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['required','mimes:jpeg,png,jpg,gif'],
            // 'email' => 'email:rfc,dns'   for paypal
            'gender'  => [new Enum(ServerStatus::class)],
        ]);

    }


 

    public function messages(): array
{
    return [
        'name.required' => 'A name is required',
        'email.required' => 'A email is required',
        'gender.required' => 'A gender is required',
    

    ];
}
}
