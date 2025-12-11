<div class="min-h-screen bg-background">
    <livewire:navigation />
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-heading mb-6">
                    <x-lucide-scale class="w-10 h-10 text-white" />
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 text-emboss">
                    <span class="text-foreground">Term Life Insurance for </span>
                    <span class="heading-gradient">Divorce & Child Support</span>
                </h1>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    Meet your legal obligations and protect your children's financial future.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-6 mb-16">
                @php
                $benefits = [
                    ['icon' => 'baby', 'title' => 'Child Support Security', 'description' => 'Ensure child support payments continue even if something happens to you.'],
                    ['icon' => 'heart', 'title' => 'Alimony Protection', 'description' => 'Guarantee spousal support obligations are met for the required duration.'],
                    ['icon' => 'file-text', 'title' => 'Court Order Compliance', 'description' => 'Many divorce agreements require life insurance - meet your legal obligations.'],
                    ['icon' => 'shield', 'title' => 'Children\'s Future', 'description' => 'Protect your children\'s financial future regardless of custody arrangements.'],
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
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Fulfill Your Commitments</h2>
                    <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">Get coverage that meets legal requirements and protects your children.</p>
                    <x-ui.button size="lg" variant="secondary" class="text-lg px-8 py-6 bg-background text-foreground hover:bg-background/90">Get Your Free Quote</x-ui.button>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </div>
    <livewire:insurance-partners />
    <livewire:footer />
</div>
