@extends('layouts.htmlStructure')

@section('title', 'Update Extra Resource')

@section('content')
    <form action="{{ route('extraResource.update', $extraResource->id) }}" method="POST" class="mx-auto w-2/4 bg-purple-800 p-8 rounded-lg shadow-md mt-5">
        @csrf
        @method('PUT')

        <div class="mb-5">
            <label for="extra_res_title" class="block text-md font-semibold text-white">Title of extra resource:</label>
            <input type="text" name="extra_res_title"  value="{{ $extraResource->extra_res_title }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('extra_res_title')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <label for="link" class="block text-md font-semibold text-white">Link:</label>
            <input type="text" name="link"  value="{{ $extraResource->link }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('link')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <button type="submit" class="bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Update</button>
            <a href="{{ route('extraResource.index') }}" class="mt-2 bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
        </div>
    </form>
@endsection
