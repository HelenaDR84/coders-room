<header>
    <nav class="bg-violet-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="text-white text-lg font-bold">
                <img src="ruta/al/logo.png" alt="Logo" class="w-8 h-8 mr-2 inline">
                MyLogo
            </a>
    
            <div class="space-x-4">
                <a href="{{ route('resource.index') }}" class="text-white">Resources</a>
                <a href="{{ route('type.index') }}" class="text-white">Types</a>
                <a href="{{ route('category.index') }}" class="text-white">Categories</a>
                <a href="{{ route('extraResource.index') }}" class="text-white">Extra Resources</a>
            </div>
        </div>
    </nav>
</header>