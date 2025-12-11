<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="flex min-h-[calc(100vh-80px)] items-center justify-center px-4">
        <div class="text-center">
            <h1 class="mb-4 text-8xl font-bold bg-gradient-heading bg-clip-text text-transparent animate-fade-in">404</h1>
            <p class="mb-4 text-2xl md:text-3xl font-semibold text-foreground animate-fade-up">Oops! Page Not Found</p>
            <p class="mb-8 text-lg text-muted-foreground max-w-md mx-auto animate-fade-up">
                The page you're looking for doesn't exist or has been moved.
            </p>
            <x-ui.button href="/" class="animate-fade-up shadow-glow bg-gradient-primary">
                <x-lucide-home class="w-5 h-5 mr-2" />
                Return to Home
            </x-ui.button>
        </div>
    </div>

    <livewire:footer />
</div>
