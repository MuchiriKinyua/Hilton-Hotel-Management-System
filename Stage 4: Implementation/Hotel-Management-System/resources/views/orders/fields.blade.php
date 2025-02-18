<!-- Guest Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    {!! Form::number('guest_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_details', 'Order Details:') !!}
    {!! Form::number('order_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>