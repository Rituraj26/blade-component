@extends('layouts.master')

@section('content')

    <div class="row mb-4">
        <div class="col-12 col-md-10 col-lg-8">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
            <p>{{ $post->body }}</p>
        </div>
    </div>

@endsection
