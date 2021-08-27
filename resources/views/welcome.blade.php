@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-700">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-2xl font-extrabold tracking-tight text-gray-200">Movies</h2>

                <x-movie-list></x-movie-list>
            </div>
        </div>
    </div>
@endsection
