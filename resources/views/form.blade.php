

<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Message', 'Message:') !!}
    {!! Form::textarea('Message', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'submit btn btn-primary form-control']) !!}
</div>





