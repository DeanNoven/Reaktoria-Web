@props([
    'as' => 'h2',
    'size' => 'h2', // 'display', 'h1', 'h2', 'h3', 'h4', 'eyebrow', 'subtitle'
    'color' => 'ink', // 'ink', 'forest', 'wood', 'chemistry', 'gold', 'cream', 'muted'
])

@php
$sizeClasses = match ($size) {
    'display' => 'font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight leading-tight',
    'h1' => 'font-display text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight leading-tight',
    'h2' => 'font-display text-2xl sm:text-3xl lg:text-4xl font-semibold tracking-normal leading-snug',
    'h3' => 'font-display text-xl sm:text-2xl font-semibold tracking-normal leading-snug',
    'h4' => 'font-display text-lg sm:text-xl font-medium tracking-normal',
    'eyebrow' => 'font-body text-xs uppercase tracking-widest font-bold',
    'subtitle' => 'font-body text-base sm:text-lg font-normal leading-relaxed',
    default => 'font-display text-2xl font-semibold',
};

$colorClasses = match ($color) {
    'forest' => 'text-reaktoria-forest',
    'wood' => 'text-reaktoria-wood',
    'chemistry' => 'text-[#1B6D85]',
    'gold' => 'text-[#8C6211]',
    'cream' => 'text-reaktoria-cream',
    'muted' => 'text-reaktoria-ink-muted',
    default => 'text-reaktoria-ink',
};
@endphp

<{{ $as }} {{ $attributes->merge(['class' => "{$sizeClasses} {$colorClasses}"]) }}>
    {{ $slot }}
</{{ $as }}>
