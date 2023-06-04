<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == "PUT") {
            return [
                'author' => ['required', 'string', 'max:80'],
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
                'genres' => ['required', 'array', 'min:1'],
                'released_at' => ['required', 'string'],
                'pages' => ['required', 'integer'],
                'coverImg' => ['required', 'string']
            ];
        } else {
            return [
                'author' => ['sometimes', 'required', 'string', 'max:80'],
                'title' => ['sometimes', 'required', 'string', 'max:255'],
                'description' => ['sometimes', 'required', 'string'],
                'genres' => ['sometimes', 'required', 'array', 'min:1'],
                'released_at' => ['sometimes', 'required', 'string'],
                'pages' => ['sometimes', 'required', 'integer'],
                'coverImg' => ['sometimes', 'required', 'string']
            ];
        }
    }
}
