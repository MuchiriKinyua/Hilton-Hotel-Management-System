<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="rooms-table">
            <thead>
            <tr>
                <th>Room Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Wifi</th>
                <th>Room Type</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->room_title }}</td>
                    <td>{{ $room->image }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->amount }}</td>
                    <td>{{ $room->wifi }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['rooms.destroy', $room->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('rooms.show', [$room->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('rooms.edit', [$room->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $rooms])
        </div>
    </div>
</div>
