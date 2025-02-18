<!-- Item Name Field -->
<div class="col-sm-12">
    {!! Form::label('item_name', 'Item Name:') !!}
    <p>{{ $inventory->item_name }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $inventory->category }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $inventory->quantity }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $inventory->status }}</p>
</div>

