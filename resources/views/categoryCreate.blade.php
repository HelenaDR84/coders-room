<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
<form action="{{ route('category.store') }}" method="POST">
        @csrf
        <label for="category_title">Category name:</label>
        <input name="category_title" type="text"/>
        @error('category_title')
        <div>{{$message}}</div>
        @enderror
        <button type="submit" class="">Crear</button>
        <a href="{{ route('category.index') }}" class="">Cancelar</a>

    </form>
</body>
</html>