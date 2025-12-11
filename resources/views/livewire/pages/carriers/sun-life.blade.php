<div class="min-h-screen flex flex-col">
    <livewire:navigation />
    
    <section class="pt-32 pb-20 px-4 bg-gradient-hero">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center bg-gradient-heading bg-clip-text text-transparent">
                Sun Life Sun Term: Clear Policy Details on CostPlus
            </h1>
            
            <div class="mb-8">
                <x-ui.card class="shadow-emboss">
                    <x-ui.card-content class="pt-6">
                        <div class="flex items-center gap-3 mb-4">
                            <x-lucide-trending-up class="h-8 w-8 text-primary" />
                            <div>
                                <h3 class="font-semibold text-lg">Financial Strength</h3>
                                <p class="text-sm text-muted-foreground">Founded: 1865</p>
                                <p class="text-sm text-muted-foreground">Financial Rating: AA- (Very Strong) from A.M. Best</p>
                            </div>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
            </div>

            <p class="text-lg text-muted-foreground text-center mb-8">
                Sun Life Financial is a leading international financial services organization with a strong presence in Canada. At CostPlus, we provide clear comparisons of Sun Life's Term Life products including their competitive rates and flexible coverage options.
            </p>
        </div>
    </section>

    <section class="py-20 px-4">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center bg-gradient-heading bg-clip-text text-transparent">
                Key Features of Sun Life Term Insurance
            </h2>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                @php
                $features = [
                    ['icon' => 'shield', 'title' => 'Term Flexibility', 'description' => 'Flexible term lengths to match your financial obligations. Premiums remain guaranteed for the duration of your chosen term.'],
                    ['icon' => 'check-circle', 'title' => 'Conversion Options', 'description' => 'Convert your term policy to permanent insurance without new medical underwriting, giving you flexibility as your needs change.'],
                    ['icon' => 'users', 'title' => 'Additional Riders', 'description' => 'Customize your coverage with optional riders for disability, critical illness, and child protection.'],
                ];
                @endphp
                
                @foreach($features as $feature)
                <x-ui.card class="shadow-emboss hover:shadow-lg transition-shadow">
                    <x-ui.card-header>
                        <div class="w-16 h-16 rounded-2xl bg-gradient-primary flex items-center justify-center mb-4 shadow-glow">
                            <x-dynamic-component :component="'lucide-' . $feature['icon']" class="h-8 w-8 text-primary-foreground" />
                        </div>
                        <h3 class="text-xl font-semibold">{{ $feature['title'] }}</h3>
                    </x-ui.card-header>
                    <x-ui.card-content>
                        <p class="text-base leading-relaxed text-muted-foreground">{{ $feature['description'] }}</p>
                    </x-ui.card-content>
                </x-ui.card>
                @endforeach
            </div>

            <x-ui.card class="bg-gradient-hero border-primary/20 shadow-emboss">
                <x-ui.card-content class="pt-8 pb-8 text-center">
                    <h3 class="text-2xl font-bold mb-4 bg-gradient-heading bg-clip-text text-transparent">
                        CostPlus Advantage
                    </h3>
                    <p class="text-lg mb-6 text-muted-foreground max-w-2xl mx-auto">
                        CostPlus shows you Sun Life's actual Term Life rates with zero markup. Compare their rates to find the best coverage for your needs.
                    </p>
                    <x-ui.button size="lg" class="bg-gradient-primary hover:opacity-90 transition-opacity">
                        Compare Sun Life Quotes
                    </x-ui.button>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </section>

    <livewire:insurance-partners />
    <livewire:footer />
</div>
