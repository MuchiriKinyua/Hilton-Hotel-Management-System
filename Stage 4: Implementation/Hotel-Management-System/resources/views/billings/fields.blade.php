<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reservation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reservation_id', 'Reservation Id:') !!}
    {!! Form::number('reservation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method_id', 'Payment Method Id:') !!}
    {!! Form::number('payment_method_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::text('discount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Total Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_amount', 'Total Amount:') !!}
    {!! Form::text('total_amount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    {!! Form::text('payment_status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Bill Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_date', 'Bill Date:') !!}
    {!! Form::text('bill_date', null, ['class' => 'form-control','id'=>'bill_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#bill_date').datepicker()
    </script>
@endpush