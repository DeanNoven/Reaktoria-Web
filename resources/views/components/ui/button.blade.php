@props([
    'variant' => 'forest', // 'forest', 'grass', 'wood', 'roof', 'chemistry', 'gold', 'cream', 'menu', 'ghost'
    'size' => 'md', // 'sm', 'md', 'lg'
    'href' => null,
    'type' => 'button',
])

@php
$baseClasses = 'inline-flex items-center justify-center font-medium tracking-wide transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed select-none rounded';

$variantClasses = match ($variant) {
    'forest' => 'bg-reaktoria-forest hover:bg-reaktoria-forest-hover active:bg-reaktoria-deep-forest text-reaktoria-cream-light border-2 border-reaktoria-deep-forest shadow-[0_2px_0_rgba(25,69,44,0.4)] focus:ring-reaktoria-forest',
    'grass' => 'bg-reaktoria-grass hover:bg-reaktoria-grass-hover active:bg-reaktoria-forest text-white border-2 border-reaktoria-forest shadow-[0_2px_0_rgba(47,107,60,0.4)] focus:ring-reaktoria-grass',
    'wood' => 'bg-reaktoria-wood hover:bg-reaktoria-wood-hover active:bg-reaktoria-wood-dark text-reaktoria-cream-light border-2 border-reaktoria-wood-dark shadow-[0_2px_0_rgba(74,46,29,0.4)] focus:ring-reaktoria-wood',
    'roof' => 'bg-reaktoria-roof hover:bg-reaktoria-roof-hover active:bg-[#9B3C23] text-white border-2 border-[#8E341E] shadow-[0_2px_0_rgba(142,52,30,0.4)] focus:ring-reaktoria-roof',
    'chemistry' => 'bg-reaktoria-chemistry hover:bg-reaktoria-chemistry-hover active:bg-[#2A7E96] text-white border-2 border-[#2C7B91] shadow-[0_2px_0_rgba(44,123,145,0.4)] focus:ring-reaktoria-chemistry',
    'gold' => 'bg-reaktoria-gold hover:bg-reaktoria-gold-hover active:bg-[#C99933] text-reaktoria-wood-dark font-semibold border-2 border-[#BA8926] shadow-[0_2px_0_rgba(186,137,38,0.4)] focus:ring-reaktoria-gold',
    'cream' => 'bg-reaktoria-cream hover:bg-reaktoria-cream-dim text-reaktoria-wood-dark font-semibold border-2 border-reaktoria-earth shadow-[0_2px_0_rgba(139,96,64,0.3)] focus:ring-reaktoria-earth',
    'menu' => 'bg-reaktoria-hud-surface hover:bg-[#314855] text-reaktoria-cream border-2 border-reaktoria-cream shadow-[0_4px_8px_rgba(0,0,0,0.25)] font-display tracking-wider focus:ring-reaktoria-cream',
    'ghost' => 'bg-transparent hover:bg-black/5 text-reaktoria-ink border-2 border-transparent focus:ring-reaktoria-stone',
    default => 'bg-reaktoria-forest text-white border-2 border-reaktoria-deep-forest',
};

$sizeClasses = match ($size) {
    'sm' => 'px-3 py-1.5 text-xs gap-1.5',
    'lg' => 'px-6 py-3 text-base gap-2.5',
    default => 'px-4 py-2 text-sm gap-2',
};

$classes = "{$baseClasses} {$variantClasses} {$sizeClasses}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
