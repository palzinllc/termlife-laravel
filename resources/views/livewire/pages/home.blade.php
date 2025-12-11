<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 bg-gradient-hero">
        <div class="container mx-auto max-w-6xl text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-up text-emboss">
                <span class="text-foreground">Compare Term Life Insurance </span>
                <span class="heading-gradient">At True Cost</span>
            </h1>
            <p class="text-xl md:text-2xl text-muted-foreground mb-8 animate-fade-up max-w-4xl mx-auto">
                Term Life at True Cost is fully online, fully transparent, and built for the next generation of Canadians.
            </p>
            <x-ui.button size="lg" class="text-lg px-8 py-6 animate-fade-up shadow-glow">
                Get Your Free Quote
            </x-ui.button>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 px-4 bg-gradient-hero relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-primary/5 to-transparent pointer-events-none"></div>
        <div class="container mx-auto max-w-6xl relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-16 text-center animate-fade-up">
                <span class="heading-gradient">How It Works?</span>
            </h2>
            
            <div class="grid md:grid-cols-3 gap-8 relative">
                <!-- Connection lines -->
                <div class="hidden md:block absolute top-1/4 left-1/3 w-1/3 h-0.5 bg-gradient-to-r from-primary/50 via-primary to-primary/50 animate-pulse"></div>
                <div class="hidden md:block absolute top-1/4 right-0 w-1/3 h-0.5 bg-gradient-to-r from-primary/50 via-primary to-primary/50 animate-pulse" style="animation-delay: 0.3s"></div>
                
                @php
                $steps = [
                    [
                        'number' => '01',
                        'title' => 'Share Details',
                        'description' => 'Quick questions, instant quotes from top providers.',
                        'icon' => 'users',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Compare Smart',
                        'description' => 'Clear pricing, transparent coverage, zero surprises.',
                        'icon' => 'trending-up',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Get Protected',
                        'description' => 'Apply online in minutes, secure your family\'s future.',
                        'icon' => 'shield',
                    ],
                ];
                @endphp
                
                @foreach($steps as $index => $step)
                <div class="relative group animate-fade-up" style="animation-delay: {{ $index * 0.2 }}s">
                    <div class="absolute inset-0 bg-gradient-heading opacity-0 group-hover:opacity-10 rounded-2xl blur-xl transition-opacity duration-500"></div>
                    <x-ui.card class="relative border-2 border-primary/20 shadow-glow hover:shadow-xl hover:border-primary/40 transition-all duration-500 hover:scale-105 bg-card/80 backdrop-blur-sm overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-heading opacity-5 rounded-full blur-3xl"></div>
                        <x-ui.card-header class="pb-4">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-heading opacity-20 rounded-2xl blur-md animate-pulse"></div>
                                    <div class="relative w-16 h-16 rounded-2xl bg-gradient-heading flex items-center justify-center shadow-glow">
                                        <x-dynamic-component :component="'lucide-' . $step['icon']" class="h-8 w-8 text-white" />
                                    </div>
                                </div>
                                <div class="text-6xl font-black bg-gradient-heading bg-clip-text text-transparent opacity-30">
                                    {{ $step['number'] }}
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold bg-gradient-heading bg-clip-text text-transparent">
                                {{ $step['title'] }}
                            </h3>
                        </x-ui.card-header>
                        <x-ui.card-content>
                            <p class="text-muted-foreground leading-relaxed">
                                {{ $step['description'] }}
                            </p>
                        </x-ui.card-content>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-heading transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    </x-ui.card>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose CostPlus Section -->
    <section class="py-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center animate-fade-up text-emboss">
                <span class="text-foreground">Why Choose </span>
                <span class="heading-gradient">CostPlus?</span>
            </h2>
            <p class="text-xl text-muted-foreground text-center mb-16 max-w-2xl mx-auto animate-fade-up">
                We've reimagined insurance comparison with transparency and simplicity at our core
            </p>
            
            <div class="grid gap-4 md:gap-6">
                @php
                $whyChooseUs = [
                    [
                        'icon' => 'zap',
                        'title' => 'No Sales Pressure',
                        'description' => '100% advisor-free quote-to-application flow.',
                    ],
                    [
                        'icon' => 'target',
                        'title' => 'True Price Integrity',
                        'description' => 'Same price across Canada, no hidden markups, no games.',
                    ],
                    [
                        'icon' => 'refresh-cw',
                        'title' => 'Convertibility Without Complexity',
                        'description' => 'Easy path to permanent insurance later.',
                    ],
                    [
                        'icon' => 'clock',
                        'title' => 'Time-Efficient',
                        'description' => 'A clean, frictionless experience that respects busy lifestyles.',
                    ],
                    [
                        'icon' => 'sparkles',
                        'title' => 'Purpose-Driven',
                        'description' => 'Mission built around accessibility, fairness, and financial empowerment.',
                    ],
                ];
                @endphp
                
                @foreach($whyChooseUs as $index => $item)
                <div class="group animate-fade-up" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="flex items-center gap-4 md:gap-6 p-4 md:p-6 rounded-2xl bg-card/50 border border-border/50 hover:border-primary/30 hover:bg-card/80 transition-all duration-300 hover:shadow-soft">
                        <div class="shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-xl bg-gradient-heading flex items-center justify-center shadow-glow group-hover:scale-110 transition-transform duration-300">
                            <x-dynamic-component :component="'lucide-' . $item['icon']" class="h-6 w-6 md:h-7 md:w-7 text-white" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg md:text-xl font-semibold text-foreground mb-1">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-muted-foreground text-sm md:text-base">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-hero">
        <div class="container mx-auto max-w-6xl text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-up text-emboss">
                <span class="text-foreground">Ready to Get </span>
                <span class="heading-gradient">Started?</span>
            </h2>
            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto animate-fade-up">
                Compare quotes from Canada's top insurance providers in minutes
            </p>
            <x-ui.button size="lg" class="text-lg px-8 py-6 animate-fade-up shadow-glow">
                Get Your Free Quote
            </x-ui.button>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-4 bg-gradient-hero">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center animate-fade-up text-emboss">
                <span class="text-foreground">Frequently Asked </span>
                <span class="heading-gradient">Questions</span>
            </h2>
            
            <div class="mb-8">
                <x-ui.card class="shadow-emboss hover-glow animate-fade-up">
                    <x-ui.card-content class="pt-6">
                        @php
                        $faqs = [
                            [
                                'question' => 'How much term life insurance do I need?',
                                'answer' => 'A good rule of thumb is 10-12 times your annual income. However, your specific needs depend on your debts, dependents, and financial goals. Our quote tool can help you determine the right coverage amount for your situation.'
                            ],
                            [
                                'question' => "What's the difference between 10, 20, and 30-year terms?",
                                'answer' => 'The term length determines how long your coverage lasts and your premiums remain fixed. Choose based on your coverage needs - for example, a 20-year term might align with your mortgage, while a 30-year term could cover you until retirement.'
                            ],
                            [
                                'question' => 'Do I need a medical exam?',
                                'answer' => 'Most term life insurance policies require a medical exam, but some policies offer simplified underwriting for smaller coverage amounts. The exam is typically quick, free, and can be done at your home or workplace.'
                            ],
                            [
                                'question' => 'Can I convert my term policy to permanent insurance?',
                                'answer' => 'Yes! Most term policies include a conversion option, allowing you to convert to permanent life insurance without a new medical exam, typically within the first 10-20 years of your policy.'
                            ],
                            [
                                'question' => 'How quickly can I get covered?',
                                'answer' => 'After completing your application and medical exam, most policies are approved within 2-6 weeks. Some simplified policies can be approved in just a few days.'
                            ],
                        ];
                        @endphp
                        <x-ui.accordion :items="$faqs" />
                    </x-ui.card-content>
                </x-ui.card>
            </div>

            <div class="text-center mt-12 animate-fade-up">
                <p class="text-lg text-muted-foreground mb-4">
                    Still have questions?
                </p>
                <x-ui.button variant="outline" size="sm" class="shadow-soft hover-glow">
                    Book A Meeting With Advisor
                </x-ui.button>
            </div>
        </div>
    </section>

    <livewire:insurance-partners />
    <livewire:footer />
</div>
