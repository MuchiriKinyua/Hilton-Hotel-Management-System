<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="stations-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Manager Id</th>
                <th>Location</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stations as $station)
                <tr>
                    <td>{{ $station->full_name }}</td>
                    <td>{{ $station->manager_id }}</td>
                    <td>{{ $station->location }}</td>
                    <td>{{ $station->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['stations.destroy', $station->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('stations.show', [$station->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('stations.edit', [$station->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $stations])
        </div>
    </div>
</div>
