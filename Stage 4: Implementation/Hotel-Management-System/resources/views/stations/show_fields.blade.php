<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $station->full_name }}</p>
</div>

<!-- Manager Id Field -->
<div class="col-sm-12">
    {!! Form::label('manager_id', 'Manager Id:') !!}
    <p>{{ $station->manager_id }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $station->location }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $station->status }}</p>
</div>

