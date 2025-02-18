<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $billing->customer_id }}</p>
</div>

<!-- Reservation Id Field -->
<div class="col-sm-12">
    {!! Form::label('reservation_id', 'Reservation Id:') !!}
    <p>{{ $billing->reservation_id }}</p>
</div>

<!-- Payment Method Id Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method_id', 'Payment Method Id:') !!}
    <p>{{ $billing->payment_method_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $billing->amount }}</p>
</div>

<!-- Discount Field -->
<div class="col-sm-12">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $billing->discount }}</p>
</div>

<!-- Total Amount Field -->
<div class="col-sm-12">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    <p>{{ $billing->total_amount }}</p>
</div>

<!-- Payment Status Field -->
<div class="col-sm-12">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $billing->payment_status }}</p>
</div>

<!-- Bill Date Field -->
<div class="col-sm-12">
    {!! Form::label('bill_date', 'Bill Date:') !!}
    <p>{{ $billing->bill_date }}</p>
</div>

