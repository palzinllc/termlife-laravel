<div class="min-h-screen bg-background">
    <livewire:navigation />
    
    <div class="pt-32 pb-20 px-4">
        <div class="container mx-auto max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-heading bg-clip-text text-transparent text-center animate-fade-in">
                Disclosures
            </h1>
            <p class="text-sm text-muted-foreground mb-16 text-center">
                Last updated: {{ date('F d, Y') }}
            </p>

            <x-ui.card class="border-2 shadow-emboss">
                <x-ui.card-content class="p-8 md:p-12 prose prose-lg max-w-none">
                    <p class="text-muted-foreground mb-6">
                        Complete Disclosures content from source React file to be implemented here.
                    </p>
                    <p class="text-muted-foreground">
                        This page structure is ready for content migration from /tmp/termlife-canadacompare/src/pages/
                    </p>
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </div>

    <livewire:footer />
</div>
