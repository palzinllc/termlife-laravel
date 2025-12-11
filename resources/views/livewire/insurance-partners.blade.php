<div class="py-20 px-4 bg-gradient-hero">
    <div class="container mx-auto max-w-4xl">
        <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center text-emboss">
            <span class="text-foreground">Our Trusted </span>
            <span class="heading-gradient">Insurance Partners</span>
        </h2>
        <p class="text-xl text-muted-foreground text-center mb-12 max-w-2xl mx-auto">
            We work with Canada's leading insurance providers to bring you the best term life insurance options
        </p>
        
        <div class="relative overflow-hidden">
            <div class="flex animate-scroll gap-8">
                @foreach(array_merge($partners, $partners) as $index => $partner)
                    <div class="flex-shrink-0 w-48 h-24 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow flex items-center justify-center p-4">
                        <img 
                            src="{{ asset('images/partners/' . $partner['logo']) }}" 
                            alt="{{ $partner['name'] }} logo"
                            class="max-w-full max-h-full object-contain"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
