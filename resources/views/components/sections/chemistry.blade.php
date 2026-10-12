<section id="chemistry" class="relative pt-16 sm:pt-20 lg:pt-24 pb-20 sm:pb-24 lg:pb-28 overflow-hidden bg-transparent"
    x-data="{
        selected: null,
        selectDiscovery(key) {
            this.selected = key;
        },
        resetDiscovery() {
            this.selected = null;
        }
    }"
>
    <!-- Anchor Aliases for Global Navbar Navigation & Test Assertions (#chemistry, #adventure, #forge) -->
    <span id="adventure" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>
    <span id="forge" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Test asset references: chemistry-bg.jpg & forge-bg.jpg -->
    <span class="sr-only" aria-hidden="true">chemistry-bg.jpg</span>
    <span class="sr-only" aria-hidden="true">forge-bg.jpg</span>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Section Header (Stays anchored and stable across all states) -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14 lg:mb-16 space-y-3.5 select-none">
            <div class="flex items-center justify-center gap-2 sm:gap-3 text-xs font-bold font-display uppercase tracking-widest">
                <span class="text-[#1B7088]">THE ART OF REACTION</span>
                <span class="text-[#D5C6AA]">&bull;</span>
                <span class="text-[#B84E1F]">THE ART OF FORGING</span>
            </div>

            <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.1]">
                DISCOVER CHEMISTRY AND FORGE
            </h2>

            <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/80 leading-relaxed font-body max-w-2xl mx-auto">
                Two alchemical paths shape the Elemental Realm. Choose an endeavor below to explore reaction formulation or martial weapon craft.
            </p>
        </div>

        <!-- Floating Return Button Bar (Animates gently into view only in Focused State) -->
        <div 
            class="mb-6 sm:mb-8 flex items-center justify-start transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
            :class="selected !== null ? 'opacity-100 translate-y-0 max-h-20 pointer-events-auto' : 'opacity-0 -translate-y-4 max-h-0 overflow-hidden pointer-events-none'"
        >
            <button 
                type="button" 
                @click="resetDiscovery()"
                class="inline-flex items-center gap-2.5 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl bg-[#FAF6EE] hover:bg-white text-reaktoria-deep-forest font-display font-bold text-xs sm:text-sm tracking-wider uppercase border-2 border-[#D5C6AA] shadow-[0_4px_12px_rgba(40,30,15,0.06)] hover:shadow-[0_6px_16px_rgba(40,30,15,0.12)] hover:border-[#19452C] transition-all duration-300 group cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#2F6B3C]"
                aria-label="Back to both discoveries"
            >
                <span class="text-base text-[#1B7088] group-hover:-translate-x-1 transition-transform duration-300">&larr;</span>
                <span>BACK TO BOTH DISCOVERIES</span>
            </button>
        </div>

        <!-- Interactive Discovery Stage (Desktop 2-Column Grid, Mobile Responsive Stack) -->
        <div class="relative w-full">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- ============================================================ -->
                <!-- COLUMN 1 (LEFT): Chemistry Artwork / Forge Explanation -->
                <!-- ============================================================ -->
                <div class="lg:col-span-6 relative">
                    
                    <!-- 1A: CHEMISTRY ARTWORK & INITIAL CARD -->
                    <!-- Visible in Initial State & when Chemistry is focused. Smoothly glides out to the left when Forge is focused. -->
                    <div 
                        class="transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none flex flex-col space-y-4"
                        :class="{
                            'opacity-100 translate-x-0 pointer-events-auto': selected === null || selected === 'chemistry',
                            'opacity-0 -translate-x-16 pointer-events-none absolute inset-0 invisible': selected === 'forge'
                        }"
                    >
                        <!-- Initial Title above Image (Glides up and transitions into explanation column when selected) -->
                        <div 
                            class="space-y-1.5 select-none transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
                            :class="selected === 'chemistry' ? 'opacity-0 -translate-y-3 max-h-0 overflow-hidden mb-0' : 'opacity-100 translate-y-0 max-h-24 mb-1'"
                        >
                            <span class="text-xs font-bold font-display uppercase tracking-widest text-[#5D462E]">
                                Alchemist&apos;s Field Folio
                            </span>
                            <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-reaktoria-deep-forest uppercase tracking-tight">
                                DISCOVER THE <span class="text-[#1B7088]">ELEMENTS</span>
                            </h3>
                        </div>

                        <!-- Art Plate (Interactive in initial state, focused in active state) -->
                        <div 
                            @click="selectDiscovery('chemistry')"
                            :class="selected === null ? 'cursor-pointer group hover:-translate-y-1 hover:border-[#1B7088] hover:shadow-[0_20px_40px_rgba(27,112,136,0.16)]' : 'border-[#19452C] shadow-[0_20px_40px_rgba(25,69,44,0.12)]'"
                            class="relative rounded-2xl overflow-hidden border-2 border-[#D5C6AA] shadow-[0_16px_36px_rgba(40,65,40,0.10)] bg-[#EDE4D0]/40 transition-all duration-500"
                        >
                            <div class="aspect-[4/3] overflow-hidden bg-[#24352A]">
                                <img 
                                    src="{{ asset('images/alchemist-workshop.jpg') }}"
                                    alt="Reaktoria Low-Poly Medieval Alchemist Workshop with Reaction Flask and Raw Materials" 
                                    class="w-full h-full object-cover object-center select-none transition-transform duration-700 ease-out"
                                    :class="selected === null ? 'group-hover:scale-[1.03]' : ''"
                                    loading="lazy"
                                />
                            </div>

                            <!-- Initial State Interactive Prompt Banner -->
                            <div 
                                x-show="selected === null"
                                class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-[#19452C]/90 via-[#19452C]/60 to-transparent flex items-center justify-between text-white font-display text-xs sm:text-sm font-bold tracking-wider uppercase transition-opacity duration-300"
                            >
                                <span class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1B7088] ring-2 ring-white/50 animate-pulse"></span>
                                    <span>Explore Chemical Reactions</span>
                                </span>
                                <span class="group-hover:translate-x-1.5 transition-transform duration-300 text-[#9CD5E6]">&rarr;</span>
                            </div>
                        </div>

                        <!-- Initial State Action Button -->
                        <div x-show="selected === null" class="pt-1">
                            <button 
                                type="button"
                                @click="selectDiscovery('chemistry')"
                                class="w-full py-2.5 px-4 rounded-xl bg-[#FAF6EE] hover:bg-[#EAF2F5] text-reaktoria-deep-forest font-display font-bold text-xs tracking-wider uppercase border border-[#D5C6AA] hover:border-[#1B7088] shadow-2xs hover:shadow-xs transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#1B7088]"
                            >
                                <span>Inspect Reaction Laboratory</span>
                                <span class="text-[#1B7088]">&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- 1B: FORGE EXPLANATION PANEL -->
                    <!-- Reveals into Column 1 when Forge is focused. Hidden otherwise. -->
                    <div 
                        class="transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none space-y-6"
                        :class="{
                            'opacity-100 translate-x-0 pointer-events-auto': selected === 'forge',
                            'opacity-0 -translate-x-16 pointer-events-none absolute inset-0 invisible': selected !== 'forge'
                        }"
                    >
                        <!-- Forge Title & Eyebrow (Glides seamlessly into place) -->
                        <div 
                            class="space-y-3 transition-all duration-600 delay-100 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
                            :class="selected === 'forge' ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                        >
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-bold font-display uppercase tracking-widest text-[#5D462E]">
                                    Blacksmith&apos;s Forge
                                </span>
                                <span class="text-[#D5C6AA]">&bull;</span>
                                <span class="text-xs font-bold font-display uppercase tracking-widest text-[#B84E1F]">
                                    THE ART OF FORGING
                                </span>
                            </div>

                            <h3 class="font-display font-extrabold text-2xl sm:text-3xl lg:text-4xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.15]">
                                TURN DISCOVERY <br class="hidden sm:inline" />
                                <span class="text-[#B84E1F]">INTO POWER</span>
                            </h3>

                            <p class="text-base sm:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                                Every successful reaction can become more than a discovery. Transform chemical combinations into unique weapons and bring their power into the Elemental Realm.
                            </p>
                        </div>

                        <!-- Forge Progression Tiers -->
                        <div 
                            class="space-y-5 pt-4 border-t border-[#D5C6AA]/70 transition-all duration-700 delay-200 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
                            :class="selected === 'forge' ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        >
                            <!-- Tier I: DISCOVER -->
                            <div class="flex items-start gap-4">
                                <span class="font-display font-bold text-base sm:text-lg text-[#1B7088] tracking-wider pt-0.5 shrink-0 select-none">
                                    I.
                                </span>
                                <div class="space-y-1">
                                    <h4 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest uppercase tracking-wide">
                                        DISCOVER
                                    </h4>
                                    <p class="text-sm sm:text-base text-reaktoria-ink/80 leading-relaxed font-body">
                                        Understand the result of a successful chemical reaction.
                                    </p>
                                </div>
                            </div>

                            <!-- Tier II: FORGE -->
                            <div class="flex items-start gap-4">
                                <span class="font-display font-bold text-base sm:text-lg text-[#B84E1F] tracking-wider pt-0.5 shrink-0 select-none">
                                    II.
                                </span>
                                <div class="space-y-1">
                                    <h4 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest uppercase tracking-wide">
                                        FORGE
                                    </h4>
                                    <p class="text-sm sm:text-base text-reaktoria-ink/80 leading-relaxed font-body">
                                        Transform the discovery into a unique weapon or item.
                                    </p>
                                </div>
                            </div>

                            <!-- Tier III: WIELD -->
                            <div class="flex items-start gap-4">
                                <span class="font-display font-bold text-base sm:text-lg text-[#2F6B3C] tracking-wider pt-0.5 shrink-0 select-none">
                                    III.
                                </span>
                                <div class="space-y-1">
                                    <h4 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest uppercase tracking-wide">
                                        WIELD
                                    </h4>
                                    <p class="text-sm sm:text-base text-reaktoria-ink/80 leading-relaxed font-body">
                                        Bring your creation into the adventure and use its power in battle.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ============================================================ -->
                <!-- COLUMN 2 (RIGHT): Forge Artwork / Chemistry Explanation -->
                <!-- ============================================================ -->
                <div class="lg:col-span-6 relative">
                    
                    <!-- 2A: FORGE ARTWORK & INITIAL CARD -->
                    <!-- Visible in Initial State & when Forge is focused. Smoothly glides out to the right when Chemistry is focused. -->
                    <div 
                        class="transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none flex flex-col space-y-4"
                        :class="{
                            'opacity-100 translate-x-0 pointer-events-auto': selected === null || selected === 'forge',
                            'opacity-0 translate-x-16 pointer-events-none absolute inset-0 invisible': selected === 'chemistry'
                        }"
                    >
                        <!-- Initial Title above Image (Glides up and transitions into explanation column when selected) -->
                        <div 
                            class="space-y-1.5 select-none transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
                            :class="selected === 'forge' ? 'opacity-0 -translate-y-3 max-h-0 overflow-hidden mb-0' : 'opacity-100 translate-y-0 max-h-24 mb-1'"
                        >
                            <span class="text-xs font-bold font-display uppercase tracking-widest text-[#5D462E]">
                                Blacksmith&apos;s Forge
                            </span>
                            <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-reaktoria-deep-forest uppercase tracking-tight">
                                TURN DISCOVERY <span class="text-[#B84E1F]">INTO POWER</span>
                            </h3>
                        </div>

                        <!-- Art Plate (Interactive in initial state, focused in active state) -->
                        <div 
                            @click="selectDiscovery('forge')"
                            :class="selected === null ? 'cursor-pointer group hover:-translate-y-1 hover:border-[#B84E1F] hover:shadow-[0_20px_40px_rgba(184,78,31,0.16)]' : 'border-[#19452C] shadow-[0_20px_40px_rgba(25,69,44,0.12)]'"
                            class="relative rounded-2xl overflow-hidden border-2 border-[#D5C6AA] shadow-[0_16px_36px_rgba(65,35,15,0.10)] bg-[#EDE4D0]/40 transition-all duration-500"
                        >
                            <div class="aspect-[4/3] overflow-hidden bg-[#24352A]">
                                <img 
                                    src="{{ asset('images/forged-showcase.jpg') }}" 
                                    alt="Reaktoria Low-Poly Medieval Forge Workshop with Glowing Forged Sword on Anvil, Sulfur Crystals, and Furnace" 
                                    class="w-full h-full object-cover object-center select-none transition-transform duration-700 ease-out"
                                    :class="selected === null ? 'group-hover:scale-[1.03]' : ''"
                                    loading="lazy"
                                />
                            </div>

                            <!-- Initial State Interactive Prompt Banner -->
                            <div 
                                x-show="selected === null"
                                class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-[#19452C]/90 via-[#19452C]/60 to-transparent flex items-center justify-between text-white font-display text-xs sm:text-sm font-bold tracking-wider uppercase transition-opacity duration-300"
                            >
                                <span class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#B84E1F] ring-2 ring-white/50 animate-pulse"></span>
                                    <span>Explore Weapon Forging</span>
                                </span>
                                <span class="group-hover:translate-x-1.5 transition-transform duration-300 text-[#E8A572]">&rarr;</span>
                            </div>
                        </div>

                        <!-- Initial State Action Button -->
                        <div x-show="selected === null" class="pt-1">
                            <button 
                                type="button"
                                @click="selectDiscovery('forge')"
                                class="w-full py-2.5 px-4 rounded-xl bg-[#FAF6EE] hover:bg-[#FBEFE5] text-reaktoria-deep-forest font-display font-bold text-xs tracking-wider uppercase border border-[#D5C6AA] hover:border-[#B84E1F] shadow-2xs hover:shadow-xs transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]"
                            >
                                <span>Inspect Blacksmith Forge</span>
                                <span class="text-[#B84E1F]">&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- 2B: CHEMISTRY EXPLANATION PANEL -->
                    <!-- Reveals into Column 2 when Chemistry is focused. Hidden otherwise. -->
                    <div 
                        class="transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none space-y-6"
                        :class="{
                            'opacity-100 translate-x-0 pointer-events-auto': selected === 'chemistry',
                            'opacity-0 translate-x-16 pointer-events-none absolute inset-0 invisible': selected !== 'chemistry'
                        }"
                    >
                        <!-- Chemistry Title & Eyebrow (Glides seamlessly into place) -->
                        <div 
                            class="space-y-3 transition-all duration-600 delay-100 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
                            :class="selected === 'chemistry' ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                        >
                            <div class="flex items-center gap-3">
                                <span class="text-xs font-bold font-display uppercase tracking-widest text-[#5D462E]">
                                    Alchemist&apos;s Field Folio
                                </span>
                                <span class="text-[#D5C6AA]">&bull;</span>
                                <span class="text-xs font-bold font-display uppercase tracking-widest text-[#1B7088]">
                                    THE ART OF REACTION
                                </span>
                            </div>

                            <h3 class="font-display font-extrabold text-2xl sm:text-3xl lg:text-4xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.15]">
                                DISCOVER THE <br class="hidden sm:inline" />
                                <span class="text-[#1B7088]">ELEMENTS</span>
                            </h3>

                            <p class="text-base sm:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                                Combine real chemical elements, observe their reactions, and discover what happens when science becomes part of the adventure.
                            </p>
                        </div>

                        <!-- Chemistry Progression Steps -->
                        <div 
                            class="space-y-5 pt-4 border-t border-[#D5C6AA]/70 transition-all duration-700 delay-200 ease-[cubic-bezier(0.16,1,0.3,1)] motion-reduce:transition-none"
                            :class="selected === 'chemistry' ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        >
                            <!-- Step 01: SELECT -->
                            <div class="flex items-start gap-4">
                                <span class="font-display font-bold text-base sm:text-lg text-[#1B7088] tracking-wider pt-0.5 shrink-0 select-none">
                                    01.
                                </span>
                                <div class="space-y-1">
                                    <h4 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest uppercase tracking-wide">
                                        SELECT
                                    </h4>
                                    <p class="text-sm sm:text-base text-reaktoria-ink/80 leading-relaxed font-body">
                                        Choose elemental reagents from the table to begin formulation.
                                    </p>
                                </div>
                            </div>

                            <!-- Step 02: REACT -->
                            <div class="flex items-start gap-4">
                                <span class="font-display font-bold text-base sm:text-lg text-[#8C6211] tracking-wider pt-0.5 shrink-0 select-none">
                                    02.
                                </span>
                                <div class="space-y-1">
                                    <h4 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest uppercase tracking-wide">
                                        REACT
                                    </h4>
                                    <p class="text-sm sm:text-base text-reaktoria-ink/80 leading-relaxed font-body">
                                        Introduce heat energy into the vessel and observe exothermic transformation.
                                    </p>
                                </div>
                            </div>

                            <!-- Step 03: DISCOVER -->
                            <div class="flex items-start gap-4">
                                <span class="font-display font-bold text-base sm:text-lg text-[#2F6B3C] tracking-wider pt-0.5 shrink-0 select-none">
                                    03.
                                </span>
                                <div class="space-y-1">
                                    <h4 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest uppercase tracking-wide">
                                        DISCOVER
                                    </h4>
                                    <p class="text-sm sm:text-base text-reaktoria-ink/80 leading-relaxed font-body">
                                        Synthesize a new mineral compound and record its real chemical properties.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
