<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [

            'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|numeric',
            'phone' => 'required|validate_phone'

        ];
    }

    /**
     * register save user data to database.
     * @param $user
     */
    public function register($user)
    {
        $validated = $this->validated();
        $checkIfAlreadyExist = $user->where('email', $validated['email'])->first();
        if ($checkIfAlreadyExist == null) {
            $data = $user->create($validated);
            return true;
        }
        $user->where('id', $checkIfAlreadyExist['id'])->update($validated);
        return true;

    }

    public function messages()
    {
        return [
            'first_name.regex' => 'First Name Should contain letters only',
            'last_name.regex'  =>  'Last Name Should contain letters only',
        ];
    }
}
