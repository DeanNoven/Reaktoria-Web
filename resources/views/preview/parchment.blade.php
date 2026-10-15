<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parchment Scroll Component Preview &bull; Reaktoria</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#EDF6EB] text-[#19452C] min-h-screen p-4 sm:p-8 lg:p-12 font-sans selection:bg-[#E3B44C]/30 selection:text-[#19452C]">

    <!-- Ambient Folio Atmosphere -->
    <div class="fixed inset-0 pointer-events-none select-none z-0">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_rgba(255,252,242,0.85)_0%,_rgba(237,246,235,0.95)_60%,_#EDF6EB_100%)]"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10 space-y-12 sm:space-y-16">
        
        <!-- Header -->
        <header class="border-b border-[#D5C6AA] pb-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-[#E4D8BE]/80 border border-[#CEBF9E] text-xs font-mono font-bold uppercase tracking-wider text-[#5D462E] mb-3">
                <span>UI System Validation</span>
                <span>&bull;</span>
                <span>Hand-Drawn 2D Fantasy Art</span>
            </div>
            <h1 class="text-3xl sm:text-4xl font-display font-extrabold uppercase tracking-wide text-[#19452C]">
                Illustrated Parchment Skin System
            </h1>
            <p class="text-sm sm:text-base text-[#5D462E] mt-2 max-w-3xl">
                Isolated validation preview for <code class="px-1.5 py-0.5 rounded bg-[#FAF1D8] border border-[#D5C6AA] text-[#2E1B0E] font-mono text-xs">&lt;x-ui.parchment-scroll&gt;</code>. Validating edge-preserving scaling, short and long slot content, and responsive widths for all three variants.
            </p>
        </header>

        <!-- ============================================================== -->
        <!-- 1. VARIANT: MAIN (Top & Bottom Illustrated Rolls)             -->
        <!-- ============================================================== -->
        <section class="space-y-6">
            <div class="flex items-center justify-between border-b border-[#D5C6AA]/70 pb-3">
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold uppercase text-[#19452C]">
                        1. Variant: <span class="text-[#B84E1F]">Main</span> (Top & Bottom Rolls)
                    </h2>
                    <p class="text-xs sm:text-sm text-[#6B5238]">
                        Curled spiral ears at left/right corners, stretching cylinder tube, crimson ribbon strap top, swallowtail ribbon bottom.
                    </p>
                </div>
                <span class="hidden sm:inline-block font-mono text-xs text-[#8C6211] font-bold">variant="main"</span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                
                <!-- Short Slot Content -->
                <div class="space-y-2">
                    <span class="text-xs font-mono font-bold text-[#6B5238] uppercase tracking-wider">Short Slot Content (Default Padding)</span>
                    <x-ui.parchment-scroll variant="main" padding="md">
                        <div class="text-center space-y-2">
                            <span class="text-[11px] font-mono font-bold uppercase tracking-widest text-[#B84E1F]">
                                Alchemical Notice &bull; Folio #04
                            </span>
                            <h3 class="text-lg sm:text-xl font-display font-black text-[#19452C] uppercase tracking-wide">
                                Wolfhaven Chemical Ledger
                            </h3>
                            <p class="text-sm text-[#4A3520] leading-relaxed">
                                Field researchers must record elemental transformations immediately upon synthesis to maintain specimen purity.
                            </p>
                        </div>
                    </x-ui.parchment-scroll>
                </div>

                <!-- Long Slot Content -->
                <div class="space-y-2">
                    <span class="text-xs font-mono font-bold text-[#6B5238] uppercase tracking-wider">Long Slot Content (Large Padding)</span>
                    <x-ui.parchment-scroll variant="main" padding="lg">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between border-b border-[#D5C6AA]/60 pb-2">
                                <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#8C6211]">
                                    Reaction Protocol &bull; Iron + Sulfur
                                </span>
                                <span class="text-xs font-mono text-[#5D462E] font-bold">FE-S-01</span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-display font-black text-[#19452C] uppercase tracking-wide">
                                Pyros Synthesis & Field Armor Hardening
                            </h3>
                            <p class="text-xs sm:text-sm text-[#4A3520] leading-relaxed">
                                In the eastern reaches of the Wolfhaven settlement, smiths combine pulverized elemental sulfur with smelted bog iron under high forge temperature. The resulting black ferrous sulfide crystalline matrix demonstrates remarkable thermal resilience against elemental attacks.
                            </p>
                            <div class="p-2.5 rounded bg-[#F4E4C0]/70 border border-[#D5C6AA] flex items-center justify-between text-xs font-mono">
                                <span class="text-[#19452C] font-bold">Fe + S &rarr; FeS</span>
                                <span class="text-[#B84E1F] font-bold">+184 kJ/mol Exothermic</span>
                            </div>
                            <p class="text-xs text-[#5D462E] leading-relaxed italic">
                                Note: Store cooled ingots away from subterranean moisture to prevent premature crystallization before weapon temper.
                            </p>
                        </div>
                    </x-ui.parchment-scroll>
                </div>

            </div>

            <!-- Mobile Simulation Width (340px) -->
            <div class="pt-4 space-y-2">
                <span class="text-xs font-mono font-bold text-[#6B5238] uppercase tracking-wider">
                    Mobile Viewport Simulation (Fixed 340px Width)
                </span>
                <div class="max-w-[340px] p-2 bg-[#E2ECE0] rounded-xl border border-[#C5D6C2]">
                    <x-ui.parchment-scroll variant="main" padding="sm">
                        <div class="text-center space-y-1">
                            <span class="text-[10px] font-mono font-bold uppercase text-[#B84E1F]">Mobile Test 340px</span>
                            <h4 class="font-display font-bold text-sm text-[#19452C] uppercase">
                                Compact View
                            </h4>
                            <p class="text-xs text-[#4A3520]">
                                Ears preserve natural aspect ratio while tube scales smoothly. No horizontal overflow.
                            </p>
                        </div>
                    </x-ui.parchment-scroll>
                </div>
            </div>
        </section>

        <!-- ============================================================== -->
        <!-- 2. VARIANT: HORIZONTAL (Left & Right Illustrated Rolls)       -->
        <!-- ============================================================== -->
        <section class="space-y-6">
            <div class="flex items-center justify-between border-b border-[#D5C6AA]/70 pb-3">
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold uppercase text-[#19452C]">
                        2. Variant: <span class="text-[#B84E1F]">Horizontal</span> (Left & Right Rolls)
                    </h2>
                    <p class="text-xs sm:text-sm text-[#6B5238]">
                        Vertical side rolls with curled spool ends, tied crimson bow on left, deckled paper edges top & bottom.
                    </p>
                </div>
                <span class="hidden sm:inline-block font-mono text-xs text-[#8C6211] font-bold">variant="horizontal"</span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                
                <!-- Short Slot Content -->
                <div class="space-y-2">
                    <span class="text-xs font-mono font-bold text-[#6B5238] uppercase tracking-wider">Short Slot Content</span>
                    <x-ui.parchment-scroll variant="horizontal" padding="md">
                        <div class="text-center space-y-2">
                            <span class="text-[11px] font-mono font-bold uppercase tracking-widest text-[#2F6B3C]">
                                Expedition Milestone
                            </span>
                            <h3 class="text-lg sm:text-xl font-display font-black text-[#19452C] uppercase tracking-wide">
                                Valley of Reactions
                            </h3>
                            <p class="text-sm text-[#4A3520] leading-relaxed">
                                Unlocked after completing the sulfur synthesis trial at the abandoned watermill.
                            </p>
                        </div>
                    </x-ui.parchment-scroll>
                </div>

                <!-- Long Slot Content -->
                <div class="space-y-2">
                    <span class="text-xs font-mono font-bold text-[#6B5238] uppercase tracking-wider">Long Narrative Content</span>
                    <x-ui.parchment-scroll variant="horizontal" padding="lg">
                        <div class="space-y-3">
                            <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#8C6211]">
                                Field Study Dossier &bull; Vol. II
                            </span>
                            <h3 class="text-lg sm:text-xl font-display font-black text-[#19452C] uppercase tracking-wide">
                                The Blacksmith Guild Chronicles
                            </h3>
                            <p class="text-xs sm:text-sm text-[#4A3520] leading-relaxed">
                                Master craftsman Thorin noted that tempering elemental iron in cold mountain stream water produces blades capable of channeling kinetic sparks. Each forged masterpiece preserves unique alchemical telemetry engraved directly onto its hilt.
                            </p>
                            <p class="text-xs text-[#5D462E] leading-relaxed">
                                The vertical rolls on left and right expand vertically alongside multi-paragraph text without distortion of the top and bottom spool curls.
                            </p>
                        </div>
                    </x-ui.parchment-scroll>
                </div>

            </div>
        </section>

        <!-- ============================================================== -->
        <!-- 3. VARIANT: COMPACT (Deckled Card with Wax Seal Accent)       -->
        <!-- ============================================================== -->
        <section class="space-y-6">
            <div class="flex items-center justify-between border-b border-[#D5C6AA]/70 pb-3">
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold uppercase text-[#19452C]">
                        3. Variant: <span class="text-[#B84E1F]">Compact</span> (Parchment Card)
                    </h2>
                    <p class="text-xs sm:text-sm text-[#6B5238]">
                        Deckled torn paper borders, dark ink contours, crimson wax seal with ribbons top-left, curled corner fold bottom-right.
                    </p>
                </div>
                <span class="hidden sm:inline-block font-mono text-xs text-[#8C6211] font-bold">variant="compact"</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Specimen Card 1: Iron -->
                <x-ui.parchment-scroll variant="compact" padding="sm">
                    <div class="pt-2 space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-mono font-bold uppercase text-[#B84E1F]">Fe &bull; Metal #26</span>
                            <span class="text-[10px] font-mono text-[#6B5238] font-bold">WEIGHT: 55.845</span>
                        </div>
                        <h4 class="font-display font-black text-base text-[#19452C] uppercase tracking-wide">
                            Ferrum Specimen
                        </h4>
                        <p class="text-xs text-[#4A3520] leading-relaxed">
                            Primary metallurgical agent used in weapon forging and armor synthesis throughout the realm.
                        </p>
                    </div>
                </x-ui.parchment-scroll>

                <!-- Specimen Card 2: Sulfur -->
                <x-ui.parchment-scroll variant="compact" padding="sm">
                    <div class="pt-2 space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-mono font-bold uppercase text-[#8C6211]">S &bull; Nonmetal #16</span>
                            <span class="text-[10px] font-mono text-[#6B5238] font-bold">WEIGHT: 32.06</span>
                        </div>
                        <h4 class="font-display font-black text-base text-[#19452C] uppercase tracking-wide">
                            Brimstone Powder
                        </h4>
                        <p class="text-xs text-[#4A3520] leading-relaxed">
                            Crystalline brimstone harvested from geothermal fumaroles. Key reagent for explosive catalysts.
                        </p>
                    </div>
                </x-ui.parchment-scroll>

                <!-- Specimen Card 3: Sodium -->
                <x-ui.parchment-scroll variant="compact" padding="sm">
                    <div class="pt-2 space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-mono font-bold uppercase text-[#42A9C6]">Na &bull; Alkali #11</span>
                            <span class="text-[10px] font-mono text-[#6B5238] font-bold">WEIGHT: 22.989</span>
                        </div>
                        <h4 class="font-display font-black text-base text-[#19452C] uppercase tracking-wide">
                            Natrium Salt
                        </h4>
                        <p class="text-xs text-[#4A3520] leading-relaxed">
                            Highly reactive metal that combusts upon contact with moisture. Produces intense golden flare.
                        </p>
                    </div>
                </x-ui.parchment-scroll>

            </div>
        </section>

        <!-- ============================================================== -->
        <!-- 4. VARIANT: CURLED (Folded Corner & Curled Corner Card)       -->
        <!-- ============================================================== -->
        <section class="space-y-6">
            <div class="flex items-center justify-between border-b border-[#D5C6AA]/70 pb-3">
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold uppercase text-[#19452C]">
                        4. Variant: <span class="text-[#B84E1F]">Curled</span> (Folded Corner Card)
                    </h2>
                    <p class="text-xs sm:text-sm text-[#6B5238]">
                        Folded corner top-left, curled flap bottom-right, clean organic deckled ink contours (Row 3 Col 1).
                    </p>
                </div>
                <span class="hidden sm:inline-block font-mono text-xs text-[#8C6211] font-bold">variant="curled"</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-ui.parchment-scroll variant="curled" padding="md">
                    <div class="space-y-2">
                        <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#B84E1F]">
                            Field Protocol Note
                        </span>
                        <h4 class="font-display font-bold text-base text-[#19452C] uppercase">
                            Hydrothermal Reaction Chamber
                        </h4>
                        <p class="text-xs text-[#4A3520] leading-relaxed">
                            Natural parchment without wax seal, showcasing clean hand-drawn folded corners and subtle warm golden paper shading.
                        </p>
                    </div>
                </x-ui.parchment-scroll>

                <x-ui.parchment-scroll variant="curled" padding="md">
                    <div class="space-y-2">
                        <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#2F6B3C]">
                            Alchemist Folio #12
                        </span>
                        <h4 class="font-display font-bold text-base text-[#19452C] uppercase">
                            Catalytic Mineral Solution
                        </h4>
                        <p class="text-xs text-[#4A3520] leading-relaxed">
                            Completely seamless 9-slice GPU rendering with zero broken seams, photo gaps, or choppy edge strips.
                        </p>
                    </div>
                </x-ui.parchment-scroll>
            </div>
        </section>

        <!-- ============================================================== -->
        <!-- 5. 12-CARD PARCHMENT ASSET COLLECTION (Interactive Showcase)   -->
        <!-- ============================================================== -->
        <section class="space-y-6 pt-6 border-t border-[#D5C6AA]/70">
            <div class="flex items-center justify-between border-b border-[#D5C6AA]/70 pb-3">
                <div>
                    <h2 class="text-xl sm:text-2xl font-display font-bold uppercase text-[#19452C]">
                        5. Complete 12-Card Parchment Collection
                    </h2>
                    <p class="text-xs sm:text-sm text-[#6B5238]">
                        Isolated from high-resolution sprite sheet with clean transparent alpha masks. Available as cards or 9-slice components.
                    </p>
                </div>
                <span class="font-mono text-xs text-[#8C6211] font-bold">12 Unique Hand-Drawn Cards</span>
            </div>

            @php
                $galleryCards = [
                    ['id' => 'card-01', 'name' => 'Dual Rolls Scroll', 'file' => 'card-01-dual-rolls.png', 'desc' => 'Dual vertical rolled cylinders on left & right with ragged deckle top/bottom edges.'],
                    ['id' => 'card-02', 'name' => 'Top Roll & Ribbon', 'file' => 'card-02-top-roll-ribbon.png', 'desc' => 'Horizontal rolled scroll on top with hanging red swallowtail ribbon tab.'],
                    ['id' => 'card-03', 'name' => 'Top Roll & Wax Seal', 'file' => 'card-03-top-roll-seal.png', 'desc' => 'Horizontal rolled scroll on top adorned with embossed crimson wax seal.'],
                    ['id' => 'card-04', 'name' => 'Bottom Roll & Strap', 'file' => 'card-04-bot-roll-strap.png', 'desc' => 'Bottom horizontal scroll roll secured with a centered red fastening strap.'],
                    ['id' => 'card-05', 'name' => 'Ornate Filigree Border', 'file' => 'card-05-ornate-border.png', 'desc' => 'Elegant flat manuscript with ornate fleur-de-lis header and footer emblems.'],
                    ['id' => 'card-06', 'name' => 'Pinned & Curled Sheet', 'file' => 'card-06-pinned-curled.png', 'desc' => 'Pinned with brass tacket top-left, folded top-right and curled flap bottom-right.'],
                    ['id' => 'card-07', 'name' => 'Dual Rolls & Ribbon Tab', 'file' => 'card-07-dual-rolls-ribbon.png', 'desc' => 'Left & right vertical rolls accented with a red bookmark ribbon tag.'],
                    ['id' => 'card-08', 'name' => 'Dual Rolls Tied with Bow', 'file' => 'card-08-dual-rolls-tied.png', 'desc' => 'Dual vertical rolls with an illustrated red ribbon bow tied on left roll.'],
                    ['id' => 'card-09', 'name' => 'Dual Rolls Ragged Tear (Wide)', 'file' => 'card-09-dual-rolls-ragged-wide.png', 'desc' => 'High-resolution wide left roll tied with bow, right roll featuring a dramatic torn deckle flap.'],
                    ['id' => 'card-10', 'name' => 'Crimson Wax Seal Card (Wide)', 'file' => 'card-10-wax-seal-ribbon-wide.png', 'desc' => 'High-resolution wide deckled paper card with prominent crimson wax seal & swallowtail ribbon.'],
                    ['id' => 'card-11', 'name' => 'Curled & Folded Corners', 'file' => 'card-11-curled-corners.png', 'desc' => 'Folded corner top-left and hand-drawn 3D curled roll flap bottom-right.'],
                    ['id' => 'card-12', 'name' => 'Bookmark Ribbon Tab', 'file' => 'card-12-ribbon-tag.png', 'desc' => 'Classic rectangular deckled parchment with hanging red ribbon tab bookmark.'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($galleryCards as $c)
                    <div class="p-4 rounded-xl bg-[#FAF1D8]/60 border border-[#D5C6AA] shadow-sm flex flex-col justify-between space-y-4">
                        <div>
                            <!-- Header & Tag -->
                            <div class="flex items-center justify-between pb-2 border-b border-[#D5C6AA]/40 mb-3">
                                <div>
                                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-[#B84E1F]">
                                        {{ $c['id'] }}
                                    </span>
                                    <h3 class="font-display font-bold text-sm text-[#19452C] leading-snug">
                                        {{ $c['name'] }}
                                    </h3>
                                </div>
                                <code class="px-1.5 py-0.5 rounded bg-[#F4E4C0] border border-[#CEBF9E] text-[10px] font-mono font-bold text-[#5D462E]">
                                    variant="{{ $c['id'] }}"
                                </code>
                            </div>

                            <!-- Live Rendered 9-Slice Card Component -->
                            <div class="my-2">
                                <x-ui.parchment-scroll :variant="$c['id']" padding="sm" class="my-1">
                                    <div class="text-center space-y-1 py-1">
                                        <p class="font-display font-bold text-xs uppercase tracking-wide text-[#19452C]">
                                            {{ $c['name'] }}
                                        </p>
                                        <p class="text-[11px] text-[#4A3520] line-clamp-2">
                                            {{ $c['desc'] }}
                                        </p>
                                    </div>
                                </x-ui.parchment-scroll>
                            </div>
                        </div>

                        <!-- Asset Filename Footer -->
                        <div class="pt-2 border-t border-[#D5C6AA]/40 flex items-center justify-between text-[11px] font-mono text-[#6B5238]">
                            <span>Asset:</span>
                            <span class="font-bold text-[#19452C]">{{ $c['file'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Footer / Navigation -->
        <footer class="pt-8 border-t border-[#D5C6AA] flex flex-wrap items-center justify-between gap-4 text-xs font-mono text-[#6B5238]">
            <div>
                Reaktoria Medieval Fantasy Design System &bull; Parchment Component Isolation Test
            </div>
            <a href="/" class="underline text-[#2F6B3C] font-bold hover:text-[#19452C]">
                &larr; Return to Home Page
            </a>
        </footer>

    </div>

</body>
</html>
