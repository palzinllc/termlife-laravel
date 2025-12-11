<div class="min-h-screen bg-background">
    <livewire:navigation />
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-heading mb-6">
                    <x-lucide-globe class="w-10 h-10 text-white" />
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 text-emboss">
                    <span class="text-foreground">Term Life Insurance for </span>
                    <span class="heading-gradient">Newcomers & Immigrants</span>
                </h1>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    Build your new life in Canada with the security of life insurance protection.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-6 mb-16">
                @php
                $benefits = [
                    ['icon' => 'home', 'title' => 'New Start Protection', 'description' => 'Protect your family as you build your new life in Canada.'],
                    ['icon' => 'dollar-sign', 'title' => 'Affordable Coverage', 'description' => 'Get coverage even if you\'re still establishing your financial history.'],
                    ['icon' => 'users', 'title' => 'Family Support', 'description' => 'Support family members back home or those joining you in Canada.'],
                    ['icon' => 'shield', 'title' => 'Immigration Process', 'description' => 'Some visa categories recommend or require proof of life insurance coverage.'],
                ];
                @endphp
                @foreach($benefits as $benefit)
                <x-ui.card class="border-2 hover:border-primary/30 transition-all hover:shadow-soft group">
                    <x-ui.card-content class="p-6 flex gap-4">
                        <div class="shrink-0 w-14 h-14 rounded-xl bg-gradient-heading flex items-center justify-center group-hover:scale-110 transition-transform">
                            <x-dynamic-component :component="'lucide-' . $benefit['icon']" class="w-7 h-7 text-white" />
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2 text-foreground">{{ $benefit['title'] }}</h3>
                            <p class="text-muted-foreground">{{ $benefit['description'] }}</p>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
                @endforeach
            </div>
            <x-ui.card class="bg-gradient-primary text-primary-foreground border-0 shadow-glow">
                <x-ui.card-content class="p-12 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Welcome to Canada</h2>
                    <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">Start your Canadian journey with comprehensive life insurance protection.</p>
                    <x-ui.button size="lg" variant="secondary" class="text-lg px-8 py-6 bg-background text-foreground hover:bg-background/90">Get Your Free Quote</x-ui.button>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </div>
    <livewire:insurance-partners />
    <livewire:footer />
</div>
