<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="loggeds-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Ip Address</th>
                <th>Device Info</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($loggeds as $logged)
                <tr>
                    <td>{{ $logged->user_id }}</td>
                    <td>{{ $logged->login_time }}</td>
                    <td>{{ $logged->logout_time }}</td>
                    <td>{{ $logged->ip_address }}</td>
                    <td>{{ $logged->device_info }}</td>
                    <td>{{ $logged->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['loggeds.destroy', $logged->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('loggeds.show', [$logged->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('loggeds.edit', [$logged->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $loggeds])
        </div>
    </div>
</div>
