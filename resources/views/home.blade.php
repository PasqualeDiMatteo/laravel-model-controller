@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="container mt-5">
        <h1 class="mb-3">Top rated movies</h1>
        @include('includes.movie.card')
    </div>
@endsection
