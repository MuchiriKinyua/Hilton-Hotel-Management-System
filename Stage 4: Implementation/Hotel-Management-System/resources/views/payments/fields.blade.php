<!-- Booking Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booking_id', 'Booking Id:') !!}
    {!! Form::number('booking_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Guest Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    {!! Form::number('guest_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    {!! Form::text('payment_method', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    {!! Form::text('payment_status', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Transaction Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    {!! Form::text('transaction_date', null, ['class' => 'form-control','id'=>'transaction_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#transaction_date').datepicker()
    </script>
@endpush