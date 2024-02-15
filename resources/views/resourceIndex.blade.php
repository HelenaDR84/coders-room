<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resources</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="pt-4 text-center">My Resources</h1>
    @if($resources->isEmpty())
        <p>The table is empty</p>
    @else
        @foreach($resources as $resource)
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2>{{ $resource->title }}</h2>
                    <p><strong>Author:</strong> {{ $resource->author }}</p>
                    <p><strong>Type:</strong> {{ $resource->type->title }}</p>
                    <p><strong>Category:</strong> {{ $resource->category->category_title }}</p>
                    <p><strong>Extra Resource 1:</strong> {{ $resource->extraResource1->extra_res_title }}</p>
                </div>
            </div>
        @endforeach
    @endif

</body>
</html>