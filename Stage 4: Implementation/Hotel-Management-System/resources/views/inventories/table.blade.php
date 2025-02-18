<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="inventories-table">
            <thead>
            <tr>
                <th>Item Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->item_name }}</td>
                    <td>{{ $inventory->category }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['inventories.destroy', $inventory->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('inventories.show', [$inventory->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('inventories.edit', [$inventory->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $inventories])
        </div>
    </div>
</div>
