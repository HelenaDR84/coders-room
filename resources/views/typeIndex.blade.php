@extends('layouts.htmlStructure')

@section('title', 'Resources')

@section('content')
    <h1 class="pt-4 text-center text-orange-500 text-2xl font-bold mb-6">My Types</h1>
    <a href="{{ route('type.create') }}" class="mt-4 ml-[1%] bg-orange-500 text-white py-2 px-4 rounded-xl text-center hover:bg-orange-600 focus:outline-none focus:ring focus:border-orange-300 self-end">  <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Type</a> 
    @if($types->isEmpty())
        <p>The table is empty</p>
    @else
    <table class="w-[98%] mx-auto border-collapse border border-gray-300 mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">Date</th>
                <th class="border p-2">Title</th>   
                <th class="border p-2">Actions</th>

            </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
            <tr class="border hover:bg-gray-100">
                <td class="border p-2">{{ $type->created_at->format('Y-m-d') }}</td>
                <td class="border p-2">{{ $type->title }}</td> 
                <td class="border p-2 space-x-2">
                <a href="{{ route('type.edit',$type->id) }}" class="text-white bg-violet-500 hover:bg-violet-600 px-4 py-2 rounded-full focus:outline-none tfocus:ring focus:border-violet-300 transition duration-300 ease-in-out"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                <a href="{{ route('type.show',$type->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300 transition duration-300 ease-in-out"> <i class="fa fa-eye"></i></a>
                <form method="POST" action="{{ route('type.destroy', $type->id) }}" onsubmit="return confirmDelete()" class="inline"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" value="Delete" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-red-300 transition duration-300 ease-in-out cursor-pointer"><i class="fas fa-trash" aria-hidden="true"></i></button>
                </form>
                </td>
            </tr>
        @endforeach  
    </tbody>
</table>
</div>
     @endif     
     <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this type? Doing so will delete all associated resources.");
        }
    </script> 
@endsection