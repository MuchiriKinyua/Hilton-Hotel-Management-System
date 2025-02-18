<!-- Bill Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bill_id', 'Bill Id:') !!}
    {!! Form::number('bill_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Due Date:') !!}
    {!! Form::text('due_date', null, ['class' => 'form-control','id'=>'due_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#due_date').datepicker()
    </script>
@endpush

<!-- Payment Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    {!! Form::text('payment_status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Invoice Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    {!! Form::text('invoice_date', null, ['class' => 'form-control','id'=>'invoice_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#invoice_date').datepicker()
    </script>
@endpush