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
                <a href="{{ route('type.edit',$type->id) }}" class="">Edit</a>
                <a href="{{ route('type.show',$type->id) }}" class="">View Details</a>
                <form method="POST" action="{{ route('type.destroy', $type->id) }}" onsubmit="return confirmDelete()"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="">
                </form>
            </div>
        @endforeach  
     @endif    
     <a href="{{ route('type.create') }}" class="mt-4 text-blue-500 p-3">Add Type</a>  
     <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this type? Doing so will delete all associated resources.");
        }
    </script> 
</body>
</html>