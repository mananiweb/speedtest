@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.inernetSpeedData.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.inernet-speed-datas.update", [$inernetSpeedData->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="user_id">{{ trans('cruds.inernetSpeedData.fields.user') }}</label>
                            <select class="form-control select2" name="user_id" id="user_id">
                                @foreach($users as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $inernetSpeedData->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.user_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ip">{{ trans('cruds.inernetSpeedData.fields.ip') }}</label>
                            <input class="form-control" type="text" name="ip" id="ip" value="{{ old('ip', $inernetSpeedData->ip) }}">
                            @if($errors->has('ip'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ip') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.ip_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="dl">{{ trans('cruds.inernetSpeedData.fields.dl') }}</label>
                            <input class="form-control" type="text" name="dl" id="dl" value="{{ old('dl', $inernetSpeedData->dl) }}">
                            @if($errors->has('dl'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('dl') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.dl_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="upload">{{ trans('cruds.inernetSpeedData.fields.upload') }}</label>
                            <input class="form-control" type="text" name="upload" id="upload" value="{{ old('upload', $inernetSpeedData->upload) }}">
                            @if($errors->has('upload'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('upload') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.upload_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ping">{{ trans('cruds.inernetSpeedData.fields.ping') }}</label>
                            <input class="form-control" type="text" name="ping" id="ping" value="{{ old('ping', $inernetSpeedData->ping) }}">
                            @if($errors->has('ping'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ping') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.ping_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="jitter">{{ trans('cruds.inernetSpeedData.fields.jitter') }}</label>
                            <input class="form-control" type="text" name="jitter" id="jitter" value="{{ old('jitter', $inernetSpeedData->jitter) }}">
                            @if($errors->has('jitter'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jitter') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.jitter_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ispinfo">{{ trans('cruds.inernetSpeedData.fields.ispinfo') }}</label>
                            <input class="form-control" type="text" name="ispinfo" id="ispinfo" value="{{ old('ispinfo', $inernetSpeedData->ispinfo) }}">
                            @if($errors->has('ispinfo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ispinfo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.ispinfo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ua">{{ trans('cruds.inernetSpeedData.fields.ua') }}</label>
                            <input class="form-control" type="text" name="ua" id="ua" value="{{ old('ua', $inernetSpeedData->ua) }}">
                            @if($errors->has('ua'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ua') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.ua_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="lang">{{ trans('cruds.inernetSpeedData.fields.lang') }}</label>
                            <input class="form-control" type="text" name="lang" id="lang" value="{{ old('lang', $inernetSpeedData->lang) }}">
                            @if($errors->has('lang'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lang') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.inernetSpeedData.fields.lang_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection