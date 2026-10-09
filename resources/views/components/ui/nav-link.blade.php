@props([
    'href' => '#',
    'active' => false,
])

@php
$baseClasses = 'inline-flex items-center text-sm font-medium transition-colors duration-150 py-1.5 px-2 relative';
$activeClasses = $active 
    ? 'text-reaktoria-cream font-semibold border-b-2 border-reaktoria-gold' 
    : 'text-reaktoria-cream-muted hover:text-reaktoria-cream hover:border-b-2 hover:border-reaktoria-stone-light/40 border-b-2 border-transparent';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "{$baseClasses} {$activeClasses}"]) }}>
    {{ $slot }}
</a>
