<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="guests-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Id Proof</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($guests as $guest)
                <tr>
                    <td>{{ $guest->full_name }}</td>
                    <td>{{ $guest->email }}</td>
                    <td>{{ $guest->phone }}</td>
                    <td>{{ $guest->address }}</td>
                    <td>{{ $guest->id_proof }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['guests.destroy', $guest->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('guests.show', [$guest->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('guests.edit', [$guest->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $guests])
        </div>
    </div>
</div>
