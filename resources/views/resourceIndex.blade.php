<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resources</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="pt-4 text-center text-orange-500 text-2xl font-bold">My Resources</h1>

    <a href="{{ route('resource.create') }}" class="mt-4 ml-[1%] bg-orange-500 text-white py-2 px-4 rounded-xl text-center hover:bg-orange-600 focus:outline-none focus:ring focus:border-orange-300 self-end"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Resource</a>
    
    @if($resources->isEmpty())
        <p class="text-center mt-4">The table is empty</p>
    @else
        <div class="overflow-auto">
            <table class="w-[98%] mx-auto border-collapse border border-gray-300 mt-4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">Date</th>
                        <th class="border p-2">Type</th>
                        <th class="border p-2">Title</th>
                        <th class="border p-2">Author</th>
                        <th class="border p-2">Category</th>
                        <th class="border p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($resources as $resource)
                        <tr class="border hover:bg-gray-100">
                            <td class="border p-2">{{ $resource->created_at->format('Y-m-d') }}</td>
                            <td class="border p-2"><span class="text-white bg-purple-500 px-2 py-1 rounded">{{ $resource->type->title }}</span></td>
                            <td class="border p-2">{{ $resource->title }}</td>
                            <td class="border p-2">{{ $resource->author }}</td>
                            <td class="border p-2"><span class="text-white bg-orange-500 px-2 py-1 rounded">{{ $resource->category->category_title }}</span></td>
                            <td class="border p-2 space-x-2">
                                <a href="{{ route('resource.edit',$resource->id) }}" class="text-white bg-violet-500 hover:bg-violet-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-violet-300 transition duration-300 ease-in-out"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                <a href="{{ route('resource.show',$resource->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-blue-300 transition duration-300 ease-in-out"> <i class="fa fa-eye"></i></a>
                                <form method="POST" action="{{ route('resource.destroy', $resource->id) }}" class="inline">
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
</body>
</html>