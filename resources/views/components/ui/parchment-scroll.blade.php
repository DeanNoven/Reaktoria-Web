@props([
    'variant' => 'main', // 'main', 'horizontal', 'compact', 'curled', or 'card-01' through 'card-12', 'ornate', 'pinned', etc.
    'padding' => 'md',   // 'none', 'sm', 'md', 'lg', 'xl'
    'class' => '',
])

@php
    $paddingClasses = match ($padding) {
        'none' => 'p-0',
        'sm' => 'px-3 py-2 sm:px-4 sm:py-3',
        'lg' => 'px-5 py-4 sm:px-8 sm:py-6',
        'xl' => 'px-6 py-5 sm:px-10 sm:py-8',
        default => 'px-4 py-3 sm:px-6 sm:py-4',
    };

    $cardConfigs = [
        // Preserved Main Scroll (Double Roll: Top & Bottom)
        'main' => [
            'file' => 'skin-main-double-roll.png?v=5',
            'slice' => '110 75 140 120 fill',
            'border' => 'border-t-[54px] sm:border-t-[68px] border-b-[58px] sm:border-b-[74px] border-l-[30px] sm:border-l-[44px] border-r-[24px] sm:border-r-[34px]',
        ],
        'vertical' => 'main',

        // Card 01: Dual Rolls (Left & Right)
        'horizontal' => [
            'file' => 'card-01-dual-rolls.png',
            'slice' => '22 45 22 45 fill',
            'border' => 'border-t-[18px] sm:border-t-[22px] border-b-[18px] sm:border-b-[22px] border-x-[32px] sm:border-x-[42px]',
        ],
        'card-1' => 'horizontal',
        'card-01' => 'horizontal',

        // Card 02: Top Roll with Hanging Swallowtail Ribbon
        'card-2' => [
            'file' => 'card-02-top-roll-ribbon.png',
            'slice' => '50 65 22 35 fill',
            'border' => 'border-t-[46px] sm:border-t-[56px] border-b-[18px] sm:border-b-[22px] border-l-[24px] sm:border-l-[32px] border-r-[48px] sm:border-r-[60px]',
        ],
        'card-02' => 'card-2',
        'top-roll' => 'card-2',

        // Card 03: Top Roll with Red Wax Seal (High-Resolution Wide Edition)
        'card-3' => [
            'file' => 'card-03-top-roll-seal-widedown.png',
            'slice' => '110 190 50 90 fill',
            'border' => 'border-t-[50px] sm:border-t-[60px] border-b-[20px] sm:border-b-[26px] border-l-[32px] sm:border-l-[40px] border-r-[64px] sm:border-r-[84px]',
        ],
        'card-03' => 'card-3',
        'card-03-widedown' => 'card-3',
        'card-3-widedown' => 'card-3',
        'widedown' => 'card-3',
        'card-03-wide' => 'card-3',
        'card-3-wide' => 'card-3',
        'seal-wide' => 'card-3',
        'top-seal' => 'card-3',

        // Card 04: Bottom Roll with Fastening Strap
        'card-4' => [
            'file' => 'card-04-bot-roll-strap.png',
            'slice' => '20 25 45 25 fill',
            'border' => 'border-t-[18px] sm:border-t-[22px] border-b-[40px] sm:border-b-[48px] border-x-[22px] sm:border-x-[28px]',
        ],
        'card-04' => 'card-4',

        // Card 05: Ornate Filigree Header & Footer Borders
        'ornate' => [
            'file' => 'card-05-ornate-border.png',
            'slice' => '25 20 25 20 fill',
            'border' => 'border-y-[18px] sm:border-y-[22px] border-x-[16px] sm:border-x-[20px]',
        ],
        'card-5' => 'ornate',
        'card-05' => 'ornate',

        // Card 06: Pinned Top-Left Corner with Curled Corners
        'pinned' => [
            'file' => 'card-06-pinned-curled.png',
            'slice' => '30 25 30 25 fill',
            'border' => 'border-y-[26px] sm:border-y-[32px] border-x-[22px] sm:border-x-[28px]',
        ],
        'card-6' => 'pinned',
        'card-06' => 'pinned',

        // Card 07: Dual Rolls with Top-Left Ribbon Tab
        'card-7' => [
            'file' => 'card-07-dual-rolls-ribbon.png',
            'slice' => '28 45 22 45 fill',
            'border' => 'border-t-[24px] sm:border-t-[30px] border-b-[18px] sm:border-b-[22px] border-x-[32px] sm:border-x-[42px]',
        ],
        'card-07' => 'card-7',

        // Card 08: Dual Rolls Tied with Ribbon Bow
        'card-8' => [
            'file' => 'card-08-dual-rolls-tied.png',
            'slice' => '22 44 22 62 fill',
            'border' => 'border-y-[16px] sm:border-y-[20px] border-l-[44px] sm:border-l-[54px] border-r-[32px] sm:border-r-[40px]',
        ],
        'card-08' => 'card-8',

        // Card 09: Dual Rolls with Bow & Ragged Tear (High-Resolution Wide Edition)
        'card-9-wide' => [
            'file' => 'card-09-dual-rolls-ragged-wide.png',
            'slice' => '70 130 70 190 fill',
            'border' => 'border-y-[18px] sm:border-y-[24px] border-l-[48px] sm:border-l-[64px] border-r-[32px] sm:border-r-[44px]',
        ],
        'card-09-wide' => 'card-9-wide',
        'card-9' => 'card-9-wide',
        'card-09' => 'card-9-wide',
        'ragged-wide' => 'card-9-wide',

        // Card 09 Compact Legacy Variant
        'card-09-compact' => [
            'file' => 'card-09-dual-rolls-ragged.png',
            'slice' => '20 42 20 52 fill',
            'border' => 'border-y-[18px] sm:border-y-[22px] border-l-[38px] sm:border-l-[48px] border-r-[32px] sm:border-r-[40px]',
        ],

        // Card 10: Deckled Card with Crimson Wax Seal & Ribbons (High-Resolution Wide Edition)
        'card-10-wide' => [
            'file' => 'card-10-wax-seal-ribbon-wide.png',
            'slice' => '180 60 55 210 fill',
            'border' => 'border-t-[48px] sm:border-t-[58px] border-b-[18px] sm:border-b-[24px] border-l-[56px] sm:border-l-[68px] border-r-[20px] sm:border-r-[26px]',
        ],
        'card-10' => 'card-10-wide',
        'compact' => 'card-10-wide',
        'seal' => 'card-10-wide',
        'wax-seal-wide' => 'card-10-wide',

        // Card 10 Square Legacy Variant
        'card-10-square' => [
            'file' => 'card-10-wax-seal-ribbon.png',
            'slice' => '82 25 25 68 fill',
            'border' => 'border-t-[40px] sm:border-t-[48px] border-b-[20px] sm:border-b-[26px] border-l-[48px] sm:border-l-[60px] border-r-[24px] sm:border-r-[32px]',
        ],

        // Card 11: Deckled Card with Curled & Folded Corners
        'curled' => [
            'file' => 'card-11-curled-corners.png',
            'slice' => '70 75 70 70 fill',
            'border' => 'border-y-[38px] sm:border-y-[48px] border-l-[38px] sm:border-l-[48px] border-r-[42px] sm:border-r-[52px]',
        ],
        'card-11' => 'curled',

        // Card 12: Deckled Card with Top-Right Bookmark Ribbon Tab
        'tag' => [
            'file' => 'card-12-ribbon-tag.png',
            'slice' => '68 84 22 22 fill',
            'border' => 'border-t-[40px] sm:border-t-[50px] border-b-[18px] sm:border-b-[22px] border-r-[48px] sm:border-r-[60px] border-l-[18px] sm:border-l-[24px]',
        ],
        'ribbon' => 'tag',
        'card-12' => 'tag',
    ];

    $cfg = $cardConfigs[$variant] ?? $cardConfigs['main'];
    while (is_string($cfg)) {
        $cfg = $cardConfigs[$cfg] ?? $cardConfigs['main'];
    }
@endphp

<div 
    {{ $attributes->merge(['class' => 'relative my-4 sm:my-6 ' . $cfg['border'] . ' transition-all duration-300 drop-shadow-[0_12px_28px_rgba(46,27,14,0.14)] ' . $class]) }}
    style="
        border-style: solid;
        border-image-source: url('{{ asset('images/ui/parchment/' . $cfg['file']) }}');
        border-image-slice: {{ $cfg['slice'] }};
        border-image-repeat: stretch;
    "
>
    <!-- Content Slot (Safely placed in the center reading area) -->
    <div class="relative z-10 text-[#2E1B0E] {{ $paddingClasses }}">
        {{ $slot }}
    </div>
</div>
