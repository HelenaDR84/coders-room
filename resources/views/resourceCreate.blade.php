<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="{{ route('resource.store') }}" method="POST" class="flex flex-col w-2/4  bg-orange-500 p-8 rounded-lg shadow-md">

        @csrf
    
        <div class="flex mb-4 space-x-4">
            <div class="w-1/2">
                <label for="type_id" class="block text-md font-semibold text-white">Type:</label>
                <select name="type_id" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                    <option value="" selected disabled>Seleccione un tipo</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                    @endforeach
                </select>
                @error('type_id')
                <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="w-1/2">
                <label for="category_id" class="block text-md font-semibold text-white">Category:</label>
                <select name="category_id" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                    <option value="" selected disabled>Seleccione una categoría</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-5"> 
            <label for="title"class="block text-md font-semibold text-white">Title:</label>
            <input type="text" name="title"  value="{{ old('title') }}"class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('title')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
            
        <div class="mb-5"> 
            <label for="author"class="block text-md font-semibold text-white">Author:</label>
            <input type="text" name="author"  value="{{ old('author') }}"class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('author')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5"> 
            <label for="recording"class="block text-md font-semibold text-white">Recording:</label>
            <input type="text" name="recording"  value="{{ old('recording') }}"class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('recording')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5"> 
            <label for="presentation"class="block text-md font-semibold text-white">Presentation:</label>
            <input type="text" name="presentation"  value="{{ old('presentation') }}"class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('presentation')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5"> 
            <label for="repository"class="block text-md font-semibold text-white">Repository:</label>
            <input type="text" name="repository"  value="{{ old('repository') }}"class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('repository')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex mb-4 space-x-4">             
            <div class="w-1/2">             
                <label for="extra_resource_id1"class="block text-md font-semibold text-white">Extra Resource 1:</label>
                <select name="extra_resource_id1" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                <option value="" selected disabled></option>
                @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
                @endforeach
            </select>
            @error('extra_resource_id1')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
            
        <div class="w-1/2">             
            <label for="extra_resource_id2"class="block text-md font-semibold text-white">Extra Resource 2:</label>
            <select name="extra_resource_id2" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                <option value="" selected disabled></option>
                @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
                @endforeach
            </select>
            @error('extra_resource_id2')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-1/2"> 
            <label for="extra_resource_id3"class="block text-md font-semibold text-white">Extra Resource 3:</label>
            <select name="extra_resource_id3" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                <option value="" selected disabled></option>
                @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
                @endforeach
            </select>
            @error('extra_resource_id3')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    </div>
        
        <div class="mb-5">
            <button type="submit" class="bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add</button>
            <a href="{{ route('resource.index') }}" class="mt-2 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
        </div>
        
    </form>
</body>
</html>