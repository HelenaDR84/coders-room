<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extra Resources Index</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="pt-4 text-center">My Extra Resources</h1>
    @if($extraResources->isEmpty())
        <p>The table is empty</p>
    @else
        @foreach($extraResources as $extraResource)
            <div class="d-flex justify-content-between align-items-center mb-3 p-3">
                <div>
                    <h2>{{ $extraResource->extra_res_title }}</h2>
                    <p><strong>Link:</strong> {{ $extraResource->link }}</p>
                </div>
            </div>
        @endforeach
    @endif
</body>
</html>