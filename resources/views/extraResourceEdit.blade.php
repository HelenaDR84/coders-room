<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Extra Resource</title>
</head>
<body>
    <form action="{{ route('extraResource.update', $extraResource->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="extra_res_title">Title of extra resource:</label>
        <input type="text" name="extra_res_title"  value="{{ $extraResource->extra_res_title }}">
        @error('extra_res_title')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="link">Link:</label>
        <input type="text" name="link"  value="{{ $extraResource->link }}">
        @error('link')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="">Update</button>
        <a href="{{ route('extraResource.index') }}" class="">Cancel</a>

    </form>
</body>
</html>
