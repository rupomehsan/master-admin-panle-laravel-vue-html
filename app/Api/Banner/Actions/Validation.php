<?php

namespace App\Api\Banner\Actions;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

if (!function_exists('validateError')) {
    function validateError($data, $override = false)
    {
        $errors = [];
        $errorPayload = !$override ? $data->getMessages() : $data;
        foreach ($errorPayload as $key => $value) {
            $errors[$key] = $value[0];
        }
        return response(['status' => 'validate_error', 'statusCode' => 422, 'data' => $errors], 422);
    }
}

class Validation extends FormRequest
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
        return [
            'title' => 'required',
            'image' => 'sometimes',
            'details' => 'sometimes|required',
            'status' => 'sometimes|' . Rule::in('active','inactive'),
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(validateError($validator->errors()));
        if ($this->wantsJson() || $this->ajax()) {
            throw new HttpResponseException(validateError($validator->errors()));
        }
        parent::failedValidation($validator);
    }
}
