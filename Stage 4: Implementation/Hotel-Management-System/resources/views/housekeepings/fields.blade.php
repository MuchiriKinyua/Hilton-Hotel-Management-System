<!-- Room Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_id', 'Room Id:') !!}
    {!! Form::number('room_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Assigned Staff Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assigned_staff_id', 'Assigned Staff Id:') !!}
    {!! Form::number('assigned_staff_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cleaning Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cleaning_date', 'Cleaning Date:') !!}
    {!! Form::text('cleaning_date', null, ['class' => 'form-control','id'=>'cleaning_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#cleaning_date').datepicker()
    </script>
@endpush

<!-- Completion Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('completion_time', 'Completion Time:') !!}
    {!! Form::text('completion_time', null, ['class' => 'form-control','id'=>'completion_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#completion_time').datepicker()
    </script>
@endpush

<!-- Supplies Used Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('supplies_used', 'Supplies Used:') !!}
    {!! Form::textarea('supplies_used', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Inspection Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inspection_status', 'Inspection Status:') !!}
    {!! Form::text('inspection_status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>