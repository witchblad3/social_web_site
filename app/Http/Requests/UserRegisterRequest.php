<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'login' => ['required'],
            'email' => ['unique:users', 'required'],
            'password' => ['min:6', 'required'],
            'password_confirm' => ['required']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        // todo: сделать как-нибудь чтобы еще проверялось совпадение паролей
        return [
            'first_name.required' => 'Не указано имя.',
            'last_name.required' => 'Не указана фамилия.',
            'login.required' => 'Не указан логин.',
            'email.required' => 'Не указана почта.',
            'email.unique' => 'Пользователь с такой почтой уже зарегистрирован.',
            'password.required' => 'Не указан пароль.',
            'password.min' => 'Пароль должен содержать 6 и более символов.',
            'password_confirm.required' => 'Нужно повторить пароль.',
        ];
    }
}
