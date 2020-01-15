<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('Title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Content', 'Content:') !!}
    {!! Form::textarea('Content', null, ['class' => 'mytextarea form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Image', 'Image:') !!}
    {!! Form::file('Image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
</div>


