<!-- Daily Rate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('daily_rate', 'Daily Rate:') !!}
    {!! Form::text('daily_rate', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Total Stay Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_stay_cost', 'Total Stay Cost:') !!}
    {!! Form::text('total_stay_cost', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Number Of Nights Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_nights', 'Number Of Nights:') !!}
    {!! Form::text('number_of_nights', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Is Deposit Made Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_deposit_made', 'Is Deposit Made:') !!}
    {!! Form::text('is_deposit_made', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>