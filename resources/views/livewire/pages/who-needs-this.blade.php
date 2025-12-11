<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                Who Needs Term Life Insurance?
            </h1>
            <p class="text-xl text-muted-foreground mb-16 text-center max-w-3xl mx-auto">
                Term life insurance is essential for anyone who has people depending on their income. 
                If any of these scenarios apply to you, you should consider getting covered.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                @php
                $scenarios = [
                    ['icon' => 'baby', 'title' => 'New Parents', 'description' => 'Protect your growing family and ensure your children\'s future is secure, even if the unexpected happens.', 'link' => '/use-cases/families'],
                    ['icon' => 'home', 'title' => 'Homeowners', 'description' => 'Make sure your mortgage is covered so your family can keep their home no matter what.', 'link' => '/use-cases/homeowners'],
                    ['icon' => 'graduation-cap', 'title' => 'Parents Planning for Education', 'description' => 'Ensure your children can afford college or university, even if you\'re not there to provide for them.', 'link' => '/use-cases/families'],
                    ['icon' => 'briefcase', 'title' => 'Primary Income Earners', 'description' => 'Replace your income to maintain your family\'s standard of living and cover daily expenses.', 'link' => '/use-cases/singles-young-pros'],
                    ['icon' => 'heart', 'title' => 'Married Couples', 'description' => 'Protect your spouse from financial hardship and ensure they can maintain their lifestyle.', 'link' => '/use-cases/families'],
                    ['icon' => 'trending-up', 'title' => 'Business Owners', 'description' => 'Cover business debts and provide for your family while ensuring business continuity.', 'link' => '/use-cases/business-owners'],
                ];
                @endphp
                
                @foreach($scenarios as $scenario)
                <a href="{{ $scenario['link'] }}">
                    <x-ui.card class="border-2 hover:border-primary/30 transition-all hover:shadow-soft group shadow-emboss h-full cursor-pointer">
                        <x-ui.card-content class="p-6">
                            <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <div class="w-8 h-8 text-white flex items-center justify-center">
                                    <x-dynamic-component :component="'lucide-' . $scenario['icon']" class="w-8 h-8" />
                                </div>
                            </div>
                            <h3 class="text-xl font-semibold mb-3 text-foreground">
                                {{ $scenario['title'] }}
                            </h3>
                            <p class="text-muted-foreground">
                                {{ $scenario['description'] }}
                            </p>
                        </x-ui.card-content>
                    </x-ui.card>
                </a>
                @endforeach
            </div>

            <x-ui.card class="bg-gradient-hero border-2 border-primary/20 mb-12 shadow-emboss">
                <x-ui.card-content class="p-8 md:p-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">
                        <span class="text-foreground">Common Questions About </span>
                        <span class="bg-gradient-primary bg-clip-text text-transparent">Coverage Needs</span>
                    </h2>
                    
                    @php
                    $faqs = [
                        ['question' => 'How much coverage do I need?', 'answer' => 'A common rule of thumb is 10-12 times your annual income. However, consider factors like your mortgage, debts, children\'s education costs, and your family\'s ongoing expenses.'],
                        ['question' => 'What if I\'m single with no dependents?', 'answer' => 'You might still need coverage to cover final expenses, outstanding debts, or to leave something for aging parents or siblings. Plus, getting coverage while you\'re young and healthy locks in lower rates.'],
                        ['question' => 'What term length should I choose?', 'answer' => 'Choose a term that covers your major financial obligations. For example, if your youngest child is 5 years old, a 20-year term would cover them until they\'re 25 and likely financially independent.'],
                    ];
                    @endphp
                    <x-ui.accordion :items="$faqs" />
                </x-ui.card-content>
            </x-ui.card>

            <x-ui.card class="bg-gradient-primary text-primary-foreground border-0 shadow-glow overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
                <x-ui.card-content class="p-12 text-center relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Ready to Protect Your Loved Ones?
                    </h2>
                    <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">
                        Get a personalized quote in minutes and find the perfect coverage for your unique situation
                    </p>
                    <x-ui.button size="lg" variant="secondary" class="text-lg px-8 py-6 bg-background text-foreground hover:bg-background/90 shadow-soft">
                        Get Your Free Quote
                    </x-ui.button>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </div>

    <livewire:insurance-partners />
    <livewire:footer />
</div>
