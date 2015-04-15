<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, [ 'class' => 'form-control', 'autofocus' => true ]) !!}
    {!! $errors->first('title') !!}
</div>

<div class="form-group">
    {!! Form::label('parent_id', 'Parent:') !!}
    {!! Form::select('parent_id', $categories, null, [ 'class' => 'form-control' ]) !!}
    {!! $errors->first('parent_id') !!}
</div>