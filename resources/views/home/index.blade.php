@extends('layout.main')

@section('page')

    <div class="container">
        @include('home.services.index')
        @include('home.about.index')
        @include('home.history.index')
        @include('home.structure.index')
    </div>

@endsection