@props([
    'frame' => 'clean', // 'clean', 'wood', 'stone', 'hud'
    'aspect' => 'video', // 'video', 'square', 'wide', 'auto'
    'interactive' => false,
])

@php
$baseClasses = 'overflow-hidden rounded-lg relative';

$frameClasses = match ($frame) {
    'wood' => 'border-4 border-reaktoria-wood shadow-[0_4px_12px_rgba(107,69,46,0.25)]',
    'stone' => 'border-4 border-reaktoria-stone shadow-[0_4px_12px_rgba(113,128,138,0.25)]',
    'hud' => 'border-2 border-reaktoria-hud-border bg-reaktoria-hud shadow-md',
    default => 'border-2 border-[#DCE4DC] shadow-sm',
};

$aspectClasses = match ($aspect) {
    'square' => 'aspect-square',
    'wide' => 'aspect-[21/9]',
    'auto' => '',
    default => 'aspect-video',
};

$interactiveClasses = $interactive ? 'group cursor-pointer transition-transform duration-300 hover:scale-[1.01]' : '';

$classes = "{$baseClasses} {$frameClasses} {$aspectClasses} {$interactiveClasses}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
