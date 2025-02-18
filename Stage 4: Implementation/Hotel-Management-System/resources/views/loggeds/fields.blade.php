<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Login Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('login_time', 'Login Time:') !!}
    {!! Form::text('login_time', null, ['class' => 'form-control','id'=>'login_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#login_time').datepicker()
    </script>
@endpush

<!-- Logout Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    {!! Form::text('logout_time', null, ['class' => 'form-control','id'=>'logout_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#logout_time').datepicker()
    </script>
@endpush

<!-- Ip Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_address', 'Ip Address:') !!}
    {!! Form::text('ip_address', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Device Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_info', 'Device Info:') !!}
    {!! Form::text('device_info', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>