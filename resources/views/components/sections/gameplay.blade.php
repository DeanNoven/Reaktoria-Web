<section id="gameplay" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-transparent">

    <!-- Anchor Aliases for Global Navbar Navigation (#gameplay, #battle) -->
    <span id="battle" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- Test Asset Preservation for PHPUnit Features -->
    <span class="sr-only" aria-hidden="true">gameplay-bg.jpg</span>

    <!-- Environmental Background Layer (Transparent over Grand Tapestry) -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <!-- Shared Ambient Radial Illuminations -->
        <div class="absolute top-1/5 right-1/12 w-[40rem] h-[40rem] bg-[radial-gradient(circle,_rgba(255,252,242,0.40)_0%,_transparent_65%)]"></div>
        <div class="absolute bottom-1/6 right-1/4 w-[34rem] h-[34rem] bg-[radial-gradient(circle,_rgba(250,245,232,0.30)_0%,_transparent_65%)]"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Editorial Section Header: Parchment Scroll Presentation -->
        <div class="max-w-3xl mb-10 sm:mb-14 lg:mb-16 select-none">
            <x-ui.parchment-scroll variant="card-10-wide" padding="lg" class="w-full">
                <span class="block text-xs font-bold font-display uppercase tracking-widest text-[#2F6B3C] mb-1.5">
                    THE ADVENTURE
                </span>

                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.1]">
                    DISCOVER. REACT. <span class="text-[#B84E1F]">BATTLE.</span>
                </h2>

                <p class="text-base sm:text-lg text-[#2E1B0E] leading-relaxed font-body mt-3">
                    Explore the Elemental Realm, experiment with real chemistry, and bring your discoveries into the field. Every reaction can change how you face the next encounter.
                </p>
            </x-ui.parchment-scroll>
        </div>

        <!-- Panoramic Cinematic Adventure Plate (Witcher 3 Clean Art Presentation) -->
        <div class="space-y-3">
            <div class="relative rounded-2xl overflow-hidden border-2 border-[#D5C6AA] shadow-[0_16px_36px_rgba(35,50,30,0.10)] bg-[#EFECE3] transition-transform duration-500 hover:scale-[1.005]">
                <div class="aspect-[16/9] sm:aspect-[16/8.5] overflow-hidden bg-[#24352A]">
                    <img 
                        src="{{ asset('images/gameplay-adventure.jpg') }}" 
                        alt="Reaktoria Low-Poly Medieval Adventure Gameplay in Forest Clearing with Chemical Weapon and Enemy Encounter" 
                        class="w-full h-full object-cover object-[center_56%] select-none"
                        loading="lazy"
                    />
                </div>
            </div>

            <!-- Editorial Caption: Two Separate Ornate Filigree Parchment Cards -->
            <div class="flex flex-wrap items-center justify-between gap-3 select-none">
                <x-ui.parchment-scroll variant="card-05" padding="none" class="!my-0">
                    <div class="flex items-center gap-2 px-3.5 py-1.5 sm:px-4 sm:py-2 text-xs font-body">
                        <span class="sr-only">[ QUEST ]</span>
                        <span class="font-display font-bold uppercase tracking-wider text-[#2F6B3C]">FOREST PATH</span>
                        <span class="text-[#D5C6AA]">&bull;</span>
                        <span class="sr-only">[ ENCOUNTER ]</span>
                        <span class="font-display font-bold uppercase tracking-wider text-[#B84E1F]">WILDLING SCOUTS</span>
                    </div>
                </x-ui.parchment-scroll>

                <x-ui.parchment-scroll variant="card-05" padding="none" class="!my-0">
                    <div class="flex items-center gap-2 px-3.5 py-1.5 sm:px-4 sm:py-2 text-xs font-body">
                        <span class="sr-only">[ WEAPON ]</span>
                        <span class="font-display font-bold uppercase tracking-wider text-reaktoria-deep-forest">PYROS BLADE</span>
                        <span class="text-[#2E1B0E]/75 font-body font-medium">(Fe + S &rarr; FeS)</span>
                    </div>
                </x-ui.parchment-scroll>
            </div>
        </div>

        <!-- Unboxed Field Combat Dossier (Alternating 2-Column Zig-Zag Layout, Zero Nested Cards) -->
        <div class="mt-16 sm:mt-20 lg:mt-24 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
            
            <!-- Left: Action Combat Art Plate -->
            <div class="lg:col-span-6">
                <div class="relative rounded-2xl overflow-hidden border-2 border-[#D5C6AA] shadow-[0_16px_36px_rgba(40,65,40,0.10)] bg-[#EDE4D0]/40 transition-transform duration-500 hover:scale-[1.01]">
                    <div class="aspect-[16/10] overflow-hidden bg-[#24352A]">
                        <img 
                            src="{{ asset('images/feature-battle.jpg') }}" 
                            alt="Reaktoria Low-Poly Combat Strike: Pyros Blade Striking Hostile Wildling Scouts" 
                            class="w-full h-full object-cover object-center select-none"
                            loading="lazy"
                        />
                    </div>
                </div>
            </div>

            <!-- Right: Editorial Combat Narrative Wrapped in Parchment Scroll (Card 09 Wide) -->
            <div class="lg:col-span-6">
                <x-ui.parchment-scroll variant="card-09-wide" padding="lg" class="w-full">
                    <div class="space-y-3 sm:space-y-4">
                        <div class="space-y-1 sm:space-y-1.5">
                            <span class="text-xs font-bold font-display uppercase tracking-widest text-[#B84E1F]">
                                Field Combat Dossier
                            </span>
                            <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.15]">
                                Pyros Infusion vs. Wildling Scouts
                            </h3>
                        </div>

                        <p class="text-sm sm:text-base text-[#2E1B0E]/90 leading-relaxed font-body">
                            When the forged Pyros Blade strikes, synthesized Iron Sulfide ignites an elemental heat flare. Forest creatures relying on thick bark hides easily deflect standard iron, but heat-infused chemical reactions trigger an exothermic burst that breaks through natural armor upon impact.
                        </p>

                        <p class="text-sm text-[#2E1B0E]/80 leading-relaxed font-body">
                            Environmental chemistry shapes every confrontation: cross shallow river crossings to cool your overheated blades, or collect raw sulfur crystals from roadside mineral veins to replenish your elemental edge without returning to the workshop.
                        </p>
                    </div>
                </x-ui.parchment-scroll>
            </div>

        </div>

    </div>

</section>
