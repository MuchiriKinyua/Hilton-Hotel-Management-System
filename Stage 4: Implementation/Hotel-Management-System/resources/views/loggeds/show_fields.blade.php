<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $logged->user_id }}</p>
</div>

<!-- Login Time Field -->
<div class="col-sm-12">
    {!! Form::label('login_time', 'Login Time:') !!}
    <p>{{ $logged->login_time }}</p>
</div>

<!-- Logout Time Field -->
<div class="col-sm-12">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    <p>{{ $logged->logout_time }}</p>
</div>

<!-- Ip Address Field -->
<div class="col-sm-12">
    {!! Form::label('ip_address', 'Ip Address:') !!}
    <p>{{ $logged->ip_address }}</p>
</div>

<!-- Device Info Field -->
<div class="col-sm-12">
    {!! Form::label('device_info', 'Device Info:') !!}
    <p>{{ $logged->device_info }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $logged->status }}</p>
</div>

