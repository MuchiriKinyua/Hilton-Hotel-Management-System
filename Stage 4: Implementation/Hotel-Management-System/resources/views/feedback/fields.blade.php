<!-- Guest Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    {!! Form::number('guest_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Comments Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::text('comments', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::text('rating', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Submitted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('submitted_at', 'Submitted At:') !!}
    {!! Form::text('submitted_at', null, ['class' => 'form-control','id'=>'submitted_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#submitted_at').datepicker()
    </script>
@endpush