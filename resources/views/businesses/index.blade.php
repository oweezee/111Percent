@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Ngong Business Directory</h2>

    <div class="row">
        @forelse($businesses as $business)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($business->image)
                        <img src="{{ asset('storage/' . $business->image) }}" class="card-img-top" alt="{{ $business->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $business->name }}</h5>
                        <p class="card-text">{{ Str::limit($business->description, 100) }}</p>
                        <p><strong>Category:</strong> {{ $business->category }}</p>
                        <p><strong>Location:</strong> {{ $business->location }}</p>
                        @if($business->phone)
                            <p><strong>Phone:</strong> {{ $business->phone }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p>No businesses found.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $businesses->links() }}
    </div>
</div>
@endsection
