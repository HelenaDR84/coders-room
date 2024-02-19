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
            </div>
        </div>
</body>
</html>