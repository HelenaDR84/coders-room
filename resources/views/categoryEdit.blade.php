@extends('layouts.htmlStructure')

@section('title', 'Resource Create')

@section('content')
    <form action="{{ route('category.update',$category->id)}}" method="POST" class="mx-auto w-2/4 bg-purple-800 p-8 rounded-lg shadow-md mt-5">
            @csrf
            @method('PUT')
            <label for="category_title" class="block text-md font-semibold text-white">Category name:</label>
            <input name="category_title" type="text" value="{{$category->category_title}}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800"/>
            @error('category_title')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{$message}}</div>
            @enderror
            <button type="submit" class="bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Update</button>
            <a href="{{ route('category.index') }}"  class="mt-2 bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
            
        </div>
    </form>
@endsection