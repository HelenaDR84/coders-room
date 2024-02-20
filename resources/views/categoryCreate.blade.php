@extends('layouts.htmlStructure')

@section('title', 'Resource Create')

@section('content')
<form action="{{ route('category.store') }}" method="POST" class="mx-auto w-2/4 bg-orange-500 p-8 rounded-lg shadow-md mt-5">
        @csrf
        <label for="category_title" class="block text-md font-semibold text-white">Category name:</label>
        <input name="category_title" type="text"  class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800"/>
        @error('category_title')
        <div>{{$message}}</div>
        @enderror
        <button type="submit" class="bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Category</button>
        <a href="{{ route('category.index') }}" class="mt-2 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>

    </form>
@endsection