<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type Show</title>
</head>
<body>
    <a href="{{ route('type.index') }}" class="">Back</a>
    <div class="d-flex justify-content-between align-items-center mb-3 p-3">
        <div>
            <h2>{{ $type->title }}</h2>
            <a href="{{ route('type.edit',$type->id) }}" class="">Edit</a>
            <form method="POST" action="{{ route('type.destroy', $type->id) }}" onsubmit="return confirmDelete()"> 
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="">
            </form>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this type? Doing so will delete all associated resources.");
        }
    </script> 
</body>
</html>