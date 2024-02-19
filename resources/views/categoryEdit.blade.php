<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category edit</title>
</head>
<body>
    <form action="{{ route('category.update',$category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="category_title">Category name:</label>
            <input name="category_title" type="text" value="{{$category->category_title}}"/>
            @error('category_title')
            <div>{{$message}}</div>
            @enderror
            <button type="submit" class="">Update</button>
            <a href="{{ route('category.index') }}" class="">Cancelar</a>
            

    </form>
</body>
</html>