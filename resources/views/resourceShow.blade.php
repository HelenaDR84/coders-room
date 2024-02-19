<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>Resource Details</title>
    @vite('resources/css/app.css')
    <!-- Agrega aquí tu enlace al archivo de estilos de Tailwind si es necesario -->
</head>
<body class="bg-gray-100">
    
    <div class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center mt-2 mb-4">
            <p class="text-gray-500">#{{ $resource->id }}</p>
            <p class="text-sm text-gray-500">Date: {{ $resource->created_at }}</p>
        </div>

        <h1 class="text-3xl font-semibold mb-4 text-orange-500">{{ $resource->title }}</h1>

        <div class="mt-6 space-y-4">
            <p><strong>Author:</strong> {{ $resource->author }}</p>
            <p><strong>Type:</strong> <span class="text-white bg-purple-500 px-2 py-1 rounded">{{ $resource->type->title }}</span></p>
            <p><strong>Category:</strong> <span class="text-white bg-orange-500 px-2 py-1 rounded">{{ $resource->category->category_title }}</span></p>
            <p><strong>Recording:</strong> <a href="{{ $resource->recording }}" target="_blank" class="text-blue-500 hover:underline">{{ $resource->recording }}</a></p>
            <p><strong>Presentation:</strong> <a href="{{ $resource->presentation }}" target="_blank" class="text-blue-500 hover:underline">{{ $resource->presentation }}</a></p>
            <p><strong>Repository:</strong> <a href="{{ $resource->repository }}" target="_blank" class="text-blue-500 hover:underline">{{ $resource->repository }}</a></p>

            @if($resource->extraResource1)
                <p><strong>Extra Resource 1:</strong> <a href="{{ $resource->extraResource1->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $resource->extraResource1->extra_res_title }}</a></p>
            @endif

            @if($resource->extraResource2)
                <p><strong>Extra Resource 2:</strong> <a href="{{ $resource->extraResource2->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $resource->extraResource2->extra_res_title }}</a></p>
            @endif

            @if($resource->extraResource3)
                <p><strong>Extra Resource 3:</strong> <a href="{{ $resource->extraResource3->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $resource->extraResource3->extra_res_title }}</a></p>
            @endif
        </div>

        <div class="flex mt-8 space-x-4 font-semibold">
            <a href="{{ route('resource.edit',$resource->id) }}" class="text-white bg-violet-500 hover:bg-violet-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-violet-300 transition duration-300 ease-in-out"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit</a>
            
            <form method="POST" action="{{ route('resource.destroy', $resource->id) }}" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-red-300 transition duration-300 ease-in-out cursor-pointer"><i class="fas fa-trash" aria-hidden="true"></i> Delete</button>
            </form>
        
            <a href="{{ route('resource.index') }}" class="text-white bg-gray-400 hover:bg-gray-600 px-4 py-2 rounded-full focus:outline-none focus:ring focus:border-gray-300 transition duration-300 ease-in-out"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to List</a>
        </div>
    </div>
</body>
</html>
