<?php


//sta se ovo desava
namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShowthStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],

            //podaci o avatarima
            
            'avatar_ids' => ['required', 'array'],

            'avatar_ids.*' => ['required', 'integer',
                   Rule::exists('avatars', 'id')],
        ];
    }
}
