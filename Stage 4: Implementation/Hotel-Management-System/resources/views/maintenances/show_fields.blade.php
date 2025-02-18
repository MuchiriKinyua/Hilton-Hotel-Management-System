<!-- Item Field -->
<div class="col-sm-12">
    {!! Form::label('item', 'Item:') !!}
    <p>{{ $maintenance->item }}</p>
</div>

<!-- Issue Description Field -->
<div class="col-sm-12">
    {!! Form::label('issue_description', 'Issue Description:') !!}
    <p>{{ $maintenance->issue_description }}</p>
</div>

<!-- Reported By Field -->
<div class="col-sm-12">
    {!! Form::label('reported_by', 'Reported By:') !!}
    <p>{{ $maintenance->reported_by }}</p>
</div>

<!-- Assigned To Field -->
<div class="col-sm-12">
    {!! Form::label('assigned_to', 'Assigned To:') !!}
    <p>{{ $maintenance->assigned_to }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $maintenance->status }}</p>
</div>

<!-- Repair Cost Field -->
<div class="col-sm-12">
    {!! Form::label('repair_cost', 'Repair Cost:') !!}
    <p>{{ $maintenance->repair_cost }}</p>
</div>

<!-- Date Reported Field -->
<div class="col-sm-12">
    {!! Form::label('date_reported', 'Date Reported:') !!}
    <p>{{ $maintenance->date_reported }}</p>
</div>

<!-- Completion Date Field -->
<div class="col-sm-12">
    {!! Form::label('completion_date', 'Completion Date:') !!}
    <p>{{ $maintenance->completion_date }}</p>
</div>

