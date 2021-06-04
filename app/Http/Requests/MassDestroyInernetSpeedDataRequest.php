<?php

namespace App\Http\Requests;

use App\Models\InernetSpeedData;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInernetSpeedDataRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('inernet_speed_data_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:inernet_speed_datas,id',
        ];
    }
}
