<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="housekeepings-table">
            <thead>
            <tr>
                <th>Room Id</th>
                <th>Status</th>
                <th>Assigned Staff Id</th>
                <th>Cleaning Date</th>
                <th>Completion Time</th>
                <th>Supplies Used</th>
                <th>Inspection Status</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($housekeepings as $housekeeping)
                <tr>
                    <td>{{ $housekeeping->room_id }}</td>
                    <td>{{ $housekeeping->status }}</td>
                    <td>{{ $housekeeping->assigned_staff_id }}</td>
                    <td>{{ $housekeeping->cleaning_date }}</td>
                    <td>{{ $housekeeping->completion_time }}</td>
                    <td>{{ $housekeeping->supplies_used }}</td>
                    <td>{{ $housekeeping->inspection_status }}</td>
                    <td>{{ $housekeeping->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['housekeepings.destroy', $housekeeping->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('housekeepings.show', [$housekeeping->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('housekeepings.edit', [$housekeeping->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $housekeepings])
        </div>
    </div>
</div>
