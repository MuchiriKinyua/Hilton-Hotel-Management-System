<!-- Room Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_type', 'Room Type:') !!}
    {!! Form::text('room_type', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Max Occupancy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_occupancy', 'Max Occupancy:') !!}
    {!! Form::text('max_occupancy', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Price Per Night Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_per_night', 'Price Per Night:') !!}
    {!! Form::text('price_per_night', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Extra Guest Charge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('extra_guest_charge', 'Extra Guest Charge:') !!}
    {!! Form::text('extra_guest_charge', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Check In Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_in_time', 'Check In Time:') !!}
    {!! Form::text('check_in_time', null, ['class' => 'form-control','id'=>'check_in_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#check_in_time').datepicker()
    </script>
@endpush

<!-- Check Out Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_out_time', 'Check Out Time:') !!}
    {!! Form::text('check_out_time', null, ['class' => 'form-control','id'=>'check_out_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#check_out_time').datepicker()
    </script>
@endpush

<!-- Allowed Smoking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allowed_smoking', 'Allowed Smoking:') !!}
    {!! Form::text('allowed_smoking', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Pet Friendly Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pet_friendly', 'Pet Friendly:') !!}
    {!! Form::text('pet_friendly', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>