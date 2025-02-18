<!-- Room Type Field -->
<div class="col-sm-12">
    {!! Form::label('room_type', 'Room Type:') !!}
    <p>{{ $occupation->room_type }}</p>
</div>

<!-- Max Occupancy Field -->
<div class="col-sm-12">
    {!! Form::label('max_occupancy', 'Max Occupancy:') !!}
    <p>{{ $occupation->max_occupancy }}</p>
</div>

<!-- Price Per Night Field -->
<div class="col-sm-12">
    {!! Form::label('price_per_night', 'Price Per Night:') !!}
    <p>{{ $occupation->price_per_night }}</p>
</div>

<!-- Extra Guest Charge Field -->
<div class="col-sm-12">
    {!! Form::label('extra_guest_charge', 'Extra Guest Charge:') !!}
    <p>{{ $occupation->extra_guest_charge }}</p>
</div>

<!-- Check In Time Field -->
<div class="col-sm-12">
    {!! Form::label('check_in_time', 'Check In Time:') !!}
    <p>{{ $occupation->check_in_time }}</p>
</div>

<!-- Check Out Time Field -->
<div class="col-sm-12">
    {!! Form::label('check_out_time', 'Check Out Time:') !!}
    <p>{{ $occupation->check_out_time }}</p>
</div>

<!-- Allowed Smoking Field -->
<div class="col-sm-12">
    {!! Form::label('allowed_smoking', 'Allowed Smoking:') !!}
    <p>{{ $occupation->allowed_smoking }}</p>
</div>

<!-- Pet Friendly Field -->
<div class="col-sm-12">
    {!! Form::label('pet_friendly', 'Pet Friendly:') !!}
    <p>{{ $occupation->pet_friendly }}</p>
</div>

