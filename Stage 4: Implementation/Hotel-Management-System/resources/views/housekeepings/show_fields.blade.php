<!-- Room Id Field -->
<div class="col-sm-12">
    {!! Form::label('room_id', 'Room Id:') !!}
    <p>{{ $housekeeping->room_id }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $housekeeping->status }}</p>
</div>

<!-- Assigned Staff Id Field -->
<div class="col-sm-12">
    {!! Form::label('assigned_staff_id', 'Assigned Staff Id:') !!}
    <p>{{ $housekeeping->assigned_staff_id }}</p>
</div>

<!-- Cleaning Date Field -->
<div class="col-sm-12">
    {!! Form::label('cleaning_date', 'Cleaning Date:') !!}
    <p>{{ $housekeeping->cleaning_date }}</p>
</div>

<!-- Completion Time Field -->
<div class="col-sm-12">
    {!! Form::label('completion_time', 'Completion Time:') !!}
    <p>{{ $housekeeping->completion_time }}</p>
</div>

<!-- Supplies Used Field -->
<div class="col-sm-12">
    {!! Form::label('supplies_used', 'Supplies Used:') !!}
    <p>{{ $housekeeping->supplies_used }}</p>
</div>

<!-- Inspection Status Field -->
<div class="col-sm-12">
    {!! Form::label('inspection_status', 'Inspection Status:') !!}
    <p>{{ $housekeeping->inspection_status }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $housekeeping->notes }}</p>
</div>

