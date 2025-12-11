<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                About CostPlus Life Insurance
            </h1>
            <p class="text-xl text-muted-foreground mb-4 text-center max-w-2xl mx-auto">
                Making term life insurance simple, affordable, and accessible for all Canadians
            </p>
            <p class="text-sm text-muted-foreground mb-16 text-center italic">
                Owned & Operated by Immunis Financial Brokers Inc.
            </p>

            <x-ui.card class="border-2 mb-12 shadow-emboss">
                <x-ui.card-content class="p-8 md:p-12">
                    <h2 class="text-3xl font-bold mb-6 heading-gradient">Our Story</h2>
                    <div class="space-y-4 text-lg text-muted-foreground">
                        <p>
                            CostPlus Life Insurance was founded with a simple mission: to make finding affordable 
                            term life insurance as easy as possible for Canadian families.
                        </p>
                        <p>
                            We saw too many people confused by complex insurance options, overwhelmed by pushy sales 
                            tactics, or paying more than they should for coverage. We knew there had to be a better way.
                        </p>
                        <p>
                            Today, we help thousands of Canadians compare quotes from top insurance providers, 
                            understand their options, and find the right coverage for their unique needs - all online, 
                            at their own pace, with no pressure.
                        </p>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center bg-gradient-heading bg-clip-text text-transparent">
                    Our Values
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                    $values = [
                        ['icon' => 'target', 'title' => 'Transparency', 'description' => 'No hidden fees, no confusing jargon. We believe in honest, straightforward information.'],
                        ['icon' => 'users', 'title' => 'Customer First', 'description' => 'Your needs guide everything we do. We\'re here to help you find the right coverage, not to push a sale.'],
                        ['icon' => 'award', 'title' => 'Excellence', 'description' => 'We partner only with top-rated Canadian insurance providers you can trust.'],
                        ['icon' => 'heart', 'title' => 'Compassion', 'description' => 'We understand that life insurance is about protecting the people you love most.'],
                    ];
                    @endphp
                    
                    @foreach($values as $value)
                    <x-ui.card class="border-2 hover:border-primary/30 transition-all group shadow-emboss">
                        <x-ui.card-content class="p-6">
                            <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <div class="w-8 h-8 text-white flex items-center justify-center">
                                    <x-dynamic-component :component="'lucide-' . $value['icon']" class="w-8 h-8" />
                                </div>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-foreground">
                                {{ $value['title'] }}
                            </h3>
                            <p class="text-muted-foreground">
                                {{ $value['description'] }}
                            </p>
                        </x-ui.card-content>
                    </x-ui.card>
                    @endforeach
                </div>
            </div>

            <x-ui.card class="bg-gradient-hero border-2 border-primary/20 mb-12 shadow-emboss">
                <x-ui.card-content class="p-8 md:p-12">
                    <h2 class="text-3xl font-bold mb-8 text-center">
                        <span class="text-foreground">Why Choose </span>
                        <span class="bg-gradient-primary bg-clip-text text-transparent">CostPlus Life?</span>
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h3 class="text-xl font-semibold mb-3 text-foreground">Transparent Pricing</h3>
                            <p class="text-muted-foreground">
                                We believe in complete transparency. No hidden fees, no surprises. You'll always know exactly what you're paying for and why.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3 text-foreground">Expert Guidance</h3>
                            <p class="text-muted-foreground">
                                Our team of licensed insurance professionals is here to help you understand your options and make informed decisions about your coverage.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3 text-foreground">Multiple Providers</h3>
                            <p class="text-muted-foreground">
                                We work with Canada's top insurance companies to ensure you get the best coverage at the most competitive rates.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3 text-foreground">Simple Process</h3>
                            <p class="text-muted-foreground">
                                Get quotes online in minutes, compare options side-by-side, and apply when you're ready. No pressure, no hassle.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center pt-8 border-t border-border">
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">100%</div>
                            <p class="text-muted-foreground">Free Quote Service</p>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">10+</div>
                            <p class="text-muted-foreground">Top Canadian Providers</p>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">24/7</div>
                            <p class="text-muted-foreground">Online Access</p>
                        </div>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <div class="mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">
                    <span class="text-foreground">Frequently Asked </span>
                    <span class="bg-gradient-primary bg-clip-text text-transparent">Questions</span>
                </h2>
                <x-ui.card class="border-2 border-primary/20 shadow-emboss">
                    <x-ui.card-content class="p-8">
                        @php
                        $faqs = [
                            ['question' => 'What makes CostPlus Life different from other insurance brokers?', 'answer' => 'We focus exclusively on term life insurance, making us specialists in this area. Our transparent pricing model means no hidden fees, and we work with multiple top-rated Canadian providers to ensure you get the best rate possible.'],
                            ['question' => 'Is there really no cost to use your service?', 'answer' => 'Yes! Our quote comparison service is completely free. We\'re compensated by the insurance companies when you purchase a policy, but this doesn\'t affect your premium - you pay the same price whether you buy directly or through us.'],
                            ['question' => 'How do I know if I can trust the insurance companies you work with?', 'answer' => 'We only partner with insurance companies that have strong financial ratings (A or higher from A.M. Best), are licensed to operate in Canada, and have proven track records of paying claims. All our partners are established, reputable companies.'],
                            ['question' => 'What kind of support do you provide after I purchase a policy?', 'answer' => 'Our relationship doesn\'t end when you buy a policy. We\'re here to help with policy questions, beneficiary updates, coverage reviews, and claims assistance. Think of us as your long-term insurance partner.'],
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
