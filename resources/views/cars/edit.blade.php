@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto py-24">
        <div class="text-center">
            <h1 class="text-3xl uppercase bold text-blue-500">Update your car</h1>
        </div>

        <div class="py-5">
            <div>
                <div class="md:grid md:grid-cols-1 md:gap-6 ">
                    <div class="mt-5 md:mt-0 md:col-span-2 m-auto">
                        <form action="/cars/{{ $car->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name" class="block text-sm font-medium text-gray-700">
                                                Car Name
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text" name="name" id="company_website"
                                                    class="focus:ring-indigo-200 focus:border-indigo-200 flex-1 block w-full rounded-none rounded-r-md sm:text-sm py-2 border-gray-300"
                                                    placeholder="Car Name" value="{{ $car->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="founded" class="block text-sm font-medium text-gray-700">
                                                Year Founded
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text" name="founded" id="company_website"
                                                    class="focus:ring-indigo-200 focus:border-indigo-200 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 py-2"
                                                    placeholder="1990" value="{{ $car->founded }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700" for="imageurl">
                                            Cover photo
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="url" name="imageurl" id="company_website"
                                                class="focus:ring-indigo-200 focus:border-indigo-200 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 py-2"
                                                placeholder="url here" value="{{ $car->imageurl }}">
                                        </div>

                                    </div>

                                    <div>
                                        <label for="description" class="block text-sm font-medium text-gray-700">
                                            Description
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="about" name="description" rows="3"
                                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md py-2"
                                                placeholder="Brief description for your Car." >{{$car->description }}</textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    @endsection
