<?php

namespace App\Http\Requests;

use App\Models\InernetSpeedData;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInernetSpeedDataRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inernet_speed_data_edit');
    }

    public function rules()
    {
        return [
            'ip' => [
                'string',
                'nullable',
            ],
            'dl' => [
                'string',
                'nullable',
            ],
            'upload' => [
                'string',
                'nullable',
            ],
            'ping' => [
                'string',
                'nullable',
            ],
            'jitter' => [
                'string',
                'nullable',
            ],
            'ispinfo' => [
                'string',
                'nullable',
            ],
            'ua' => [
                'string',
                'nullable',
            ],
            'lang' => [
                'string',
                'nullable',
            ],
        ];
    }
}
