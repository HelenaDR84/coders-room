@extends('layouts.htmlStructure')

@section('title', 'Extra Resource Create')

@section('content')
    <form action="{{ route('extraResource.store') }}" method="POST" class="mx-auto w-2/4 bg-orange-500 p-8 rounded-lg shadow-md mt-5">
        @csrf

        <div class="mb-5">
            <label for="extra_res_title" class="block text-md font-semibold text-white">Title of extra resource:</label>
            <input type="text" name="extra_res_title"  value="{{ old('extra_res_title') }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('extra_res_title')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="link" class="block text-md font-semibold text-white">Link:</label>
            <input type="text" name="link"  value="{{ old('link') }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('link')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <button type="submit" class="bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Extra Resource</button>
            <a href="{{ route('extraResource.index') }}" class="mt-2 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
        </div>
    </form>
@endsection
