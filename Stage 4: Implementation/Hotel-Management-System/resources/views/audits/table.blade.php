<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="audits-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Action</th>
                <th>Table Name</th>
                <th>Record Id</th>
                <th>Ip Address</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($audits as $audit)
                <tr>
                    <td>{{ $audit->user_id }}</td>
                    <td>{{ $audit->action }}</td>
                    <td>{{ $audit->table_name }}</td>
                    <td>{{ $audit->record_id }}</td>
                    <td>{{ $audit->ip_address }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['audits.destroy', $audit->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('audits.show', [$audit->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('audits.edit', [$audit->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $audits])
        </div>
    </div>
</div>
