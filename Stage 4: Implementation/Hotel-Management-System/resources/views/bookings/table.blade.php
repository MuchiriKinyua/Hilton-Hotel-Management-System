<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="bookings-table">
            <thead>
            <tr>
                <th>Room Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Transactiontype</th>
                <th>Transid</th>
                <th>Transtime</th>
                <th>Transamount</th>
                <th>Businessshortcode</th>
                <th>Billrefnumber</th>
                <th>Invoicenumber</th>
                <th>Orgaccountbalance</th>
                <th>Thirdpartytransid</th>
                <th>Msisdn</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->end_date }}</td>
                    <td>{{ $booking->TransactionType }}</td>
                    <td>{{ $booking->TransID }}</td>
                    <td>{{ $booking->TransTime }}</td>
                    <td>{{ $booking->TransAmount }}</td>
                    <td>{{ $booking->BusinessShortCode }}</td>
                    <td>{{ $booking->BillRefNumber }}</td>
                    <td>{{ $booking->InvoiceNumber }}</td>
                    <td>{{ $booking->OrgAccountBalance }}</td>
                    <td>{{ $booking->ThirdPartyTransID }}</td>
                    <td>{{ $booking->MSISDN }}</td>
                    <td>{{ $booking->FirstName }}</td>
                    <td>{{ $booking->MiddleName }}</td>
                    <td>{{ $booking->LastName }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('bookings.show', [$booking->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('bookings.edit', [$booking->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $bookings])
        </div>
    </div>
</div>
