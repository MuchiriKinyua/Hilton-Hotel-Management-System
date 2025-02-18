<!-- Daily Rate Field -->
<div class="col-sm-12">
    {!! Form::label('daily_rate', 'Daily Rate:') !!}
    <p>{{ $transaction->daily_rate }}</p>
</div>

<!-- Total Stay Cost Field -->
<div class="col-sm-12">
    {!! Form::label('total_stay_cost', 'Total Stay Cost:') !!}
    <p>{{ $transaction->total_stay_cost }}</p>
</div>

<!-- Number Of Nights Field -->
<div class="col-sm-12">
    {!! Form::label('number_of_nights', 'Number Of Nights:') !!}
    <p>{{ $transaction->number_of_nights }}</p>
</div>

<!-- Is Deposit Made Field -->
<div class="col-sm-12">
    {!! Form::label('is_deposit_made', 'Is Deposit Made:') !!}
    <p>{{ $transaction->is_deposit_made }}</p>
</div>

