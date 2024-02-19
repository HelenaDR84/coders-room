<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Type</title>
</head>
<body>
    <form action="{{ route('type.store'),$type->id}}" method="POST">
        @csrf
        @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title"  value="{{$type->title}}">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="">Update</button>
        <a href="{{ route('type.index') }}" class="">Cancel</a>
    </form> 
</body>
</html>