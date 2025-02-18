<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="billings-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Reservation Id</th>
                <th>Payment Method Id</th>
                <th>Amount</th>
                <th>Discount</th>
                <th>Total Amount</th>
                <th>Payment Status</th>
                <th>Bill Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($billings as $billing)
                <tr>
                    <td>{{ $billing->customer_id }}</td>
                    <td>{{ $billing->reservation_id }}</td>
                    <td>{{ $billing->payment_method_id }}</td>
                    <td>{{ $billing->amount }}</td>
                    <td>{{ $billing->discount }}</td>
                    <td>{{ $billing->total_amount }}</td>
                    <td>{{ $billing->payment_status }}</td>
                    <td>{{ $billing->bill_date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['billings.destroy', $billing->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('billings.show', [$billing->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('billings.edit', [$billing->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $billings])
        </div>
    </div>
</div>
