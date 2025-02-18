<!-- Table Number Field -->
<div class="col-sm-12">
    {!! Form::label('table_number', 'Table Number:') !!}
    <p>{{ $table->table_number }}</p>
</div>

<!-- Capacity Field -->
<div class="col-sm-12">
    {!! Form::label('capacity', 'Capacity:') !!}
    <p>{{ $table->capacity }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $table->status }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $table->location }}</p>
</div>

