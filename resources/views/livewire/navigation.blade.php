<nav class="fixed top-0 left-0 right-0 z-50 bg-background/95 backdrop-blur-sm border-b border-border">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="CostPlus Life Insurance" class="h-12">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-8">
                @foreach($navLinks as $link)
                    <a href="{{ $link['path'] }}" 
                       class="text-sm font-medium transition-colors hover:text-primary {{ request()->is(ltrim($link['path'], '/')) ? 'text-primary' : 'text-foreground/80' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                
                <!-- Use Cases Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" 
                            class="flex items-center gap-1 text-sm font-medium transition-colors hover:text-primary {{ request()->is('who-needs-this*') || request()->is('use-cases/*') ? 'text-primary' : 'text-foreground/80' }}">
                        Who Needs This?
                        <x-lucide-chevron-down class="w-4 h-4" />
                    </button>
                    <div x-show="open" 
                         @click.outside="open = false"
                         x-transition
                         class="absolute right-0 mt-2 w-56 bg-popover border border-border rounded-md shadow-lg py-1 z-50">
                        <a href="/who-needs-this" 
                           class="block px-4 py-2 text-sm hover:bg-accent hover:text-accent-foreground font-semibold {{ request()->is('who-needs-this') ? 'text-primary' : '' }}">
                            Overview
                        </a>
                        <div class="my-1 border-t border-border"></div>
                        @foreach($useCases as $useCase)
                            <a href="{{ $useCase['path'] }}" 
                               class="block px-4 py-2 text-sm hover:bg-accent hover:text-accent-foreground {{ request()->is(ltrim($useCase['path'], '/')) ? 'text-primary' : '' }}">
                                {{ $useCase['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <button class="bg-gradient-primary shadow-soft hover:shadow-glow transition-all px-6 py-2 rounded-md text-white font-medium">
                    Get Your Quote
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button wire:click="toggleMenu" class="lg:hidden p-2 text-foreground">
                @if($isOpen)
                    <x-lucide-x class="w-6 h-6" />
                @else
                    <x-lucide-menu class="w-6 h-6" />
                @endif
            </button>
        </div>

        <!-- Mobile Navigation -->
        @if($isOpen)
            <div class="lg:hidden py-4 border-t border-border animate-fade-in">
                @foreach($navLinks as $link)
                    <a href="{{ $link['path'] }}" 
                       wire:click="toggleMenu"
                       class="block py-3 text-sm font-medium transition-colors {{ request()->is(ltrim($link['path'], '/')) ? 'text-primary' : 'text-foreground/80' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                
                <!-- Mobile Use Cases -->
                <button wire:click="toggleUseCases"
                        class="flex items-center justify-between w-full py-3 text-sm font-medium transition-colors {{ request()->is('who-needs-this*') || request()->is('use-cases/*') ? 'text-primary' : 'text-foreground/80' }}">
                    Who Needs This?
                    <x-lucide-chevron-down class="w-4 h-4 {{ $useCasesOpen ? 'rotate-180' : '' }} transition-transform" />
                </button>
                @if($useCasesOpen)
                    <div class="pl-4 space-y-2">
                        <a href="/who-needs-this"
                           wire:click="toggleMenu"
                           class="block py-2 text-sm font-semibold transition-colors {{ request()->is('who-needs-this') ? 'text-primary' : 'text-foreground/60' }}">
                            Overview
                        </a>
                        @foreach($useCases as $useCase)
                            <a href="{{ $useCase['path'] }}"
                               wire:click="toggleMenu"
                               class="block py-2 text-sm transition-colors {{ request()->is(ltrim($useCase['path'], '/')) ? 'text-primary' : 'text-foreground/60' }}">
                                {{ $useCase['name'] }}
                            </a>
                        @endforeach
                    </div>
                @endif
                
                <button class="w-full mt-4 bg-gradient-primary shadow-soft px-6 py-2 rounded-md text-white font-medium">
                    Get Your Quote
                </button>
            </div>
        @endif
    </div>
</nav>
