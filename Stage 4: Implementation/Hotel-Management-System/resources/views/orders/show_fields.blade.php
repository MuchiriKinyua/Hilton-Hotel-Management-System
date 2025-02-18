<!-- Guest Id Field -->
<div class="col-sm-12">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    <p>{{ $order->guest_id }}</p>
</div>

<!-- Order Details Field -->
<div class="col-sm-12">
    {!! Form::label('order_details', 'Order Details:') !!}
    <p>{{ $order->order_details }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $order->amount }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $order->status }}</p>
</div>

