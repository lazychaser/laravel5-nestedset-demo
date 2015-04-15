@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>
                    Categories

                    <small>
                        <a href="{{ route('categories.create') }}" title="Create new root category">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </small>
                </h2>

                @include('categories.partials.tree')
            </div>

            <div class="col-md-9">
                <h2>@yield('title')</h2>

                @yield('body')
            </div>
        </div>
    </div>
@overwrite