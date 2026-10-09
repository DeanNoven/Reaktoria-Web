@props([
    'as' => 'div',
    'variant' => 'default', // 'default', 'parchment', 'stone', 'wood', 'forest', 'hud'
    'interactive' => false,
    'padding' => 'md', // 'none', 'sm', 'md', 'lg'
])

@php
$baseClasses = 'rounded-lg transition-all duration-200';

$variantClasses = match ($variant) {
    'parchment' => 'bg-[#FAF4E6] border-2 border-[#DFCFB0] shadow-sm text-reaktoria-ink',
    'stone' => 'bg-[#F1F5F8] border-2 border-reaktoria-stone/30 shadow-sm text-reaktoria-ink',
    'wood' => 'bg-[#FAF6F0] border-2 border-reaktoria-wood/30 shadow-sm text-reaktoria-ink',
    'forest' => 'bg-[#F2F8F1] border-2 border-reaktoria-grass/30 shadow-sm text-reaktoria-ink',
    'hud' => 'bg-reaktoria-hud border-2 border-reaktoria-hud-border text-reaktoria-cream shadow-md',
    default => 'bg-white border-2 border-[#E2E8E2] shadow-sm text-reaktoria-ink',
};

$interactiveClasses = $interactive 
    ? 'hover:-translate-y-1 hover:shadow-md cursor-pointer' 
    : '';

$paddingClasses = match ($padding) {
    'none' => '',
    'sm' => 'p-4',
    'lg' => 'p-8',
    default => 'p-6',
};

$classes = "{$baseClasses} {$variantClasses} {$interactiveClasses} {$paddingClasses}";
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>
