<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date|after_or_equal:today',
            'location' => 'nullable|string|max:255',
            'trainer_id' => 'required|exists:trainers,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];


        return $rules;
    }

    public function messages()
    {
        return [
            'event_date.after_or_equal' => 'The event date must be today or in the future.',
            'image.max' => 'The image must not be larger than 2MB.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes()
    {
        return [
            'trainer_id' => 'trainer',
        ];
    }
}
