@extends('form')

@section('title')
New category
@overwrite

@section('body')
    {!! Form::model($data, [ 'route' => 'categories.store' ]) !!}
        @include('categories.partials.form')

        <div class="form-group">
            {!! Form::submit('Create', [ 'class' => 'btn btn-primary' ]) !!}
        </div>
    {!! Form::close() !!}
@overwrite