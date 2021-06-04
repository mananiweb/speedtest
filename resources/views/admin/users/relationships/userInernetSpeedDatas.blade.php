@can('inernet_speed_data_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.inernet-speed-datas.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.inernetSpeedData.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.inernetSpeedData.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-userInernetSpeedDatas">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.dl') }}
                        </th>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.upload') }}
                        </th>
                        <th>
                            {{ trans('cruds.inernetSpeedData.fields.created_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inernetSpeedDatas as $key => $inernetSpeedData)
                        <tr data-entry-id="{{ $inernetSpeedData->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $inernetSpeedData->id ?? '' }}
                            </td>
                            <td>
                                {{ $inernetSpeedData->user->email ?? '' }}
                            </td>
                            <td>
                                {{ $inernetSpeedData->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $inernetSpeedData->ip ?? '' }}
                            </td>
                            <td>
                                {{ $inernetSpeedData->dl ?? '' }}
                            </td>
                            <td>
                                {{ $inernetSpeedData->upload ?? '' }}
                            </td>
                            <td>
                                {{ $inernetSpeedData->created_at ?? '' }}
                            </td>
                            <td>
                                @can('inernet_speed_data_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.inernet-speed-datas.show', $inernetSpeedData->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-userInernetSpeedDatas:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection