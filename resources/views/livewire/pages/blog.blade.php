<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                Life Insurance Insights
            </h1>
            <p class="text-xl text-muted-foreground mb-16 text-center max-w-2xl mx-auto">
                Expert advice, tips, and guides to help you make informed decisions about life insurance
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $posts = [
                    ['title' => 'Understanding Term Life Insurance vs Whole Life Insurance', 'excerpt' => 'Learn the key differences between term and whole life insurance to make an informed decision for your family\'s future.', 'date' => 'March 15, 2024', 'readTime' => '5 min read', 'category' => 'Insurance Basics'],
                    ['title' => 'How Much Life Insurance Do I Really Need?', 'excerpt' => 'A comprehensive guide to calculating your ideal coverage amount based on your unique financial situation.', 'date' => 'March 10, 2024', 'readTime' => '7 min read', 'category' => 'Planning'],
                    ['title' => 'Top 5 Mistakes to Avoid When Buying Life Insurance', 'excerpt' => 'Don\'t make these common errors that could leave your family underprotected or overpaying for coverage.', 'date' => 'March 5, 2024', 'readTime' => '6 min read', 'category' => 'Tips & Advice'],
                    ['title' => 'Life Insurance for New Parents: What You Need to Know', 'excerpt' => 'Starting a family? Here\'s everything you need to know about protecting your growing family with life insurance.', 'date' => 'February 28, 2024', 'readTime' => '8 min read', 'category' => 'Family Planning'],
                    ['title' => 'How Your Health Affects Your Life Insurance Rates', 'excerpt' => 'Understand how insurance companies assess your health and what you can do to get better rates.', 'date' => 'February 20, 2024', 'readTime' => '5 min read', 'category' => 'Insurance Basics'],
                    ['title' => 'Converting Your Term Life Policy to Permanent Insurance', 'excerpt' => 'When and why you might want to convert your term policy, plus what you need to know about the process.', 'date' => 'February 15, 2024', 'readTime' => '6 min read', 'category' => 'Advanced Topics'],
                ];
                @endphp
                
                @foreach($posts as $index => $post)
                <x-ui.card class="border-2 hover:border-primary/30 transition-all hover:shadow-soft animate-slide-up group cursor-pointer" style="animation-delay: {{ $index * 0.1 }}s">
                    <x-ui.card-content class="p-6">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 bg-primary/10 text-primary text-sm font-medium rounded-full">
                                {{ $post['category'] }}
                            </span>
                        </div>
                        
                        <h3 class="text-xl font-bold mb-3 text-foreground group-hover:text-primary transition-colors">
                            {{ $post['title'] }}
                        </h3>
                        
                        <p class="text-muted-foreground mb-4">
                            {{ $post['excerpt'] }}
                        </p>
                        
                        <div class="flex items-center gap-4 text-sm text-muted-foreground mb-4">
                            <span class="flex items-center gap-1">
                                <x-lucide-calendar class="w-4 h-4" />
                                {{ $post['date'] }}
                            </span>
                            <span class="flex items-center gap-1">
                                <x-lucide-clock class="w-4 h-4" />
                                {{ $post['readTime'] }}
                            </span>
                        </div>
                        
                        <x-ui.button variant="link" class="p-0 h-auto text-primary group-hover:gap-2 transition-all">
                            Read More
                            <x-lucide-arrow-right class="w-4 h-4 ml-1" />
                        </x-ui.button>
                    </x-ui.card-content>
                </x-ui.card>
                @endforeach
            </div>

            <div class="mt-16 text-center">
                <x-ui.card class="bg-gradient-hero border-2 border-primary/20 inline-block">
                    <x-ui.card-content class="p-8">
                        <h2 class="text-2xl font-bold mb-3 heading-gradient">
                            Want to Learn More?
                        </h2>
                        <p class="text-muted-foreground mb-6">
                            Subscribe to our newsletter for the latest insights and tips
                        </p>
                        <div class="flex gap-3 max-w-md">
                            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 rounded-lg border-2 border-border focus:border-primary focus:outline-none bg-background">
                            <x-ui.button class="bg-gradient-primary shadow-soft hover:shadow-glow transition-all">
                                Subscribe
                            </x-ui.button>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
            </div>
        </div>
    </div>

    <livewire:footer />
</div>
