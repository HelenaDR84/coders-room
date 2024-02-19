<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type Create</title>
</head>
<body>
    <form action="{{ route('type.store') }}" method="POST">
        @csrf
    <label for="title">Title:</label>
    <input type="text" name="title"  value="{{ old('title') }}">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="">Create</button>
        <a href="{{ route('type.index') }}" class="">Cancel</a>
    </form>
</body>
</html>