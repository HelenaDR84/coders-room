<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('resource.update', $resource->id) }}" method="POST" class="flex flex-col w-2/4 bg-purple-800 p-8 rounded-lg shadow-md ">

        @csrf
        @method('PUT')
    
        <div class="flex mb-4 space-x-4">
            <div class="w-1/2">
                <label for="type_id" class="block text-sm font-semibold text-white">Type:</label>
                <select name="type_id" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $resource->type_id == $type->id ? 'selected' : '' }}>{{ $type->title }}</option>
                    @endforeach
                </select>
                @error('type_id')
                <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="w-1/2">
                <label for="category_id" class="block text-md font-semibold text-white">Category:</label>
                <select name="category_id" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $resource->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_title }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
                @enderror
            </div>
        </div>
    
        <div class="mb-5">
            <label for="title" class="block text-md font-semibold text-white">Title:</label>
            <input type="text" name="title" value="{{ $resource->title }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('title')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-5">
            <label for="author" class="block text-md font-semibold text-white">Author:</label>
            <input type="text" name="author" value="{{ $resource->author }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('author')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-5">
            <label for="recording" class="block text-md font-semibold text-white">Recording:</label>
            <input type="text" name="recording" value="{{ $resource->recording }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('recording')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-5">
            <label for="presentation" class="block text-md font-semibold text-white">Presentation:</label>
            <input type="text" name="presentation" value="{{ $resource->presentation }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('presentation')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-5">
            <label for="repository" class="block text-md font-semibold text-white">Repository:</label>
            <input type="text" name="repository" value="{{ $resource->repository }}" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
            @error('repository')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="flex mb-4 space-x-4">
            <div class="w-1/2">
                <label for="extra_resource_id1" class="block text-md font-semibold text-white">Extra Resource 1:</label>
                <select name="extra_resource_id1" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                    <option value="" {{ optional($resource->extraResource1)->id ? '' : 'selected' }}></option>
                    @foreach ($extraResources as $extraResource)
                        <option value="{{ $extraResource->id }}" {{ optional($resource->extraResource1)->id == $extraResource->id ? 'selected' : '' }}>
                            {{ $extraResource->extra_res_title }}
                        </option>
                    @endforeach
                </select>
                @error('extra_resource_id1')
                <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
                @enderror
            </div>
    
            <div class="w-1/2">
                <label for="extra_resource_id2" class="block text-md font-semibold text-white">Extra Resource 2:</label>
                <select name="extra_resource_id2" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                    <option value="" {{ optional($resource->extraResource2)->id ? '' : 'selected' }}></option>
                    @foreach ($extraResources as $extraResource)
                        <option value="{{ $extraResource->id }}" {{ optional($resource->extraResource2)->id == $extraResource->id ? 'selected' : '' }}>
                            {{ $extraResource->extra_res_title }}
                        </option>
                    @endforeach
                </select>
                @error('extra_resource_id2')
                <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
                @enderror
            </div>

        <div class="w-1/2">
            <label for="extra_resource_id3" class="block text-md font-semibold text-white">Extra Resource 3:</label>
            <select name="extra_resource_id3" class="mt-1 p-2 w-full border rounded-md bg-white text-gray-800">
                <option value="" {{ optional($resource->extraResource3)->id ? '' : 'selected' }}></option>
                @foreach ($extraResources as $extraResource)
                    <option value="{{ $extraResource->id }}" {{ optional($resource->extraResource3)->id == $extraResource->id ? 'selected' : '' }}>
                        {{ $extraResource->extra_res_title }}
                    </option>
                @endforeach
            </select>
            @error('extra_resource_id3')
            <div class="text-red-500 bg-red-200 text-sm mt-1 rounded">{{ $message }}</div>
            @enderror
        </div>
    </div>        
    <div class="mb-5">
        <button type="submit" class="bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Update</button>
        <a href="{{ route('resource.index') }}" class="mt-2 bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-semibold rounded-lg text-sm px-5 py-2.5 text-center inline-block"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
    </div>

    </form>
</body>
</html>