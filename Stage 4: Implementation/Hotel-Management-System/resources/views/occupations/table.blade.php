<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="occupations-table">
            <thead>
            <tr>
                <th>Room Type</th>
                <th>Max Occupancy</th>
                <th>Price Per Night</th>
                <th>Extra Guest Charge</th>
                <th>Check In Time</th>
                <th>Check Out Time</th>
                <th>Allowed Smoking</th>
                <th>Pet Friendly</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($occupations as $occupation)
                <tr>
                    <td>{{ $occupation->room_type }}</td>
                    <td>{{ $occupation->max_occupancy }}</td>
                    <td>{{ $occupation->price_per_night }}</td>
                    <td>{{ $occupation->extra_guest_charge }}</td>
                    <td>{{ $occupation->check_in_time }}</td>
                    <td>{{ $occupation->check_out_time }}</td>
                    <td>{{ $occupation->allowed_smoking }}</td>
                    <td>{{ $occupation->pet_friendly }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['occupations.destroy', $occupation->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('occupations.show', [$occupation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('occupations.edit', [$occupation->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $occupations])
        </div>
    </div>
</div>
