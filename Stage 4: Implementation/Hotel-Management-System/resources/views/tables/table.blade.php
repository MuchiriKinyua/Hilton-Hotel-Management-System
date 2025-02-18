<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tables-table">
            <thead>
            <tr>
                <th>Table Number</th>
                <th>Capacity</th>
                <th>Status</th>
                <th>Location</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tables as $table)
                <tr>
                    <td>{{ $table->table_number }}</td>
                    <td>{{ $table->capacity }}</td>
                    <td>{{ $table->status }}</td>
                    <td>{{ $table->location }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tables.destroy', $table->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tables.show', [$table->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tables.edit', [$table->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $tables])
        </div>
    </div>
</div>
