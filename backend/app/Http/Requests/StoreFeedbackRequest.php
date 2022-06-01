<?php

namespace App\Http\Requests;

class StoreFeedbackRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'comment' => ['required', 'string', 'max:2000'],
            'rating' => ['required', 'numeric', 'min:1', 'max:5'],
        ];
    }
}
