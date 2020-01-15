<div class="form-group">
    {!! Form::label('session', 'Session Date:') !!}
    {!! Form::date('session_date', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
</div>


