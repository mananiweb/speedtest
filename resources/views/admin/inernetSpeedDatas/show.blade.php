@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.inernetSpeedData.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inernet-speed-datas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.id') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.user') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->user->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.ip') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.dl') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->dl }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.upload') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->upload }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.ping') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->ping }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.jitter') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->jitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.ispinfo') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->ispinfo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.ua') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->ua }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.lang') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->lang }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.updated_at') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->updated_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.deleted_at') }}
                        </th>
                        <td>
                            {{ $inernetSpeedData->deleted_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inernet-speed-datas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection