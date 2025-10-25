@extends('layouts.app')

@section('title', 'Configure Plan')

@section('content')
    <p>
        {{ $plan->category->name }}
    </p>
    <h1 class="text-lg font-bold">
        {{ $plan->name }}
    </h1>
@endsection
