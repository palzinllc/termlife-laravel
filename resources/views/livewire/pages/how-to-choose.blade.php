<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                How to Choose the Right Policy
            </h1>
            <p class="text-xl text-muted-foreground mb-16 text-center max-w-2xl mx-auto">
                Follow these steps to find the perfect term life insurance policy for your needs
            </p>

            <div class="space-y-8 mb-12">
                @php
                $steps = [
                    [
                        'title' => 'Calculate Your Coverage Needs',
                        'description' => 'Add up your financial obligations including mortgage, debts, income replacement needs, and future expenses like education costs.',
                        'tips' => [
                            'Multiply annual income by 10-12',
                            'Add outstanding mortgage balance',
                            'Include future education costs',
                            'Consider final expenses',
                        ],
                    ],
                    [
                        'title' => 'Determine Your Term Length',
                        'description' => 'Choose a term that covers your most critical financial obligations period.',
                        'tips' => [
                            '10 years: Short-term debt coverage',
                            '20 years: Until children are adults',
                            '30 years: Until retirement or mortgage payoff',
                            'Consider future insurability',
                        ],
                    ],
                    [
                        'title' => 'Compare Provider Ratings',
                        'description' => 'Look for financially stable insurance companies with strong ratings and good customer service.',
                        'tips' => [
                            'Check A.M. Best ratings (A or higher)',
                            'Read customer reviews',
                            'Verify licensing in Canada',
                            'Compare claim settlement ratios',
                        ],
                    ],
                    [
                        'title' => 'Review Policy Features',
                        'description' => 'Understand what\'s included and what optional riders might benefit you.',
                        'tips' => [
                            'Conversion options to permanent insurance',
                            'Renewability terms',
                            'Waiver of premium rider',
                            'Accelerated death benefit options',
                        ],
                    ],
                    [
                        'title' => 'Compare Quotes',
                        'description' => 'Get quotes from multiple providers to ensure you\'re getting the best rate for your coverage needs.',
                        'tips' => [
                            'Compare same coverage amounts',
                            'Check premium guarantee period',
                            'Understand payment options',
                            'Look for discounts (non-smoker, healthy lifestyle)',
                        ],
                    ],
                ];
                @endphp
                
                @foreach($steps as $index => $step)
                <x-ui.card class="border-2 hover:border-primary/30 transition-all shadow-emboss hover-lift animate-fade-up" style="animation-delay: {{ $index * 0.1 }}s">
                    <x-ui.card-content class="p-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary text-primary-foreground rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0 transition-transform duration-300 hover:rotate-12 hover:scale-110">
                                {{ $index + 1 }}
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-3 text-foreground">
                                    {{ $step['title'] }}
                                </h3>
                                <p class="text-lg text-muted-foreground mb-4">
                                    {{ $step['description'] }}
                                </p>
                                <ul class="space-y-2">
                                    @foreach($step['tips'] as $tip)
                                    <li class="flex items-start gap-2">
                                        <x-lucide-check-circle class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" />
                                        <span class="text-foreground">{{ $tip }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
                @endforeach
            </div>

            <x-ui.card class="bg-gradient-hero border-2 border-primary/20 mb-12 shadow-emboss hover-glow animate-fade-up">
                <x-ui.card-content class="p-8 md:p-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">
                        <span class="text-foreground">Important </span>
                        <span class="bg-gradient-primary bg-clip-text text-transparent">Considerations</span>
                    </h2>
                    
                    <div class="text-center mt-8 pt-6 border-t border-border">
                        <p class="text-lg text-muted-foreground mb-4">
                            Still have questions?
                        </p>
                        <x-ui.button variant="outline" size="sm" class="shadow-soft hover-glow">
                            Book A Meeting With Advisor
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <x-ui.card class="bg-gradient-primary text-primary-foreground border-0 shadow-glow overflow-hidden relative hover-lift animate-fade-up">
                <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
                <x-ui.card-content class="p-12 text-center relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Ready to Find Your Perfect Policy?
                    </h2>
                    <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">
                        Let us help you compare quotes from Canada's top providers and find the coverage that's right for you
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
