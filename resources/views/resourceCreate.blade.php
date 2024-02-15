<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="">

        <label for="type_id">Type:</label>
        <select name="type_id" >
            <option value="" selected disabled>Seleccione un tipo</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}">{{ $type->title }}</option>
            @endforeach
        </select>

        <label for="category_id">Category:</label>
        <select name="category_id" >
            <option value="" selected disabled>Seleccione una categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->category_title }}</option>
            @endforeach
        </select>

        <label for="title">Title:</label>
        <input type="text" name="title"  value="{{ old('title') }}">

        <label for="author">Author:</label>
        <input type="text" name="author"  value="{{ old('author') }}">

        <label for="recording">Recording:</label>
        <input type="text" name="recording"  value="{{ old('recording') }}">

        <label for="presentation">Presentation:</label>
        <input type="text" name="presentation"  value="{{ old('presentation') }}">

        <label for="repository">Repository:</label>
        <input type="text" name="repository"  value="{{ old('repository') }}">

        <label for="extra_res1">Extra Resource 1:</label>
        <select name="extra_res1" >
            <option value="" selected disabled></option>
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>

        <label for="extra_res2">Extra Resource 2:</label>
        <select name="extra_res2" >
            <option value="" selected disabled></option>
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>

        <label for="extra_res3">Extra Resource 3:</label>
        <select name="extra_res3" >
            <option value="" selected disabled></option>
            @foreach ($extraResources as $extraResource)
                <option value="{{ $extraResource->id }}"> {{ $extraResource->extra_res_title }}</option>
            @endforeach
        </select>

        <button type="submit" class="">Crear</button>
        <a href="{{ route('resource.index') }}" class="">Cancelar</a>

    </form>
</body>
</html>