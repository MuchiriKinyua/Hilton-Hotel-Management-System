<!-- Bill Id Field -->
<div class="col-sm-12">
    {!! Form::label('bill_id', 'Bill Id:') !!}
    <p>{{ $invoice->bill_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $invoice->customer_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $invoice->amount }}</p>
</div>

<!-- Due Date Field -->
<div class="col-sm-12">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{{ $invoice->due_date }}</p>
</div>

<!-- Payment Status Field -->
<div class="col-sm-12">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $invoice->payment_status }}</p>
</div>

<!-- Invoice Date Field -->
<div class="col-sm-12">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    <p>{{ $invoice->invoice_date }}</p>
</div>

