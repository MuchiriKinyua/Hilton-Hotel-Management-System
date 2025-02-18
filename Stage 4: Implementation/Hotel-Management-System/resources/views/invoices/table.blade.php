<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="invoices-table">
            <thead>
            <tr>
                <th>Bill Id</th>
                <th>Customer Id</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Payment Status</th>
                <th>Invoice Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->bill_id }}</td>
                    <td>{{ $invoice->customer_id }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->due_date }}</td>
                    <td>{{ $invoice->payment_status }}</td>
                    <td>{{ $invoice->invoice_date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('invoices.show', [$invoice->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('invoices.edit', [$invoice->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $invoices])
        </div>
    </div>
</div>
