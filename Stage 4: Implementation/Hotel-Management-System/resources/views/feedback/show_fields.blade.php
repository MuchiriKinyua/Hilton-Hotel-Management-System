<!-- Guest Id Field -->
<div class="col-sm-12">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    <p>{{ $feedback->guest_id }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $feedback->comments }}</p>
</div>

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $feedback->rating }}</p>
</div>

<!-- Submitted At Field -->
<div class="col-sm-12">
    {!! Form::label('submitted_at', 'Submitted At:') !!}
    <p>{{ $feedback->submitted_at }}</p>
</div>

