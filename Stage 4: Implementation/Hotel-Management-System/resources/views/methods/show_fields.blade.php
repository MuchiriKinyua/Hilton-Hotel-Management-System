<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $method->name }}</p>
</div>

<!-- Provider Field -->
<div class="col-sm-12">
    {!! Form::label('provider', 'Provider:') !!}
    <p>{{ $method->provider }}</p>
</div>

<!-- Transaction Fee Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_fee', 'Transaction Fee:') !!}
    <p>{{ $method->transaction_fee }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $method->status }}</p>
</div>

