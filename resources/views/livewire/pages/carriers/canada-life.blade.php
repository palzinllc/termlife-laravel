<div class="min-h-screen flex flex-col">
    <livewire:navigation />
    
    <section class="pt-32 pb-20 px-4 bg-gradient-hero">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center bg-gradient-heading bg-clip-text text-transparent">
                Canada Life My Term™: Clear Policy Details on CostPlus
            </h1>
            
            <div class="mb-8">
                <x-ui.card class="shadow-emboss">
                    <x-ui.card-content class="pt-6">
                        <div class="flex items-center gap-3 mb-4">
                            <x-lucide-trending-up class="h-8 w-8 text-primary" />
                            <div>
                                <h3 class="font-semibold text-lg">Financial Strength</h3>
                                <p class="text-sm text-muted-foreground">Founded: 1847 (Canada's first domestic life insurer)</p>
                                <p class="text-sm text-muted-foreground">Financial Rating: A+ (Superior) from A.M. Best</p>
                            </div>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
            </div>

            <p class="text-lg text-muted-foreground text-center mb-8">
                Canada Life is a cornerstone of the Canadian insurance market, known for its stability and broad product lineup. At CostPlus, we feature Canada Life's Term Life policies, like My Term™, so you can easily compare their guaranteed premiums and conversion options with radical clarity.
            </p>
        </div>
    </section>

    <section class="py-20 px-4">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center bg-gradient-heading bg-clip-text text-transparent">
                Key Features of Canada Life Term Insurance
            </h2>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                @php
                $features = [
                    ['icon' => 'shield', 'title' => 'Term Flexibility', 'description' => 'My Term™ offers highly flexible term lengths, from 5 up to 50 years, allowing coverage to precisely match financial obligations like your mortgage or your children\'s dependency. Premiums are guaranteed not to change during the initial term.'],
                    ['icon' => 'check-circle', 'title' => 'Conversion Privilege', 'description' => 'Their policies offer the option to convert your Term coverage into a Permanent Life policy until age 70, without needing new proof of health. This is a key flexibility feature we clearly highlight on your comparison results.'],
                    ['icon' => 'users', 'title' => 'Rider Options', 'description' => 'Customize your protection with riders like the Disability Waiver of Premium or a Child\'s Term Life Insurance rider, which offers increasing coverage for your children under one policy.'],
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
                        CostPlus shows you Canada Life's actual Term Life rates with zero markup. See how their stability compares to the market average now.
                    </p>
                    <x-ui.button size="lg" class="bg-gradient-primary hover:opacity-90 transition-opacity">
                        Compare Canada Life Quotes
                    </x-ui.button>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </section>

    <livewire:insurance-partners />
    <livewire:footer />
</div>
