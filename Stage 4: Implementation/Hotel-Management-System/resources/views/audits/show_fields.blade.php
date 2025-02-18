<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $audit->user_id }}</p>
</div>

<!-- Action Field -->
<div class="col-sm-12">
    {!! Form::label('action', 'Action:') !!}
    <p>{{ $audit->action }}</p>
</div>

<!-- Table Name Field -->
<div class="col-sm-12">
    {!! Form::label('table_name', 'Table Name:') !!}
    <p>{{ $audit->table_name }}</p>
</div>

<!-- Record Id Field -->
<div class="col-sm-12">
    {!! Form::label('record_id', 'Record Id:') !!}
    <p>{{ $audit->record_id }}</p>
</div>

<!-- Ip Address Field -->
<div class="col-sm-12">
    {!! Form::label('ip_address', 'Ip Address:') !!}
    <p>{{ $audit->ip_address }}</p>
</div>

