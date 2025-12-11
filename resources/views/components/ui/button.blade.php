@props([
    'variant' => 'default',
    'size' => 'default',
    'class' => ''
])

@php
$baseClasses = 'inline-flex items-center justify-center rounded-md font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50';

$variantClasses = [
    'default' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
    'ghost' => 'hover:bg-accent hover:text-accent-foreground',
    'link' => 'text-primary underline-offset-4 hover:underline',
];

$sizeClasses = [
    'default' => 'h-10 px-4 py-2',
    'sm' => 'h-9 rounded-md px-3 text-sm',
    'lg' => 'h-11 rounded-md px-8 text-lg',
    'icon' => 'h-10 w-10',
];

$classes = $baseClasses . ' ' . ($variantClasses[$variant] ?? $variantClasses['default']) . ' ' . ($sizeClasses[$size] ?? $sizeClasses['default']) . ' ' . $class;
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>
    {{ $slot }}
</button>
