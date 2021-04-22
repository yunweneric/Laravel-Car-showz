@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold text-blue-500">{{ $car->name }} Details</h1>
        </div>
        {{-- <div class="pt-10">
            <a href="cars/create" class="text-blue-500 border-b-2 pb-2 border-dotted italic">{{ $car->name }} Details &rarr;</a>
        </div> --}}

        <div class="w-5/6 py-10">
                <div class="flex justify-evenly	">
                    <div class="w-12/12 mb-10">
                        <img src="{{ $car->imageurl }}" alt="" width="100%">
                    </div>

                    <div class="m-auto px-4">

                        <p><span class="uppercase text-blue-500 font-bold text-xs italic"> Founded:
                                {{ $car->founded }}</span></p>
                        <p><span class="uppercase text-blue-500 font-bold text-xs italic"> Added on:
                                {{ $car->created_at ? $car->created_at->diffForHumans() : '' }}</span></p>

                        <p class="uppercase text-blue-500 font-bold text-xs italic"><a href="cars/{{ $car->id}}">Car Name: {{ $car->name }}</a></p>
                        <p class="uppercase text-blue-500 font-bold text-xs italic"><a href="cars/{{ $car->id}}">Car Model: {{ $car->model }}</a></p>
                        <p class="text-xs">{{ $car->description }}</p>
                        <div class="flex justify-between mt-5">
                            <form action="cars/{{ $car->id }}" method="post" class="inline p-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-blue-500 border-b-2 pb-2 border-dotted italic">Delete &rarr;</button>
                            </form>
                            <a class=" text-blue-500 border-b-2 pb-2 border-dotted italic"
                                href="cars/{{ $car->id }}/edit">Edit &rarr;</a>
                        </div>
                        <hr class="mt-4 mb-8 blue-500">
                        </hr>

                    </div>
                </div>

        </div>

    </div>
@endsection
