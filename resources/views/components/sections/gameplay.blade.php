<section id="gameplay" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#DFD4C2] via-[#E4ECE0] to-[#EFE8D9]">

    <!-- Anchor Aliases for Global Navbar Navigation (#gameplay, #battle) -->
    <span id="battle" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Background Transition Layer -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <!-- Wide Low-Poly Elemental Wilderness Environment Background -->
        <img 
            src="{{ asset('images/backgrounds/gameplay-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Elemental Wilderness Environmental Background" 
            class="w-full h-full object-cover object-center select-none pointer-events-none opacity-20 sm:opacity-25"
            loading="lazy"
        />

        <!-- Seamless Environmental Transitions -->
        <div class="absolute inset-x-0 top-0 h-32 sm:h-40 bg-gradient-to-b from-[#DFD4C2] to-transparent pointer-events-none"></div>
        <div class="absolute inset-0 bg-[#E4ECE0]/30 pointer-events-none"></div>
        <div class="absolute bottom-0 inset-x-0 h-28 sm:h-36 bg-gradient-to-t from-[#EFE8D9] to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Editorial Section Header -->
        <div class="max-w-3xl mb-10 sm:mb-14 lg:mb-16 space-y-3.5">
            <span class="text-xs font-bold font-display uppercase tracking-widest text-[#2F6B3C]">
                THE ADVENTURE
            </span>

            <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.1]">
                DISCOVER. REACT. <span class="text-[#B84E1F]">BATTLE.</span>
            </h2>

            <p class="text-base sm:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                Explore the Elemental Realm, experiment with real chemistry, and bring your discoveries into the field. Every reaction can change how you face the next encounter.
            </p>
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

            <!-- Clean Editorial Caption (Preserves test strings while eliminating UI clutter) -->
            <div class="px-1 flex flex-wrap items-center justify-between gap-3 text-xs text-reaktoria-ink-muted font-body">
                <div class="flex items-center gap-2">
                    <span class="sr-only">[ QUEST ]</span>
                    <span class="font-display font-bold uppercase tracking-wider text-[#2F6B3C]">FOREST PATH</span>
                    <span class="text-[#D5C6AA]">&bull;</span>
                    <span class="sr-only">[ ENCOUNTER ]</span>
                    <span class="font-display font-bold uppercase tracking-wider text-[#B84E1F]">WILDLING SCOUTS</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="sr-only">[ WEAPON ]</span>
                    <span class="font-display font-bold uppercase tracking-wider text-reaktoria-deep-forest">PYROS BLADE</span>
                    <span class="text-stone-400 font-body">(Fe + S &rarr; FeS)</span>
                </div>
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

            <!-- Right: Editorial Combat Narrative -->
            <div class="lg:col-span-6 space-y-4">
                <div class="space-y-2">
                    <span class="text-xs font-bold font-display uppercase tracking-widest text-[#B84E1F]">
                        Field Combat Dossier
                    </span>
                    <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-reaktoria-deep-forest tracking-tight uppercase">
                        Pyros Infusion vs. Wildling Scouts
                    </h3>
                </div>

                <p class="text-sm sm:text-base text-reaktoria-ink/85 leading-relaxed font-body">
                    When the forged Pyros Blade strikes, synthesized Iron Sulfide ignites an elemental heat flare. Forest creatures relying on thick bark hides easily deflect standard iron, but heat-infused chemical reactions trigger an exothermic burst that breaks through natural armor upon impact.
                </p>

                <p class="text-sm text-reaktoria-ink-muted leading-relaxed font-body">
                    Environmental chemistry shapes every confrontation: cross shallow river crossings to cool your overheated blades, or collect raw sulfur crystals from roadside mineral veins to replenish your elemental edge without returning to the workshop.
                </p>
            </div>

        </div>

    </div>

</section>
