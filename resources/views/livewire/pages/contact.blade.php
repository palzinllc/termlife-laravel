<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                Get in Touch
            </h1>
            <p class="text-xl text-muted-foreground mb-16 text-center max-w-2xl mx-auto">
                Have questions? We're here to help you find the perfect coverage for your needs
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <x-ui.card class="border-2 shadow-emboss">
                    <x-ui.card-content class="p-8">
                        <h2 class="text-2xl font-bold mb-6 heading-gradient">Send Us a Message</h2>
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">Full Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border-2 border-border focus:border-primary focus:outline-none bg-background" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">Email Address</label>
                                <input type="email" class="w-full px-4 py-3 rounded-lg border-2 border-border focus:border-primary focus:outline-none bg-background" placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">Phone Number</label>
                                <input type="tel" class="w-full px-4 py-3 rounded-lg border-2 border-border focus:border-primary focus:outline-none bg-background" placeholder="(123) 456-7890">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">Subject</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border-2 border-border focus:border-primary focus:outline-none bg-background" placeholder="How can we help?">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-foreground mb-2">Message</label>
                                <textarea rows="5" class="w-full px-4 py-3 rounded-lg border-2 border-border focus:border-primary focus:outline-none bg-background resize-none" placeholder="Tell us more about your needs..."></textarea>
                            </div>
                            <x-ui.button class="w-full bg-gradient-primary shadow-soft hover:shadow-glow transition-all">
                                Send Message
                            </x-ui.button>
                        </form>
                    </x-ui.card-content>
                </x-ui.card>

                <div class="space-y-6">
                    @php
                    $contactInfo = [
                        ['icon' => 'phone', 'title' => 'Phone', 'line1' => '1-800-COSTPLUS', 'line2' => 'Mon-Fri, 9am-6pm EST'],
                        ['icon' => 'mail', 'title' => 'Email', 'line1' => 'info@costpluslife.ca', 'line2' => 'We\'ll respond within 24 hours'],
                        ['icon' => 'map-pin', 'title' => 'Office', 'line1' => '123 Insurance Street', 'line2' => 'Toronto, ON M5H 2N2', 'line3' => 'Canada'],
                        ['icon' => 'clock', 'title' => 'Business Hours', 'line1' => 'Monday - Friday: 9:00 AM - 6:00 PM', 'line2' => 'Saturday: 10:00 AM - 4:00 PM', 'line3' => 'Sunday: Closed'],
                    ];
                    @endphp
                    
                    @foreach($contactInfo as $info)
                    <x-ui.card class="border-2 hover:border-primary/30 transition-all group shadow-emboss">
                        <x-ui.card-content class="p-6">
                            <div class="flex items-start gap-4">
                                <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <x-dynamic-component :component="'lucide-' . $info['icon']" class="w-8 h-8 text-white" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2 text-foreground">{{ $info['title'] }}</h3>
                                    <p class="text-muted-foreground">{{ $info['line1'] }}</p>
                                    @if(isset($info['line2']))
                                    <p class="text-sm text-muted-foreground mt-1">{{ $info['line2'] }}</p>
                                    @endif
                                    @if(isset($info['line3']))
                                    <p class="text-muted-foreground">{{ $info['line3'] }}</p>
                                    @endif
                                </div>
                            </div>
                        </x-ui.card-content>
                    </x-ui.card>
                    @endforeach

                    <x-ui.card class="bg-gradient-primary text-primary-foreground border-0 shadow-glow overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent"></div>
                        <x-ui.card-content class="p-6 relative z-10">
                            <h3 class="text-xl font-bold mb-3">Prefer to Get a Quote?</h3>
                            <p class="mb-4 opacity-90">Skip the wait and get your personalized quote online in just a few minutes.</p>
                            <x-ui.button variant="secondary" class="w-full bg-background text-foreground hover:bg-background/90 shadow-soft">
                                Get Your Free Quote
                            </x-ui.button>
                        </x-ui.card-content>
                    </x-ui.card>

                    <div class="mt-12">
                        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">
                            <span class="text-foreground">Frequently Asked </span>
                            <span class="bg-gradient-primary bg-clip-text text-transparent">Questions</span>
                        </h2>
                        <x-ui.card class="border-2 border-primary/20 shadow-emboss">
                            <x-ui.card-content class="p-8">
                                @php
                                $faqs = [
                                    ['question' => 'How quickly will you respond to my inquiry?', 'answer' => 'We typically respond to all inquiries within 24 hours during business days. For urgent matters, we recommend calling us directly during business hours.'],
                                    ['question' => 'Can I speak to a licensed insurance advisor?', 'answer' => 'Absolutely! Our team consists of licensed insurance professionals who can answer your questions and help you understand your options. No question is too small.'],
                                    ['question' => 'Do you provide support in French?', 'answer' => 'Yes, we have bilingual advisors available to serve you in both English and French. Just let us know your language preference when you contact us.'],
                                ];
                                @endphp
                                <x-ui.accordion :items="$faqs" />
                            </x-ui.card-content>
                        </x-ui.card>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:insurance-partners />
    <livewire:footer />
</div>
