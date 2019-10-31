<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
