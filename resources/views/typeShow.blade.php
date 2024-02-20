@extends('layouts.htmlStructure')

@section('title', 'Resource Details')

@section('content')
<div class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-xl">
    <div class="flex justify-between items-center mt-2 mb-4">
        <p class="text-gray-500">#{{ $type->id }}</p>
        <p class="text-sm text-gray-500">Date: {{ $type->created_at }}</p>
    </div>
    <h1 class="text-3xl font-semibold mb-4 text-orange-500">{{ $type->title }}</h1>
    <div class="flex mt-8 space-x-4 font-semibold">
        
    <a href="{{ route('type.index') }}" class="text-white bg-gray-400 hover:bg-gray-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-gray-300 transition duration-300 ease-in-out"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to List</a>
           
    <a href="{{ route('type.edit',$type->id) }}" class="text-white bg-violet-500 hover:bg-violet-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-violet-300 transition duration-300 ease-in-out"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit</a>
     <form method="POST" action="{{ route('type.destroy', $type->id) }}" onsubmit="return confirmDelete()"> 
                @csrf
                @method('DELETE')
                <button type="submit" value="Delete" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-red-300 transition duration-300 ease-in-out cursor-pointer"><i class="fas fa-trash" aria-hidden="true"></i> Delete</button>
     </form>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this type? Doing so will delete all associated resources.");
        }
    </script> 
 @endsection