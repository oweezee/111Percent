@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="display-4 mb-3">Welcome to 111% Ngong Town</h1>
    <p class="lead">Your community platform for businesses, traffic, events, schools, and more.</p>

    <div class="row mt-5">
        <div class="col-md-4 mb-3">
            <a href="/businesses" class="btn btn-outline-primary w-100">Business Directory</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/traffic" class="btn btn-outline-success w-100">Matatu Traffic Updates</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/events" class="btn btn-outline-warning w-100">Local Events</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/schools" class="btn btn-outline-info w-100">Schools Directory</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="/community-posts" class="btn btn-outline-secondary w-100">Community Posts</a>
        </div>
    </div>
</div>
@endsection
