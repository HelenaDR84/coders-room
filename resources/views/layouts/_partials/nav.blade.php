<header>
    <nav class="bg-purple-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="text-white text-lg font-bold">
                <img src="{{ asset('images/LogoCodersRoom.png') }}" alt="Logo" class="w-14 h-14 mr-2 inline rounded-md">
                Coder's Room
            </a>
    
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-white font-semibold">Home</a>
                <a href="{{ route('resource.index') }}" class="text-white font-semibold">Resources</a>
                <a href="{{ route('type.index') }}" class="text-white font-semibold">Types</a>
                <a href="{{ route('category.index') }}" class="text-white font-semibold">Categories</a>
                <a href="{{ route('extraResource.index') }}" class="text-white font-semibold">Extra Resources</a>
            </div>
        </div>
    </nav>
</header>