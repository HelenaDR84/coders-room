<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Types</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="pt-4 text-center">My Types</h1>
    @if($types->isEmpty())
        <p>The table is empty</p>
    @else
        @foreach($types as $type)
            <div class="d-flex justify-content-between align-items-center mb-3 p-3">
                <h2>{{ $type->title }}</h2>
            
            </div>
        @endforeach  
     @endif    
     <a href="{{ route('type.create') }}" class="mt-4 text-blue-500 p-3">Add Type</a>   
</body>
</html>