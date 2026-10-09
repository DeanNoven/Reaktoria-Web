@props([
    'size' => 'md', // 'sm', 'md', 'lg', 'xl'
    'href' => '/',
])

@php
$imageHeight = match ($size) {
    'sm' => 'h-7 sm:h-8',
    'lg' => 'h-13 sm:h-15',
    'xl' => 'h-16 sm:h-20',
    default => 'h-10 sm:h-11 md:h-12',
};
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center group select-none focus:outline-none focus:ring-2 focus:ring-reaktoria-cream/50 rounded-sm']) }}>
    <!-- Official Reaktoria Logo Artwork -->
    <img 
        src="{{ asset('images/reaktoria-logo.png') }}" 
        alt="Reaktoria" 
        class="{{ $imageHeight }} w-auto object-contain drop-shadow-[0_2px_8px_rgba(0,0,0,0.5)] group-hover:brightness-110 group-hover:scale-[1.02] transition-all duration-300 pointer-events-none"
        loading="eager"
    />
    <span class="sr-only">Reaktoria</span>
</a>
