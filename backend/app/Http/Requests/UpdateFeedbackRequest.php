<?php

namespace App\Http\Requests;

class UpdateFeedbackRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'comment' => ['string', 'max:2000'],
            'rating' => ['numeric', 'min:1', 'max:5'],
        ];
    }
}
