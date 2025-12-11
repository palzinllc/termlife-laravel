@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'border border-border rounded-lg bg-card text-card-foreground shadow-sm ' . $class]) }}>
    {{ $slot }}
</div>
