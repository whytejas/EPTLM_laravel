<div class="form-group">
    {!! Form::label('session', 'Session Date:') !!}
    {!! Form::date('session_date', null, ['class' => 'form-control']) !!}
</div>

{{--<div class="form-group">
    {!! Form::label('Content', 'Content:') !!}
    {!! Form::textarea('Content', null, ['class' => 'mytextarea form-control']) !!}
</div>--}}

{{--<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id'=> 'tag_list', 'class' => 'form-control', 'multiple'=>'multiple']) !!}
</div>--}}

{{--<div class="form-group">
    {!! Form::label('Image', 'Image:') !!}
    {!! Form::file('Image', null, ['class' => 'form-control']) !!}
</div>--}}

<div class="form-group">
    {!! Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control']) !!}
</div>


