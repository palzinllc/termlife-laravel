<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                What is Term Life Insurance?
            </h1>
            <p class="text-xl text-muted-foreground mb-12 text-center max-w-2xl mx-auto">
                Simple, affordable protection for your loved ones when they need it most
            </p>

            <div class="space-y-12">
                <x-ui.card class="border-2 hover:border-primary/30 transition-all shadow-emboss">
                    <x-ui.card-content class="p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-primary rounded-xl flex items-center justify-center">
                                <x-lucide-shield class="w-6 h-6 text-white" />
                            </div>
                            <h2 class="text-3xl font-bold bg-gradient-primary bg-clip-text text-transparent">
                                Understanding Term Life Coverage
                            </h2>
                        </div>
                        <p class="text-lg text-muted-foreground leading-relaxed">
                            Term life insurance provides financial protection for a specific period of time (the "term"), 
                            typically ranging from 10 to 30 years. If you pass away during the term, your beneficiaries 
                            receive a death benefit to help cover expenses like mortgage payments, education costs, 
                            and daily living expenses.
                        </p>
                    </x-ui.card-content>
                </x-ui.card>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                    $features = [
                        ['icon' => 'calendar', 'title' => 'Fixed Term', 'description' => 'Choose coverage for 10, 15, 20, or 30 years based on your needs'],
                        ['icon' => 'dollar-sign', 'title' => 'Affordable Premiums', 'description' => 'Lower cost compared to permanent life insurance options'],
                        ['icon' => 'shield', 'title' => 'Guaranteed Benefit', 'description' => 'Death benefit amount stays the same throughout the term'],
                        ['icon' => 'users', 'title' => 'Protects Loved Ones', 'description' => 'Provides financial security for your family\'s future'],
                    ];
                    @endphp
                    
                    @foreach($features as $feature)
                    <x-ui.card class="border-2 hover:border-primary/30 transition-all group shadow-emboss">
                        <x-ui.card-content class="p-6">
                            <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <x-dynamic-component :component="'lucide-' . $feature['icon']" class="w-8 h-8 text-white" />
                            </div>
                            <h3 class="text-xl font-semibold mb-3 text-foreground">{{ $feature['title'] }}</h3>
                            <p class="text-muted-foreground">{{ $feature['description'] }}</p>
                        </x-ui.card-content>
                    </x-ui.card>
                    @endforeach
                </div>

                <x-ui.card class="bg-secondary/30 border-2 border-primary/20 shadow-emboss">
                    <x-ui.card-content class="p-8">
                        <h2 class="text-3xl font-bold mb-4 heading-gradient">How It Works</h2>
                        <ol class="space-y-4">
                            <li class="flex gap-4">
                                <span class="w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center font-bold flex-shrink-0">1</span>
                                <div>
                                    <h3 class="font-semibold text-foreground mb-1">Choose Your Coverage</h3>
                                    <p class="text-muted-foreground">Select the coverage amount and term length that fits your needs</p>
                                </div>
                            </li>
                            <li class="flex gap-4">
                                <span class="w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center font-bold flex-shrink-0">2</span>
                                <div>
                                    <h3 class="font-semibold text-foreground mb-1">Pay Your Premium</h3>
                                    <p class="text-muted-foreground">Make regular premium payments (monthly, quarterly, or annually)</p>
                                </div>
                            </li>
                            <li class="flex gap-4">
                                <span class="w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center font-bold flex-shrink-0">3</span>
                                <div>
                                    <h3 class="font-semibold text-foreground mb-1">Stay Protected</h3>
                                    <p class="text-muted-foreground">Your beneficiaries receive the death benefit if you pass away during the term</p>
                                </div>
                            </li>
                        </ol>
                    </x-ui.card-content>
                </x-ui.card>

                <div class="mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">
                        <span class="bg-gradient-primary bg-clip-text text-transparent">Why Choose Term Life Insurance?</span>
                    </h2>
                    <p class="text-xl text-muted-foreground text-center mb-12 max-w-3xl mx-auto">
                        Discover the advantages that make term life insurance the smart choice for protecting your family's financial future.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @php
                        $advantages = [
                            ['icon' => 'dollar-sign', 'title' => 'Ensure Large Expenses Are Covered', 'description' => 'Your loved ones receive a tax-free payout to cover significant costs like mortgage, tuition, or other major expenses.'],
                            ['icon' => 'calendar', 'title' => 'Choose the Term That Fits Your Life', 'description' => 'Select a term length of 10, 20, or 30 years to align with your family\'s financial goals.'],
                            ['icon' => 'trending-up', 'title' => 'Easy Renewal Options', 'description' => 'Extend your coverage at the end of your term with flexible renewal options for continued peace of mind.'],
                            ['icon' => 'heart', 'title' => 'Budget-Friendly Protection', 'description' => 'Affordable premiums that stay the same throughout your chosen term, making it easy to safeguard your family.'],
                        ];
                        @endphp
                        
                        @foreach($advantages as $advantage)
                        <x-ui.card class="border-2 hover:border-primary/30 transition-all hover:shadow-soft group shadow-emboss">
                            <x-ui.card-content class="p-6">
                                <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                    <x-dynamic-component :component="'lucide-' . $advantage['icon']" class="w-8 h-8 text-white" />
                                </div>
                                <h3 class="text-xl font-semibold mb-3 text-foreground">{{ $advantage['title'] }}</h3>
                                <p class="text-muted-foreground">{{ $advantage['description'] }}</p>
                            </x-ui.card-content>
                        </x-ui.card>
                        @endforeach
                    </div>
                </div>

                <div class="text-center">
                    <x-ui.button size="lg" class="bg-gradient-primary shadow-glow hover:shadow-soft transition-all text-lg px-8 py-6">
                        Get Your Free Quote
                    </x-ui.button>
                </div>

                <x-ui.card class="border-2 border-primary/20 shadow-emboss">
                    <x-ui.card-content class="p-8">
                        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">
                            <span class="bg-gradient-primary bg-clip-text text-transparent">Frequently Asked Questions</span>
                        </h2>
                        @php
                        $faqs = [
                            ['question' => 'What is term life insurance?', 'answer' => 'Term life insurance provides financial protection for a specific period (term), typically 10-30 years. If you pass away during the term, your beneficiaries receive a death benefit to help cover expenses like mortgage payments, education costs, and daily living expenses.'],
                            ['question' => 'How much term life insurance do I need?', 'answer' => 'The amount of coverage you need depends on your financial obligations, income, debts, and family needs. A common rule of thumb is 10-12 times your annual income. Consider your mortgage, education costs, outstanding debts, and future living expenses for your family.'],
                            ['question' => 'What happens when my term ends?', 'answer' => 'When your term ends, you typically have several options: renew your policy (usually at a higher premium), convert it to a permanent policy, or let it expire. Some policies offer guaranteed renewal options regardless of your health status at that time.'],
                            ['question' => 'Can I cancel my term life insurance?', 'answer' => 'Yes, you can cancel your term life insurance policy at any time. However, term life insurance typically doesn\'t build cash value, so you won\'t receive a refund of premiums paid. Make sure you have alternative coverage in place before canceling if you still need protection.'],
                            ['question' => 'How are term life insurance premiums calculated?', 'answer' => 'Premiums are based on several factors including your age, health status, lifestyle habits (like smoking), coverage amount, and term length. Younger, healthier individuals typically pay lower premiums. The premiums remain fixed throughout your term, providing predictable costs.'],
                        ];
                        @endphp
                        <x-ui.accordion :items="$faqs" />
                    </x-ui.card-content>
                </x-ui.card>

            </div>
        </div>
    </div>

    <livewire:insurance-partners />
    <livewire:footer />
</div>
