<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="pt-4 text-center">My Category</h1>
        @if($categories->isEmpty())
            <p>The table is empty</p>
        @else
            @foreach($categories as $category)
                <div class="d-flex justify-content-between align-items-center mb-3 p-3">
                    <h2>{{ $category->category_title }}</h2>
                    <a href="{{ route('category.edit',$category->id) }}" class="">Edit</a>
                    <a href="{{ route('category.show',$category->id) }}" class="">View Details</a>
                    
                </div>
                
            @endforeach
        @endif
    <a href="{{ route('category.create') }}" class="">Add Category</a>
</body>
</html>