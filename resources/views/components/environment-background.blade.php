@props([
    'image' => '',
    'alt' => 'Reaktoria Environment Background',
    'overlay' => 'light', // 'none', 'subtle', 'light', 'medium', 'warm'
    'position' => 'center', // 'center', 'top', 'bottom', or custom Tailwind object position
    'gradient' => 'both', // 'none', 'top', 'bottom', 'both'
    'parallax' => false,
])

@php
// Map overlay variants to subtle, bright cream/ivory readability layers (never dark!)
$overlayClasses = match ($overlay) {
    'none' => '',
    'subtle' => 'bg-white/30 backdrop-blur-[0.5px]',
    'medium' => 'bg-[#FAF7EE]/70 sm:bg-[#FAF7EE]/60 backdrop-blur-[1px]',
    'warm' => 'bg-gradient-to-b from-[#FAF7EE]/60 via-[#FAF7EE]/45 to-[#F5FAF2]/60 backdrop-blur-[0.5px]',
    default => 'bg-[#FAF7EE]/50 sm:bg-[#FAF7EE]/40 backdrop-blur-[0.5px]', // 'light' default
};

// Object positioning class
$positionClass = match ($position) {
    'top' => 'object-top',
    'bottom' => 'object-bottom',
    'center' => 'object-center',
    default => $position,
};

// Parallax / subtle movement styling
$parallaxClasses = $parallax ? 'motion-safe:animate-subtle-drift scale-105 transition-transform duration-1000' : '';
@endphp

<div aria-hidden="true" {{ $attributes->merge(['class' => 'absolute inset-0 z-0 overflow-hidden pointer-events-none select-none']) }}>
    
    <!-- 1. Background Environmental Illustration (16:9 Low-Poly 3D Artwork) -->
    @if ($image)
        <img 
            src="{{ $image }}" 
            alt="{{ $alt }}"
            class="w-full h-full object-cover {{ $positionClass }} {{ $parallaxClasses }} select-none"
            loading="lazy"
        />
    @endif

    <!-- 2. Subtle Cream / Ivory Readability Overlay (Preserves Brightness & Contrast) -->
    @if ($overlay !== 'none')
        <div class="absolute inset-0 {{ $overlayClasses }}"></div>
    @endif

    <!-- 3. Optional Section Edge Gradients (Seamless blend into neighboring sections) -->
    @if (in_array($gradient, ['top', 'both']))
        <div class="absolute inset-x-0 top-0 h-24 bg-gradient-to-b from-[#F7FAF6] via-[#F7FAF6]/70 to-transparent"></div>
    @endif

    @if (in_array($gradient, ['bottom', 'both']))
        <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-[#F4F8F3] via-[#F4F8F3]/70 to-transparent"></div>
    @endif

</div>
