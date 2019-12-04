

<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('Subject', 'Subject:') !!} <br>
    {!! Form::select('Subject', array('General' => 'General', 'Classroom' => 'Classroom Sessions', 'Tutoring' => 'One-on-One Tutoring', 'Partner' => 'Partnerships', 'Any' => 'Other'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Message', 'Message:') !!}
    {!! Form::textarea('Message', null, ['class' => 'form-control']) !!}
</div>

<div class="g-recaptcha" data-sitekey="6LfCFMYUAAAAAP05UD0KT7AoZuIRUhhu6xzovDf2"></div>

<div class="form-group">
{!! Form::text('website', null, ['class' => 'website', 'style' =>'display:none']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'submit btn btn-primary form-control']) !!}
</div>





