<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Show</title>
</head>
<body>
    <a href="{{ route('category.index') }}" class="">Back</a>
        <div class="d-flex justify-content-between align-items-center mb-3 p-3">
            <div>
                <h2>{{ $category->category_title }}</h2>
                <a href="{{ route('category.edit',$category->id) }}" class="">Edit</a>
            <form method="POST" action="{{ route('category.destroy', $category->id) }}"> 
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="">
            </form>
            </div>
        </div>
</body>
</html>