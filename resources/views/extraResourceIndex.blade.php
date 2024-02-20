@extends('layouts.htmlStructure')

@section('title', 'Extra Resources')

@section('content')
    <h1 class="pt-4 text-center text-orange-500 text-2xl font-bold">My Extra Resources</h1>

    <a href="{{ route('extraResource.create') }}" class="mt-4 ml-[1%] bg-orange-500 text-white py-2 px-4 rounded-xl text-center hover:bg-orange-600 focus:outline-none focus:ring focus:border-orange-300 self-end"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Extra Resource</a>

    @if($extraResources->isEmpty())
        <p>The table is empty</p>
    @else
        <div class="overflow-auto">
            <table class="w-[98%] mx-auto border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">Date</th>
                        <th class="border p-2">Title</th>
                        <th class="border p-2">Link</th>
                        <th class="border p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($extraResources as $extraResource)
                        <tr class="border hover:bg-gray-100">
                            <td class="border p-2">{{ $extraResource->created_at->format('Y-m-d') }}</td>
                            <td class="border p-2">{{ $extraResource->extra_res_title }}</td>
                            <td class="border p-2">{{ $extraResource->link }}</td>
                            <td class="border p-2 space-x-2">
                                <a href="{{ route('extraResource.edit',$extraResource) }}" class="text-white bg-violet-500 hover:bg-violet-600 px-4 py-2 rounded-full focus:outline-none tfocus:ring focus:border-violet-300 transition duration-300 ease-in-out"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                <a href="{{ route('extraResource.show',$extraResource) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300 transition duration-300 ease-in-out"> <i class="fa fa-eye"></i></a>
                                <form method="POST" action="{{ route('extraResource.destroy', $extraResource->id) }}" class="inline">
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
@endsection
