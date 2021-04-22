@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">Cars</h1>
        </div>

            <div class="w-5/6 py-10">
                @foreach ($cars as $car)

                <div class="m-auto">

                    <span class="uppercase text-blue-500 font-bold text-xs italic"> Founded: {{ $car->founded }}</span>
                    <h2 class="text-gray-700 text-5xl py-6">{{ $car->name }}</h2>
                    <p class="text-lg">{{ $car->description }}</p>
                    <hr class="mt-4 mb-8 blue-500"></hr>

                </div>
                @endforeach

            </div>

    </div>
@endsection
