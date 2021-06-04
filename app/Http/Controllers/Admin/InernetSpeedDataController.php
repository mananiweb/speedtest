<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInernetSpeedDataRequest;
use App\Models\InernetSpeedData;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InernetSpeedDataController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inernet_speed_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inernetSpeedDatas = InernetSpeedData::with(['user'])->get();

        $users = User::get();

        return view('admin.inernetSpeedDatas.index', compact('inernetSpeedDatas', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('inernet_speed_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('email', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.inernetSpeedDatas.create', compact('users'));
    }

    public function store(StoreInernetSpeedDataRequest $request)
    {
        $inernetSpeedData = InernetSpeedData::create($request->all());

        return redirect()->route('admin.inernet-speed-datas.index');
    }

    public function show(InernetSpeedData $inernetSpeedData)
    {
        abort_if(Gate::denies('inernet_speed_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inernetSpeedData->load('user');

        return view('admin.inernetSpeedDatas.show', compact('inernetSpeedData'));
    }
}
