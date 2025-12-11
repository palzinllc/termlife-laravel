@props(['items' => [], 'class' => ''])

<div {{ $attributes->merge(['class' => 'space-y-4 ' . $class]) }}>
    @foreach($items as $index => $item)
        <div x-data="{ open: false }" class="border rounded-lg px-6 bg-card">
            <button @click="open = !open" class="flex justify-between items-center w-full py-4 text-left text-lg font-semibold hover:no-underline">
                <span>{{ $item['question'] }}</span>
                <x-lucide-chevron-down class="w-5 h-5 transition-transform" :class="{ 'rotate-180': open }" x-bind:class="{ 'rotate-180': open }" />
            </button>
            <div x-show="open" x-transition class="pb-4 text-muted-foreground">
                {!! $item['answer'] !!}
            </div>
        </div>
    @endforeach
</div>
