<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="maintenances-table">
            <thead>
            <tr>
                <th>Item</th>
                <th>Issue Description</th>
                <th>Reported By</th>
                <th>Assigned To</th>
                <th>Status</th>
                <th>Repair Cost</th>
                <th>Date Reported</th>
                <th>Completion Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($maintenances as $maintenance)
                <tr>
                    <td>{{ $maintenance->item }}</td>
                    <td>{{ $maintenance->issue_description }}</td>
                    <td>{{ $maintenance->reported_by }}</td>
                    <td>{{ $maintenance->assigned_to }}</td>
                    <td>{{ $maintenance->status }}</td>
                    <td>{{ $maintenance->repair_cost }}</td>
                    <td>{{ $maintenance->date_reported }}</td>
                    <td>{{ $maintenance->completion_date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['maintenances.destroy', $maintenance->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('maintenances.show', [$maintenance->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('maintenances.edit', [$maintenance->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $maintenances])
        </div>
    </div>
</div>
