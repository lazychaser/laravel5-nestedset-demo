@extends('categories.layout')

@section('title')
{{ $category->title }}
@overwrite

@section('body')
    @include('categories.partials.path')
@overwrite