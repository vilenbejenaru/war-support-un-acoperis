@extends('layouts.app')

@section('content')
    <div class="container my-5">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="display-3 title mb-4">{{ __('Partners') }}</h1>
        <div class="text-muted">
            <p>
                Partners page
            </p>
        </div>
    </div>
@endsection
