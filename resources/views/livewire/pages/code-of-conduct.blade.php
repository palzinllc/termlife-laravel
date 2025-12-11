<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                Code of Conduct
            </h1>
            <p class="text-xl text-muted-foreground mb-16 text-center max-w-2xl mx-auto">
                Our commitment to ethical practices and professional standards
            </p>

            <x-ui.card class="border-2 shadow-emboss">
                <x-ui.card-content class="p-8 md:p-12 prose prose-lg max-w-none">
                    <h2 class="text-2xl font-bold mb-4 heading-gradient">Professional Standards</h2>
                    <p class="text-muted-foreground mb-6">
                        At CostPlus Life Insurance, we are committed to maintaining the highest standards of professional conduct 
                        and ethical behavior in all our dealings with clients, insurance providers, and partners.
                    </p>

                    <h2 class="text-2xl font-bold mb-4 heading-gradient">Our Commitments</h2>
                    <ul class="space-y-3 text-muted-foreground mb-6">
                        <li class="flex items-start gap-2">
                            <x-lucide-check-circle class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" />
                            <span>We will always act in the best interests of our clients</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <x-lucide-check-circle class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" />
                            <span>We will provide honest, accurate, and complete information</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <x-lucide-check-circle class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" />
                            <span>We will respect client privacy and confidentiality</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <x-lucide-check-circle class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" />
                            <span>We will comply with all applicable laws and regulations</span>
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold mb-4 heading-gradient">Contact Us</h2>
                    <p class="text-muted-foreground">
                        If you have any questions or concerns about our code of conduct, please contact us at info@costpluslife.ca
                    </p>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </div>

    <livewire:footer />
</div>
