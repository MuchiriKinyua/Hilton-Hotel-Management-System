<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="features-table">
            <thead>
            <tr>
                <th>Hotel</th>
                <th>Days In Waiting List</th>
                <th>Agent Involved</th>
                <th>Reserved Is Assigned</th>
                <th>Has Special Requests</th>
                <th>Customer Type</th>
                <th>Deposit Type</th>
                <th>Is Repeated Guest</th>
                <th>Distribution Channel</th>
                <th>Market Segment</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($features as $feature)
                <tr>
                    <td>{{ $feature->hotel }}</td>
                    <td>{{ $feature->days_in_waiting_list }}</td>
                    <td>{{ $feature->agent_involved }}</td>
                    <td>{{ $feature->reserved_is_assigned }}</td>
                    <td>{{ $feature->has_special_requests }}</td>
                    <td>{{ $feature->customer_type }}</td>
                    <td>{{ $feature->deposit_type }}</td>
                    <td>{{ $feature->is_repeated_guest }}</td>
                    <td>{{ $feature->distribution_channel }}</td>
                    <td>{{ $feature->market_segment }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['features.destroy', $feature->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('features.show', [$feature->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('features.edit', [$feature->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $features])
        </div>
    </div>
</div>
