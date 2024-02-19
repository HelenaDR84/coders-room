<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Extra Resource</title>
</head>
<body>
    <a href="{{ route('extraResource.index') }}" class="">Back</a>
    <div class="d-flex justify-content-between align-items-center mb-3 p-3">
        <div>
            <h2>{{ $extraResource->extra_res_title }}</h2>
            <p><strong>Link:</strong> {{ $extraResource->link }}</p>
            <a href="{{ route('extraResource.edit',$extraResource->id) }}" class="">Edit</a>
            <form method="POST" action="{{ route('extraResource.destroy', $extraResource->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="">
            </form>
        </div>
    </div>
</body>
</html>
