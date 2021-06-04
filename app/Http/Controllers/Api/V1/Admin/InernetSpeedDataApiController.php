<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInernetSpeedDataRequest;
use App\Http\Resources\Admin\InernetSpeedDataResource;
use App\Models\InernetSpeedData;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InernetSpeedDataApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inernet_speed_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InernetSpeedDataResource(InernetSpeedData::with(['user'])->get());
    }

    public function store(StoreInernetSpeedDataRequest $request)
    {
        $inernetSpeedData = InernetSpeedData::create($request->all());

        return (new InernetSpeedDataResource($inernetSpeedData))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(InernetSpeedData $inernetSpeedData)
    {
        abort_if(Gate::denies('inernet_speed_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InernetSpeedDataResource($inernetSpeedData->load(['user']));
    }
}
