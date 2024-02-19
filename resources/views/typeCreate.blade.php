@extends('layouts.htmlStructure')

@section('title', 'Type Create')

@section('content')
    <form action="{{ route('type.store') }}" method="POST" class="mx-auto w-2/4 bg-orange-500 p-8 rounded-lg shadow-md mt-5">
        @csrf
    <div class="mb-1">
        <label for="title" class="block text-md font-bold text-black">Title:</label>
    <input type="text" name="title"  value="{{ old('title') }}
    "class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800"">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create Type</button>
        <a href="{{ route('type.index') }}" class="mt-2 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
    </div>
    </form>
    @endsection
