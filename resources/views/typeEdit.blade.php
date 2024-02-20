@extends('layouts.htmlStructure')

@section('title', 'Update Type')

@section('content')

    <form action="{{ route('type.update',$type->id)}}" method="POST" class="mx-auto w-2/4 bg-purple-800 p-8 rounded-lg shadow-md mt-5">
        @csrf
        @method('PUT')
    <label for="title" class="block text-md font-semibold text-white">Title:</label>
    <input type="text" name="title"  value="{{$type->title}}">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
        <a href="{{ route('type.index') }}" class="mt-2 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block">Cancel</a>
    </form> 
    @endsection