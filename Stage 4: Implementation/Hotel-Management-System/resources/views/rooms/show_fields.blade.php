<!-- Room Title Field -->
<div class="col-sm-12">
    {!! Form::label('room_title', 'Room Title:') !!}
    <p>{{ $room->room_title }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $room->image }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $room->description }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $room->amount }}</p>
</div>

<!-- Wifi Field -->
<div class="col-sm-12">
    {!! Form::label('wifi', 'Wifi:') !!}
    <p>{{ $room->wifi }}</p>
</div>

<!-- Room Type Field -->
<div class="col-sm-12">
    {!! Form::label('room_type', 'Room Type:') !!}
    <p>{{ $room->room_type }}</p>
</div>

