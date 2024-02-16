<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('resource.update', $resource->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="type_id">Type:</label>
        <select name="type_id" >
            @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ $resource->type_id == $type->id ? 'selected':'' }} >{{ $type->title }}</option>
            @endforeach
        </select>

        <label for="category_id">Category:</label>
        <select name="category_id" >
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $resource->category_id == $category->id ? 'selected':'' }}> {{ $category->category_title }}</option>
            @endforeach
        </select>

        <label for="title">Title:</label>
        <input type="text" name="title"  value="{{ $resource->title }}">

        <label for="author">Author:</label>
        <input type="text" name="author"  value="{{  $resource->author }}">

        <label for="recording">Recording:</label>
        <input type="text" name="recording"  value="{{ $resource->recording }}">

        <label for="presentation">Presentation:</label>
        <input type="text" name="presentation"  value="{{  $resource->presentation }}">

        <label for="repository">Repository:</label>
        <input type="text" name="repository"  value="{{ $resource->repository }}">

        <label for="extra_resource_id1">Extra Resource 1:</label>
        <select name="extra_resource_id1" >
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"{{ $resource->extra_res_id1 == $extraResource->id? 'selected':'' }}> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>

        <label for="extra_resource_id2">Extra Resource 2:</label>
        <select name="extra_resource_id2" >
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"{{ $resource->extra_res_id2 == $extraResource->id? 'selected':'' }}> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>

        <label for="extra_resource_id3">Extra Resource 3:</label>
        <select name="extra_resource_id3" >
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"{{ $resource->extra_res_id3 == $extraResource->id? 'selected':'' }}> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>

        <button type="submit" class="">Update</button>
        <a href="{{ route('resource.index') }}" class="">Cancelar</a>

    </form>
</body>
</html>