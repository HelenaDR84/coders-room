<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <a href="{{ route('resource.index') }}" class="">Back</a>
    <div class="d-flex justify-content-between align-items-center mb-3 p-3">
        <div>
            <h2>{{ $resource->title }}</h2>
            <p><strong>Author:</strong> {{ $resource->author }}</p>
            <p><strong>Type:</strong> {{ $resource->type->title }}</p>
            <p><strong>Category:</strong> {{ $resource->category->category_title }}</p>
            @if($resource->extraResource1)
            <p><strong>Extra Resource 1:</strong> {{ $resource->extraResource1->extra_res_title }}</p>
            @endif
            @if($resource->extraResource2)
            <p><strong>Extra Resource 2:</strong> {{ $resource->extraResource2->extra_res_title }}</p>
            @endif
            @if($resource->extraResource3)
            <p><strong>Extra Resource 3:</strong> {{ $resource->extraResource3->extra_res_title }}</p>
            @endif
            <a href="{{ route('resource.edit',$resource->id) }}" class="">Edit</a>
            <form method="POST" action="{{ route('resource.destroy', $resource->id) }}"> 
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="">
            </form>
        </div>
    </div>
</body>
</html>