<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('resource.store') }}" method="POST">
        @csrf
        <label for="type_id">Type:</label>
        <select name="type_id" >
            <option value="" selected disabled>Seleccione un tipo</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->title }}</option>
            @endforeach
        </select>
        @error('type_id')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <label for="category_id">Category:</label>
        <select name="category_id" >
            <option value="" selected disabled>Seleccione una categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->category_title }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="title">Title:</label>
        <input type="text" name="title"  value="{{ old('title') }}">
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="author">Author:</label>
        <input type="text" name="author"  value="{{ old('author') }}">
        @error('author')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="recording">Recording:</label>
        <input type="text" name="recording"  value="{{ old('recording') }}">
        @error('recording')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="presentation">Presentation:</label>
        <input type="text" name="presentation"  value="{{ old('presentation') }}">
        @error('presentation')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="repository">Repository:</label>
        <input type="text" name="repository"  value="{{ old('repository') }}">
        @error('repository')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="extra_resource_id1">Extra Resource 1:</label>
        <select name="extra_resource_id1" >
            <option value="" selected disabled></option>
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>
        @error('extra_resource_id1')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="extra_resource_id2">Extra Resource 2:</label>
        <select name="extra_resource_id2" >
            <option value="" selected disabled></option>
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>
        @error('extra_resource_id2')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="extra_resource_id3">Extra Resource 3:</label>
        <select name="extra_resource_id3" >
            <option value="" selected disabled></option>
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>
        @error('extra_resource_id3')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="">Crear</button>
        <a href="{{ route('resource.index') }}" class="">Cancelar</a>

    </form>
</body>
</html>