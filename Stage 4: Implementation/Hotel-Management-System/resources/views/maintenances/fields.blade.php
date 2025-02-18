<!-- Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item', 'Item:') !!}
    {!! Form::text('item', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Issue Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_description', 'Issue Description:') !!}
    {!! Form::text('issue_description', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Reported By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reported_by', 'Reported By:') !!}
    {!! Form::text('reported_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Assigned To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assigned_to', 'Assigned To:') !!}
    {!! Form::text('assigned_to', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Repair Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('repair_cost', 'Repair Cost:') !!}
    {!! Form::text('repair_cost', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Date Reported Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_reported', 'Date Reported:') !!}
    {!! Form::text('date_reported', null, ['class' => 'form-control','id'=>'date_reported']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_reported').datepicker()
    </script>
@endpush

<!-- Completion Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('completion_date', 'Completion Date:') !!}
    {!! Form::text('completion_date', null, ['class' => 'form-control','id'=>'completion_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#completion_date').datepicker()
    </script>
@endpush