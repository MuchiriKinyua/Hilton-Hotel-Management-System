<!-- Booking Id Field -->
<div class="col-sm-12">
    {!! Form::label('booking_id', 'Booking Id:') !!}
    <p>{{ $payment->booking_id }}</p>
</div>

<!-- Guest Id Field -->
<div class="col-sm-12">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    <p>{{ $payment->guest_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $payment->amount }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $payment->payment_method }}</p>
</div>

<!-- Payment Status Field -->
<div class="col-sm-12">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $payment->payment_status }}</p>
</div>

<!-- Transaction Date Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{{ $payment->transaction_date }}</p>
</div>

