@extends('layouts.htmlStructure')

@section('title', 'Resource Create')

@section('content')
    <h1 class="pt-4 text-center text-orange-500 text-2xl font-bold">My Category</h1>
    <a href="{{ route('category.create') }}" class="mt-4 ml-[1%] bg-orange-500 text-white py-2 px-4 rounded-xl text-center hover:bg-orange-600 focus:outline-none focus:ring focus:border-orange-300 self-end"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Category</a>

    @if($categories->isEmpty())
            <p>The table is empty</p>
        @else
        <div class="overflow-auto">
            <table class="w-[98%] mx-auto border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">Date</th>
                        <th class="border p-2">Category</th>
                        <th class="border p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($categories as $category)
            <tr class="border hover:bg-gray-100">
                <td class="border p-2">{{ $category->created_at->format('Y-m-d') }}</td>
                <td class="border p-2">{{ $category->category_title }}</td>
                <td class="border p-2 space-x-2">
                    <a href="{{ route('category.edit',$category->id) }}" class="text-white bg-violet-500 hover:bg-violet-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-violet-300 transition duration-300 ease-in-out"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                    <a href="{{ route('category.show',$category->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300 transition duration-300 ease-in-out"> <i class="fa fa-eye"></i></a>
                    <form method="POST" action="{{ route('category.destroy', $category->id) }}" onsubmit="return confirmDelete()" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-red-300 transition duration-300 ease-in-out cursor-pointer"><i class="fas fa-trash" aria-hidden="true"></i></button>
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
            return confirm("Are you sure you want to delete this category? Doing so will delete all associated resources.");
        }
    </script>
@endsection