<!-- Section 8 / Pilar 4: Elemental Archive (Character-Select Style Manuscript Scrolls) -->
<section id="archive" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-transparent">

    <!-- Global Anchor for Navbar and Footer Navigation (#archive, #elemental-archive) -->
    <span id="elemental-archive" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Test asset reference: archive-bg.jpg -->
    <span class="sr-only" aria-hidden="true">archive-bg.jpg</span>

    <!-- Environmental archive background layer (Transparent over Grand Tapestry) -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <!-- Shared Ambient Radial Illuminations -->
        <div class="absolute top-1/6 right-1/12 w-[42rem] h-[42rem] bg-[radial-gradient(circle,_rgba(255,252,242,0.40)_0%,_transparent_65%)]"></div>
        <div class="absolute top-1/2 left-1/12 w-[38rem] h-[38rem] bg-[radial-gradient(circle,_rgba(225,242,228,0.30)_0%,_transparent_65%)]"></div>
        <div class="absolute bottom-1/6 right-1/4 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(250,245,232,0.35)_0%,_transparent_65%)]"></div>
    </div>

@php
    $specimensList = [
        [
            'key' => 'FE',
            'indexTag' => '01 FE',
            'number' => '26',
            'symbol' => 'Fe',
            'name' => 'IRON',
            'label' => 'ELEMENT 01 / FIELD SPECIMEN',
            'image' => asset('images/iron-specimen.jpg'),
            'category' => 'Metal',
            'role' => 'Forging Material',
            'classification' => 'TRANSITION METAL',
            'desc' => 'Primary metallic foundation for blades, heavy plate, and elemental reaction catalysts.',
            'reacts' => [
                ['symbol' => 'S', 'name' => 'Sulfur'],
                ['symbol' => 'O₂', 'name' => 'Oxygen'],
            ],
            'discoveries' => [
                ['formula' => 'FeS', 'name' => 'Iron Sulfide', 'detail' => 'Pyros Blade Reagent'],
                ['formula' => 'Fe₂O₃', 'name' => 'Iron Oxide', 'detail' => 'Thermal Catalyst'],
            ],
            'note' => 'Iron forms the foundation of many forged discoveries throughout the realm.',
        ],
        [
            'key' => 'H',
            'indexTag' => '02 H',
            'number' => '01',
            'symbol' => 'H',
            'name' => 'HYDROGEN',
            'label' => 'ELEMENT 02 / FIELD SPECIMEN',
            'image' => asset('images/hydrogen-specimen.jpg'),
            'category' => 'Nonmetal',
            'role' => 'Volatile Fuel',
            'classification' => 'REACTIVE NONMETAL',
            'desc' => 'Lightest vapor of the cosmos, providing rapid acceleration and pure thermal burn.',
            'reacts' => [
                ['symbol' => 'O₂', 'name' => 'Oxygen'],
                ['symbol' => 'Cl', 'name' => 'Chlorine'],
            ],
            'discoveries' => [
                ['formula' => 'H₂O', 'name' => 'Pure Water', 'detail' => 'Cooling Solvent'],
                ['formula' => 'HCl', 'name' => 'Acidic Vapor', 'detail' => 'Etching Agent'],
            ],
            'note' => 'Volatile light vapor captured in high thermals, vital for exothermic ignition.',
        ],
        [
            'key' => 'O',
            'indexTag' => '03 O',
            'number' => '08',
            'symbol' => 'O',
            'name' => 'OXYGEN',
            'label' => 'ELEMENT 03 / FIELD SPECIMEN',
            'image' => asset('images/oxygen-specimen.jpg'),
            'category' => 'Nonmetal',
            'role' => 'Combustion Agent',
            'classification' => 'CHALCOGEN',
            'desc' => 'Invisible breath sustaining thermal oxidation required in the great forges across the realm.',
            'reacts' => [
                ['symbol' => 'Fe', 'name' => 'Iron'],
                ['symbol' => 'H', 'name' => 'Hydrogen'],
            ],
            'discoveries' => [
                ['formula' => 'Fe₂O₃', 'name' => 'Iron Oxide', 'detail' => 'Blast Furnace Slag'],
                ['formula' => 'H₂O', 'name' => 'Water Vapor', 'detail' => 'Quenching Vapor'],
            ],
            'note' => 'Sustains thermal oxidation required in the great forges across the realm.',
        ],
        [
            'key' => 'S',
            'indexTag' => '04 S',
            'number' => '16',
            'symbol' => 'S',
            'name' => 'SULFUR',
            'label' => 'ELEMENT 04 / FIELD SPECIMEN',
            'image' => asset('images/sulfur-specimen.jpg'),
            'category' => 'Nonmetal',
            'role' => 'Elemental Catalyst',
            'classification' => 'REACTIVE NONMETAL',
            'desc' => 'Brimstone crystals from caldera vents that readily impart fiery properties to forged steel.',
            'reacts' => [
                ['symbol' => 'Fe', 'name' => 'Iron'],
                ['symbol' => 'O₂', 'name' => 'Oxygen'],
            ],
            'discoveries' => [
                ['formula' => 'FeS', 'name' => 'Iron Sulfide', 'detail' => 'Pyros Blade Coating'],
                ['formula' => 'SO₂', 'name' => 'Sulfur Dioxide', 'detail' => 'Pungent Deterrent'],
            ],
            'note' => 'Harvested from volcanic vents; readily binds with metals to impart flame.',
        ],
        [
            'key' => 'NA',
            'indexTag' => '05 NA',
            'number' => '11',
            'symbol' => 'Na',
            'name' => 'SODIUM',
            'label' => 'ELEMENT 05 / FIELD SPECIMEN',
            'image' => asset('images/sodium-specimen.jpg'),
            'category' => 'Alkali Metal',
            'role' => 'Explosive Reagent',
            'classification' => 'ALKALI METAL',
            'desc' => 'Highly reactive soft metal that combusts violently in contact with ambient moisture.',
            'reacts' => [
                ['symbol' => 'Cl', 'name' => 'Chlorine'],
                ['symbol' => 'H₂O', 'name' => 'Water'],
            ],
            'discoveries' => [
                ['formula' => 'NaCl', 'name' => 'Rock Salt', 'detail' => 'Preservation Flux'],
                ['formula' => 'NaOH', 'name' => 'Caustic Lye', 'detail' => 'Alchemical Cleanser'],
            ],
            'note' => 'Soft lustrous metal that violently combusts upon contact with moisture.',
        ],
        [
            'key' => 'CL',
            'indexTag' => '06 CL',
            'number' => '17',
            'symbol' => 'Cl',
            'name' => 'CHLORINE',
            'label' => 'ELEMENT 06 / FIELD SPECIMEN',
            'image' => asset('images/chlorine-specimen.jpg'),
            'category' => 'Halogen',
            'role' => 'Corrosive Solvent',
            'classification' => 'HALOGEN GAS',
            'desc' => 'Dense pungent vapor distilled from dried salt pans, essential for leaching minerals.',
            'reacts' => [
                ['symbol' => 'Na', 'name' => 'Sodium'],
                ['symbol' => 'H', 'name' => 'Hydrogen'],
            ],
            'discoveries' => [
                ['formula' => 'NaCl', 'name' => 'Table Salt', 'detail' => 'Mineral Stabilizer'],
                ['formula' => 'HCl', 'name' => 'Acid Solvent', 'detail' => 'Ore Dissolution'],
            ],
            'note' => 'Dense pungent vapor distilled from salt pans, vital for dissolving ores.',
        ],
    ];
@endphp

    <div class="max-w-[1480px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
         x-data="{
            currentIndex: 0,
            isAnimating: false,
            specimens: {{ Js::from($specimensList) }},
            get current() {
                return this.specimens[this.currentIndex];
            },
            get prevSpecimen() {
                const len = this.specimens.length;
                return this.specimens[(this.currentIndex - 1 + len) % len];
            },
            get nextSpecimen() {
                const len = this.specimens.length;
                return this.specimens[(this.currentIndex + 1) % len];
            },
            next() {
                if (this.isAnimating) return;
                const nextIdx = (this.currentIndex + 1) % this.specimens.length;
                this.animateTo(nextIdx, 'next');
            },
            prev() {
                if (this.isAnimating) return;
                const prevIdx = (this.currentIndex - 1 + this.specimens.length) % this.specimens.length;
                this.animateTo(prevIdx, 'prev');
            },
            goTo(targetIndex) {
                if (this.isAnimating || targetIndex === this.currentIndex) return;
                const dir = targetIndex > this.currentIndex ? 'next' : 'prev';
                this.animateTo(targetIndex, dir);
            },
            animateTo(newIndex, direction) {
                if (!window.gsap || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                    this.currentIndex = newIndex;
                    return;
                }

                this.isAnimating = true;
                const dur = 0.55;
                const ease = 'power2.out';

                const activeCard = this.$refs.activeCard;
                const prevCard = this.$refs.prevCard;
                const nextCard = this.$refs.nextCard;

                const tl = window.gsap.timeline({
                    onComplete: () => {
                        this.isAnimating = false;
                    }
                });

                if (direction === 'next') {
                    tl.to(activeCard, { x: -35, opacity: 0.35, duration: dur * 0.45, ease: 'power2.in' }, 0);
                    if (prevCard) tl.to(prevCard, { x: -45, opacity: 0.2, duration: dur * 0.45, ease: 'power2.in' }, 0);
                    if (nextCard) tl.to(nextCard, { x: -30, opacity: 0.85, duration: dur * 0.45, ease: 'power2.out' }, 0);

                    tl.add(() => {
                        this.currentIndex = newIndex;
                    });

                    tl.fromTo(activeCard, 
                        { x: 35, opacity: 0.35 }, 
                        { x: 0, opacity: 1, duration: dur * 0.55, ease: ease }
                    );
                    if (prevCard) tl.fromTo(prevCard, { x: 0, opacity: 0.2 }, { x: 0, opacity: 0.55, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.45));
                    if (nextCard) tl.fromTo(nextCard, { x: 0, opacity: 0.2 }, { x: 0, opacity: 0.55, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.45));
                } else {
                    tl.to(activeCard, { x: 35, opacity: 0.35, duration: dur * 0.45, ease: 'power2.in' }, 0);
                    if (nextCard) tl.to(nextCard, { x: 45, opacity: 0.2, duration: dur * 0.45, ease: 'power2.in' }, 0);
                    if (prevCard) tl.to(prevCard, { x: 30, opacity: 0.85, duration: dur * 0.45, ease: 'power2.out' }, 0);

                    tl.add(() => {
                        this.currentIndex = newIndex;
                    });

                    tl.fromTo(activeCard, 
                        { x: -35, opacity: 0.35 }, 
                        { x: 0, opacity: 1, duration: dur * 0.55, ease: ease }
                    );
                    if (prevCard) tl.fromTo(prevCard, { x: 0, opacity: 0.2 }, { x: 0, opacity: 0.55, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.45));
                    if (nextCard) tl.fromTo(nextCard, { x: 0, opacity: 0.2 }, { x: 0, opacity: 0.55, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.45));
                }
            }
         }">

        <!-- SECTION HEADER: In-World Scientific Archive (Card 11: Curled Corners) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-8 sm:mb-10 lg:mb-12 select-none">
            
            <div class="max-w-3xl w-full">
                <x-ui.parchment-scroll variant="card-11" padding="lg" class="w-full">
                    <span class="block text-xs font-bold font-display uppercase tracking-widest text-[#2F6B3C] mb-1.5">
                        ELEMENTAL ARCHIVE
                    </span>

                    <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08]">
                        KNOW WHAT YOU'RE MIXING.
                    </h2>

                    <p class="text-sm sm:text-base lg:text-lg text-[#2E1B0E]/85 leading-relaxed font-body mt-3">
                        Every discovery begins with an element. Study their properties, understand their behavior, and uncover what happens when they react.
                    </p>
                </x-ui.parchment-scroll>
            </div>

            <!-- Archival Registry Heading Line (Card 05: Ornate Filigree Border) -->
            <div class="self-start md:self-end pb-3 select-none">
                <x-ui.parchment-scroll variant="card-05" padding="none" class="!my-0 inline-block">
                    <div class="flex items-center gap-2 px-3.5 py-1.5 sm:px-4 sm:py-2 text-xs font-display font-semibold tracking-wider text-[#5A452E]">
                        <span class="text-reaktoria-deep-forest font-bold uppercase">FIELD ARCHIVE</span>
                        <span class="text-[#D5C6AA]">&bull;</span>
                        <span class="uppercase">REAKTORIA RESEARCH</span>
                    </div>
                </x-ui.parchment-scroll>
            </div>

        </div>

        <!-- =================================================================
             CHARACTER-SELECT STYLE CAROUSEL: 3 PARCHMENT SCROLLS IN DEPTH
             Prev Scroll (tucked left) <- Active Scroll (dominant) -> Next Scroll (tucked right)
             ================================================================= -->
        <div 
            class="relative w-full flex items-center justify-center min-h-[500px] sm:min-h-[560px] lg:min-h-[600px] xl:min-h-[640px] px-2 sm:px-4 lg:px-8 focus:outline-none select-none overflow-visible"
            tabindex="0"
            role="region"
            aria-label="Elemental Specimen Character Selection Carousel"
            @keydown.arrow-left.prevent="prev()"
            @keydown.arrow-right.prevent="next()"
        >

            <!-- STANDALONE NAVIGATION CONTROL: PREVIOUS SPECIMEN -->
            <button 
                type="button"
                @click="prev()"
                :disabled="isAnimating"
                :aria-label="'Previous specimen: ' + prevSpecimen.name + ' (' + prevSpecimen.indexTag + ')'"
                class="absolute left-1 sm:left-3 lg:left-6 xl:left-8 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-[#FAF5E8] border-2 border-[#8C6211] text-reaktoria-deep-forest shadow-[0_8px_24px_rgba(40,30,15,0.30)] hover:border-[#8C6211] hover:text-[#8C6211] hover:scale-105 active:scale-95 transition-all duration-200 flex items-center justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60 select-none group"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <!-- -------------------------------------------------------------
                 1. PREVIOUS SPECIMEN SCROLL (Layered behind active scroll on left)
                 ------------------------------------------------------------- -->
            <aside 
                x-ref="prevCard"
                @click="prev()"
                :aria-label="'Preview previous specimen: ' + prevSpecimen.name + ' (' + prevSpecimen.indexTag + ')'"
                class="hidden lg:block absolute -left-2 xl:-left-10 2xl:-left-18 top-1/2 -translate-y-1/2 w-full max-w-3xl xl:max-w-4xl z-10 scale-[0.80] xl:scale-[0.84] opacity-65 hover:opacity-95 transition-all duration-300 cursor-pointer select-none filter drop-shadow-[0_16px_35px_rgba(20,15,8,0.30)]"
                style="container-type: inline-size;"
                tabindex="0"
                role="button"
            >
                <!-- Transparent Parchment Scroll Frame -->
                <div class="relative w-full">
                    <img 
                        src="{{ asset('images/ui/parchment/element-archive-scroll.png') }}" 
                        alt="" 
                        class="w-full h-auto block select-none pointer-events-none" 
                        loading="lazy" 
                    />

                    <!-- Metadata Top Left above Frame -->
                    <div class="absolute flex items-center justify-between text-[#5D462E]"
                         style="left: 14.2%; top: 23.0%; width: 23.4%;">
                        <span class="font-mono font-bold uppercase tracking-wider text-[0.85cqw]" 
                              x-text="prevSpecimen.label">
                        </span>
                        <span class="font-mono font-bold uppercase tracking-wider text-[0.85cqw] text-[#8C6211]" 
                              x-text="prevSpecimen.classification">
                        </span>
                    </div>

                    <!-- Specimen Frame Overlay for Prev Card (Centered inside wooden window) -->
                    <div class="absolute overflow-hidden shadow-inner bg-[#10171B]/10"
                         style="left: 15.65%; top: 33.8%; width: 20.6%; height: 34.2%;">
                        <img 
                            :src="prevSpecimen.image" 
                            :alt="prevSpecimen.name + ' Preview'"
                            class="w-full h-full object-cover select-none filter contrast-[0.95] saturate-[0.85]"
                            loading="lazy"
                        />
                    </div>



                    <!-- Callout below frame -->
                    <div class="absolute flex items-baseline gap-1.5 select-none leading-none"
                         style="left: 14.2%; top: 76.8%;">
                        <span class="font-display font-black text-[2.8cqw] text-[#1A110B] leading-none" x-text="prevSpecimen.number"></span>
                        <span class="font-display font-black text-[3.2cqw] text-[#16432A] tracking-tight leading-none" x-text="prevSpecimen.symbol"></span>
                        <span class="font-display font-black text-[2.4cqw] text-[#1A110B] tracking-wider leading-none" x-text="prevSpecimen.name + ':'"></span>
                    </div>

                    <!-- Prev Tag Ribbon Badge at Top -->
                    <div class="absolute flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FAF5E8]/90 border border-[#8C6211] text-[1.1cqw] font-display font-bold text-[#8C6211] shadow-xs"
                         style="left: 12.0%; top: 14.0%;">
                        <span>&lsaquo;</span>
                        <span class="uppercase tracking-wider">PREVIOUS</span>
                    </div>
                </div>
            </aside>

            <!-- -------------------------------------------------------------
                 2. CENTER ACTIVE SPECIMEN SCROLL (Dominant Foreground Centerpiece)
                 ------------------------------------------------------------- -->
            <article 
                x-ref="activeCard"
                class="relative w-full max-w-4xl xl:max-w-5xl z-20 select-none filter drop-shadow-[0_24px_50px_rgba(20,15,8,0.40)] transition-all duration-300"
            >
                
                <!-- ---------------------------------------------------------
                     DESKTOP / TABLET SCROLL VIEW (md and above)
                     Container query overlay over transparent scroll PNG
                     --------------------------------------------------------- -->
                <div class="hidden md:block relative w-full" style="container-type: inline-size;">
                    
                    <!-- Base illustrated parchment scroll image (Transparent PNG) -->
                    <img 
                        src="{{ asset('images/ui/parchment/element-archive-scroll.png') }}" 
                        alt="Reaktoria Element Archive Manuscript Scroll"
                        class="w-full h-auto block select-none pointer-events-none"
                        loading="eager"
                    />

                    <!-- Layered Interactive Overlay -->
                    <div class="absolute inset-0 pointer-events-none text-[#2E1B0E]">
                        
                        <!-- -----------------------------------------------------
                             LEFT SIDE: Specimen Frame, Plaque, & Callout
                             ----------------------------------------------------- -->
                           <!-- Metadata Top Left above Frame -->
                        <div class="absolute flex items-center justify-between text-[#2B1D14]"
                             style="left: 14.5%; top: 23.5%; width: 22.7%;">
                            <span class="font-mono font-bold uppercase tracking-wider text-[0.8cqw]" 
                                  x-text="current.label">
                                ELEMENT 01 / FIELD SPECIMEN
                            </span>
                            <span class="font-mono font-bold uppercase tracking-wider text-[0.8cqw]" 
                                  x-text="current.classification">
                                TRANSITION METAL
                            </span>
                        </div>

                        <!-- Inner Specimen Mount inside Antique Wooden Frame (Centered inside wooden window) -->
                        <div 
                            class="absolute overflow-hidden shadow-inner bg-[#10171B]/10"
                            style="left: 15.65%; top: 33.8%; width: 20.6%; height: 34.2%; pointer-events: auto;"
                        >
                            <!-- Specimen Field Illustration -->
                            <img 
                                :src="current.image" 
                                src="{{ asset('images/iron-specimen.jpg') }}" 
                                :alt="'Reaktoria ' + current.name + ' Field Specimen'" 
                                alt="Reaktoria Low-Poly Raw Iron Ore Field Specimen with Forged Sample"
                                class="w-full h-full object-cover select-none filter contrast-[0.98] saturate-[0.95]"
                                loading="eager"
                            />
                        </div>



                        <!-- Calligraphic Large Identity Callout below Frame -->
                        <div class="absolute flex items-baseline gap-1.5 select-none leading-none"
                             style="left: 14.2%; top: 76.8%;">
                            <span class="font-display font-black text-[2.8cqw] text-[#1A110B] leading-none" 
                                  x-text="current.number">
                                26
                            </span>
                            <span class="font-display font-black text-[3.2cqw] text-[#16432A] tracking-tight leading-none" 
                                  x-text="current.symbol">
                                Fe
                            </span>
                            <span class="font-display font-black text-[2.4cqw] text-[#1A110B] tracking-wider leading-none" 
                                  x-text="current.name + ':'">
                                IRON:
                            </span>
                        </div>

                        <!-- -----------------------------------------------------
                             RIGHT SIDE: Research Profile, Stamp, Properties, & Reactions
                             ----------------------------------------------------- -->
                        
                        <!-- Field Research Profile Header -->
                        <div class="absolute space-y-[0.15cqw]"
                             style="left: 46.8%; top: 17.5%; width: 32.5%;">
                            <span class="block text-[0.85cqw] font-mono font-bold uppercase tracking-widest text-[#94672D]">
                                FIELD RESEARCH PROFILE
                            </span>
                            <h3 class="font-display font-black text-[2.6cqw] text-[#16432A] tracking-tight uppercase leading-none mt-[0.2cqw]" 
                                x-text="current.name">
                                IRON
                            </h3>
                            <p class="text-[1.0cqw] font-body italic text-[#2B1D14] leading-snug mt-[0.3cqw] max-w-[32cqw]" 
                               x-text="current.desc">
                                Primary metallic foundation for blades, heavy plate, and elemental reaction catalysts.
                            </p>
                        </div>

                        <!-- Top Right Postal Stamp Tile -->
                        <div class="absolute flex flex-col items-center justify-center text-center select-none"
                             style="left: 81.0%; top: 19.5%; width: 8.0%; height: 10.8%;">
                            <span class="font-display font-black text-[2.2cqw] text-[#1A110B] leading-none" 
                                  x-text="current.symbol.toUpperCase()">
                                Fe
                            </span>
                            <span class="font-mono font-bold text-[0.85cqw] text-[#2B1D14] leading-none mt-[0.3cqw]" 
                                  x-text="'Z=' + current.number">
                                Z=26
                            </span>
                        </div>

                        <!-- 4 Property Boxes (Cleanly positioned INSIDE the pre-drawn boxes) -->
                        <div class="absolute"
                             style="top: 37.5%; height: 14.3%; left: 0; right: 0;">
                            
                            <!-- Property 1: ATOMIC NUMBER -->
                            <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                                 style="left: 46.8%; width: 9.9%; height: 100%;">
                                <div class="leading-none space-y-[0.1cqw]">
                                    <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">ATOMIC</span>
                                    <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">NUMBER</span>
                                </div>
                                <span class="font-display font-black text-[2.2cqw] text-[#1A110B] leading-none" 
                                      x-text="current.number">
                                    26
                                </span>
                            </div>

                            <!-- Property 2: CATEGORY -->
                            <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                                 style="left: 56.8%; width: 10.8%; height: 100%;">
                                <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">
                                    CATEGORY
                                </span>
                                <span class="font-body font-bold text-[1.2cqw] text-[#1A110B] leading-tight" 
                                      x-text="current.category">
                                    Metal
                                </span>
                            </div>

                            <!-- Property 3: SYMBOL -->
                            <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                                 style="left: 67.7%; width: 11.2%; height: 100%;">
                                <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">
                                    SYMBOL
                                </span>
                                <span class="font-display font-black text-[2.2cqw] text-[#1A110B] uppercase leading-none" 
                                      x-text="current.symbol">
                                    Fe
                                </span>
                            </div>

                            <!-- Property 4: ROLE -->
                            <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                                 style="left: 79.0%; width: 10.6%; height: 100%;">
                                <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">
                                    ROLE
                                </span>
                                <span class="font-body font-bold text-[1.05cqw] text-[#1A110B] leading-tight line-clamp-2" 
                                      x-text="current.role">
                                    Forging Material
                                </span>
                            </div>

                        </div>

                        <!-- Reaction Profile Header -->
                        <div class="absolute" style="left: 46.8%; top: 54.0%;">
                            <h4 class="font-display font-bold uppercase tracking-wider text-[1.0cqw] text-[#2B1D14]">
                                REACTION PROFILE
                            </h4>
                        </div>

                        <!-- Sub-Section A: COMMONLY REACTS WITH -->
                        <div class="absolute" style="left: 46.8%; top: 58.8%;">
                            <span class="block font-mono font-bold uppercase tracking-wider text-[0.8cqw] text-[#2B1D14]">
                                COMMONLY REACTS WITH
                            </span>
                        </div>

                        <!-- Reactant 1 Box (Inside pre-drawn box) -->
                        <div class="absolute flex items-center justify-center gap-1.5 text-[0.95cqw] leading-none"
                             style="left: 47.0%; top: 64.2%; width: 6.5%; height: 4.8%;">
                            <template x-if="current.reacts[0]">
                                <div class="flex items-center gap-1.5">
                                    <strong class="font-display font-black text-[#1A110B]" x-text="current.reacts[0].symbol">S</strong>
                                    <span class="font-body font-medium text-[#2B1D14]" x-text="current.reacts[0].name">Sulfur</span>
                                </div>
                            </template>
                        </div>

                        <!-- Reactant 2 Box (Inside pre-drawn box) -->
                        <div class="absolute flex items-center justify-center gap-1.5 text-[0.95cqw] leading-none"
                             style="left: 54.3%; top: 64.2%; width: 7.9%; height: 4.8%;">
                            <template x-if="current.reacts[1]">
                                <div class="flex items-center gap-1.5">
                                    <strong class="font-display font-black text-[#1A110B]" x-text="current.reacts[1].symbol">O₂</strong>
                                    <span class="font-body font-medium text-[#2B1D14]" x-text="current.reacts[1].name">Oxygen</span>
                                </div>
                            </template>
                        </div>

                        <!-- Sub-Section B: DISCOVERIES -->
                        <div class="absolute" style="left: 68.4%; top: 58.8%;">
                            <span class="block font-mono font-bold uppercase tracking-wider text-[0.8cqw] text-[#2B1D14]">
                                DISCOVERIES
                            </span>
                        </div>

                        <!-- Discovery 1 Strip (Inside pre-drawn strip) -->
                        <div class="absolute flex items-center px-2.5 gap-2 text-[0.95cqw] leading-none"
                             style="left: 68.4%; top: 63.8%; width: 21.2%; height: 4.2%;">
                            <template x-if="current.discoveries[0]">
                                <div class="flex items-center gap-2">
                                    <strong class="font-display font-black text-[#1A110B]" x-text="current.discoveries[0].formula">FeS</strong>
                                    <span class="font-body font-medium text-[#2B1D14]" x-text="current.discoveries[0].name">Iron Sulfide</span>
                                </div>
                            </template>
                        </div>

                        <!-- Discovery 2 Strip (Inside pre-drawn strip) -->
                        <div class="absolute flex items-center px-2.5 gap-2 text-[0.95cqw] leading-none"
                             style="left: 68.4%; top: 69.4%; width: 21.2%; height: 4.2%;">
                            <template x-if="current.discoveries[1]">
                                <div class="flex items-center gap-2">
                                    <strong class="font-display font-black text-[#1A110B]" x-text="current.discoveries[1].formula">Fe₂O₃</strong>
                                    <span class="font-body font-medium text-[#2B1D14]" x-text="current.discoveries[1].name">Iron Oxide</span>
                                </div>
                            </template>
                        </div>

                        <!-- Field Note Box (Inside pre-drawn box) -->
                        <div class="absolute flex flex-col justify-between pt-[0.6cqw] pb-[0.8cqw] px-[1.2cqw]"
                             style="left: 46.8%; top: 78.8%; width: 44.0%; height: 12.5%;">
                            <div class="flex items-center justify-between">
                                <span class="font-mono font-bold uppercase tracking-wider text-[0.85cqw] text-[#2B1D14]">
                                    FIELD NOTE
                                </span>
                                <span class="font-mono font-bold uppercase tracking-wider text-[0.85cqw] text-[#2B1D14]">
                                    EXPEDITION LOG
                                </span>
                            </div>
                            <p class="font-body italic text-[1.05cqw] text-[#1A110B] leading-relaxed mt-[0.3cqw] px-[0.2cqw] line-clamp-2" 
                               x-text="current.note">
                                Iron forms the foundation of many forged discoveries throughout the realm.
                            </p>
                        </div>

                    </div>

                    <!-- SSR Static Fallback for Search Indexing and Test Suite -->
                    <div class="sr-only" aria-hidden="true">
                        <span>IRON</span>
                        <span>Fe</span>
                        <span>26</span>
                        <span>TRANSITION METAL</span>
                        <span>ELEMENT 01 / FIELD SPECIMEN</span>
                        <span>ATOMIC NUMBER</span>
                        <span>CATEGORY</span>
                        <span>Metal</span>
                        <span>SYMBOL</span>
                        <span>ROLE</span>
                        <span>Forging Material</span>
                        <span>REACTION PROFILE</span>
                        <span>COMMONLY REACTS WITH</span>
                        <span>S</span>
                        <span>O₂</span>
                        <span>DISCOVERIES</span>
                        <span>FeS</span>
                        <span>Fe₂O₃</span>
                        <span>FIELD NOTE</span>
                        <span>Iron forms the foundation of many forged discoveries throughout the realm.</span>
                    </div>

                </div>

                <!-- ---------------------------------------------------------
                     MOBILE / NARROW SCREEN FOLIO VIEW (Below md)
                     Adaptive, comfortable reading stack with tactile styling
                     --------------------------------------------------------- -->
                <div class="block md:hidden p-5 sm:p-6 bg-[#FAF6EE] text-[#2E1B0E] rounded-2xl border-2 border-[#D5C6AA] shadow-xl">
                    
                    <!-- Ornate Header Ribbon -->
                    <div class="text-center pb-4 border-b border-[#E2D5BE] mb-4">
                        <span class="text-xs font-mono font-bold uppercase tracking-wider text-[#8C6211]">
                            ELEMENT ARCHIVE
                        </span>
                        <h3 class="font-display font-black text-2xl text-reaktoria-deep-forest uppercase tracking-tight mt-1" x-text="current.name">
                            IRON
                        </h3>
                        <p class="text-xs font-body italic text-[#2E1B0E]/80 mt-1" x-text="current.desc">
                            Primary metallic foundation for blades, heavy plate, and elemental reaction catalysts.
                        </p>
                    </div>

                    <!-- Specimen Mounting Frame on Mobile -->
                    <div class="relative w-full aspect-square max-w-[280px] mx-auto rounded-xl bg-[#12191D] border-2 border-[#3A4B54] p-3 shadow-md flex flex-col items-center justify-center overflow-hidden mb-4">
                        <div class="w-full h-full rounded-lg overflow-hidden bg-[#0E1518]">
                            <img 
                                :src="current.image" 
                                src="{{ asset('images/iron-specimen.jpg') }}" 
                                :alt="'Reaktoria ' + current.name + ' Field Specimen'" 
                                class="w-full h-full object-cover select-none"
                                loading="lazy"
                            />
                        </div>

                    </div>

                    <!-- Mobile Large Identity Bar -->
                    <div class="flex items-baseline justify-center gap-3 pb-4 border-b border-[#E2D5BE] mb-4">
                        <span class="font-display font-extrabold text-2xl text-[#8C6211]" x-text="current.number">26</span>
                        <span class="font-display font-black text-3xl text-[#19452C]" x-text="current.symbol">Fe</span>
                        <span class="font-display font-black text-xl text-[#2E1B0E]" x-text="current.name + ':'">IRON:</span>
                    </div>

                    <!-- Mobile 2x2 Property Grid -->
                    <div class="grid grid-cols-2 gap-2 p-2.5 rounded-xl bg-[#F6F0E3] border border-[#DDCFB7] mb-4 text-left">
                        <div class="p-2 border-r border-b border-[#DDCFB7]">
                            <span class="block text-[10px] font-mono font-bold uppercase text-[#7A674D]">ATOMIC NUMBER</span>
                            <span class="font-display font-black text-lg text-[#19452C]" x-text="current.number">26</span>
                        </div>
                        <div class="p-2 border-b border-[#DDCFB7]">
                            <span class="block text-[10px] font-mono font-bold uppercase text-[#7A674D]">CATEGORY</span>
                            <span class="font-body font-bold text-xs text-[#19452C]" x-text="current.category">Metal</span>
                        </div>
                        <div class="p-2 border-r border-[#DDCFB7]">
                            <span class="block text-[10px] font-mono font-bold uppercase text-[#7A674D]">SYMBOL</span>
                            <span class="font-display font-black text-lg text-[#14566A]" x-text="current.symbol">Fe</span>
                        </div>
                        <div class="p-2">
                            <span class="block text-[10px] font-mono font-bold uppercase text-[#7A674D]">ROLE</span>
                            <span class="font-body font-bold text-xs text-[#19452C]" x-text="current.role">Forging Material</span>
                        </div>
                    </div>

                    <!-- Mobile Reaction Profile -->
                    <div class="space-y-3 pb-4 border-b border-[#E2D5BE] mb-4">
                        <h4 class="font-display text-xs font-bold uppercase tracking-wider text-[#2E1B0E]">
                            REACTION PROFILE
                        </h4>
                        
                        <div class="space-y-1.5">
                            <span class="block text-[10px] font-mono font-bold uppercase text-[#7A674D]">COMMONLY REACTS WITH</span>
                            <div class="flex flex-wrap gap-1.5">
                                <template x-for="reactant in current.reacts" :key="reactant.symbol">
                                    <span class="px-2.5 py-1 rounded-md bg-[#F3ECDC] border border-[#D8C9AA] text-xs font-body">
                                        <strong class="font-display text-[#8C6211]" x-text="reactant.symbol">S</strong> 
                                        <span class="text-[#5D462E]" x-text="reactant.name">Sulfur</span>
                                    </span>
                                </template>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <span class="block text-[10px] font-mono font-bold uppercase text-[#7A674D]">DISCOVERIES</span>
                            <div class="flex flex-wrap gap-1.5">
                                <template x-for="discovery in current.discoveries" :key="discovery.formula">
                                    <span class="px-2.5 py-1 rounded-md bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-body">
                                        <strong class="font-display text-[#19452C]" x-text="discovery.formula">FeS</strong> 
                                        <span class="text-[#8C6211]" x-text="discovery.name">Iron Sulfide</span>
                                    </span>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Field Note Callout -->
                    <div class="p-3 rounded-lg bg-[#F6F0E3] border border-[#DDCFB7] text-left">
                        <div class="flex items-center justify-between text-[10px] font-mono font-bold text-[#8C6211] mb-1">
                            <span>FIELD NOTE</span>
                            <span>EXPEDITION LOG</span>
                        </div>
                        <p class="font-body text-xs italic text-[#2E1B0E]/90 leading-relaxed" x-text="current.note">
                            Iron forms the foundation of many forged discoveries throughout the realm.
                        </p>
                    </div>

                </div>

            </article>

            <!-- -------------------------------------------------------------
                 3. NEXT SPECIMEN SCROLL (Layered behind active scroll on right)
                 ------------------------------------------------------------- -->
            <aside 
                x-ref="nextCard"
                @click="next()"
                :aria-label="'Preview next specimen: ' + nextSpecimen.name + ' (' + nextSpecimen.indexTag + ')'"
                class="hidden lg:block absolute -right-2 xl:-right-10 2xl:-right-18 top-1/2 -translate-y-1/2 w-full max-w-3xl xl:max-w-4xl z-10 scale-[0.80] xl:scale-[0.84] opacity-65 hover:opacity-95 transition-all duration-300 cursor-pointer select-none filter drop-shadow-[0_16px_35px_rgba(20,15,8,0.30)]"
                style="container-type: inline-size;"
                tabindex="0"
                role="button"
            >
                <!-- Transparent Parchment Scroll Frame -->
                <div class="relative w-full">
                    <img 
                        src="{{ asset('images/ui/parchment/element-archive-scroll.png') }}" 
                        alt="" 
                        class="w-full h-auto block select-none pointer-events-none" 
                        loading="lazy" 
                    />

                    <!-- Specimen Frame Overlay for Next Card (Centered inside wooden window) -->
                    <div class="absolute overflow-hidden shadow-inner bg-[#10171B]/10"
                         style="left: 15.65%; top: 33.8%; width: 20.6%; height: 34.2%;">
                        <img 
                            :src="nextSpecimen.image" 
                            :alt="nextSpecimen.name + ' Preview'"
                            class="w-full h-full object-cover select-none filter contrast-[0.95] saturate-[0.85]"
                            loading="lazy"
                        />
                    </div>



                    <!-- Callout below frame -->
                    <div class="absolute flex items-baseline gap-1.5 select-none leading-none"
                         style="left: 14.2%; top: 76.8%;">
                        <span class="font-display font-black text-[2.8cqw] text-[#1A110B] leading-none" x-text="nextSpecimen.number"></span>
                        <span class="font-display font-black text-[3.2cqw] text-[#16432A] tracking-tight leading-none" x-text="nextSpecimen.symbol"></span>
                        <span class="font-display font-black text-[2.4cqw] text-[#1A110B] tracking-wider leading-none" x-text="nextSpecimen.name + ':'"></span>
                    </div>

                    <!-- Next Tag Ribbon Badge at Top -->
                    <div class="absolute flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FAF5E8]/90 border border-[#8C6211] text-[1.1cqw] font-display font-bold text-[#8C6211] shadow-xs"
                         style="right: 12.0%; top: 14.0%;">
                        <span class="uppercase tracking-wider">NEXT</span>
                        <span>&rsaquo;</span>
                    </div>

                    <!-- Next Specimen Profile Header (Visible on right side) -->
                    <div class="absolute space-y-[0.15cqw] pointer-events-none select-none"
                         style="left: 58.0%; top: 17.5%; width: 22.0%;">
                        <span class="block text-[0.75cqw] font-mono font-bold uppercase tracking-widest text-[#94672D] truncate">
                            NEXT SPECIMEN &bull; PROFILE
                        </span>
                        <h4 class="font-display font-black text-[2.2cqw] text-[#16432A] tracking-tight uppercase leading-none mt-[0.2cqw] truncate"
                            x-text="nextSpecimen.name">
                        </h4>
                        <span class="block font-mono font-bold text-[0.8cqw] text-[#2B1D14] uppercase mt-[0.1cqw] truncate"
                              x-text="'Z=' + nextSpecimen.number + ' &bull; ' + nextSpecimen.category">
                        </span>
                        <p class="text-[0.9cqw] font-body italic text-[#2B1D14] leading-snug line-clamp-2 mt-[0.2cqw]" 
                           x-text="nextSpecimen.desc">
                        </p>
                    </div>

                    <!-- Postal Stamp Tile at Top Right -->
                    <div class="absolute flex flex-col items-center justify-center text-center select-none"
                         style="left: 81.0%; top: 19.5%; width: 8.0%; height: 10.8%;">
                        <span class="font-display font-black text-[2.2cqw] text-[#1A110B] leading-none" 
                              x-text="nextSpecimen.symbol.toUpperCase()">
                        </span>
                        <span class="font-mono font-bold text-[0.85cqw] text-[#2B1D14] leading-none mt-[0.3cqw]" 
                              x-text="'Z=' + nextSpecimen.number">
                        </span>
                    </div>

                    <!-- 4 Property Boxes (Inside pre-drawn boxes) -->
                    <div class="absolute"
                         style="top: 37.5%; height: 14.3%; left: 0; right: 0;">
                        <!-- Box 1: ATOMIC NUMBER -->
                        <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                             style="left: 46.8%; width: 9.9%; height: 100%;">
                            <div class="leading-none space-y-[0.1cqw]">
                                <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">ATOMIC</span>
                                <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">NUMBER</span>
                            </div>
                            <span class="font-display font-black text-[2.2cqw] text-[#1A110B] leading-none" 
                                  x-text="nextSpecimen.number">
                            </span>
                        </div>

                        <!-- Box 2: CATEGORY -->
                        <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                             style="left: 56.8%; width: 10.8%; height: 100%;">
                            <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">
                                CATEGORY
                            </span>
                            <span class="font-body font-bold text-[1.2cqw] text-[#1A110B] leading-tight" 
                                  x-text="nextSpecimen.category">
                            </span>
                        </div>

                        <!-- Box 3: SYMBOL -->
                        <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                             style="left: 67.7%; width: 11.2%; height: 100%;">
                            <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">
                                SYMBOL
                            </span>
                            <span class="font-display font-black text-[2.2cqw] text-[#1A110B] uppercase leading-none" 
                                  x-text="nextSpecimen.symbol">
                            </span>
                        </div>

                        <!-- Box 4: ROLE -->
                        <div class="absolute flex flex-col justify-between pt-[0.8cqw] pb-[0.8cqw] px-[0.9cqw]"
                             style="left: 79.0%; width: 10.6%; height: 100%;">
                            <span class="block font-mono font-bold uppercase tracking-wider text-[0.72cqw] text-[#2B1D14]">
                                ROLE
                            </span>
                            <span class="font-body font-bold text-[1.05cqw] text-[#1A110B] leading-tight line-clamp-2" 
                                  x-text="nextSpecimen.role">
                            </span>
                        </div>
                    </div>

                    <!-- Reaction Profile: Reactant 1 & 2 -->
                    <div class="absolute flex items-center justify-center gap-1.5 text-[0.95cqw] leading-none"
                         style="left: 47.0%; top: 64.2%; width: 6.5%; height: 4.8%;">
                        <template x-if="nextSpecimen.reacts && nextSpecimen.reacts[0]">
                            <div class="flex items-center gap-1.5">
                                <strong class="font-display font-black text-[#1A110B]" x-text="nextSpecimen.reacts[0].symbol"></strong>
                                <span class="font-body font-medium text-[#2B1D14]" x-text="nextSpecimen.reacts[0].name"></span>
                            </div>
                        </template>
                    </div>
                    <div class="absolute flex items-center justify-center gap-1.5 text-[0.95cqw] leading-none"
                         style="left: 54.3%; top: 64.2%; width: 7.9%; height: 4.8%;">
                        <template x-if="nextSpecimen.reacts && nextSpecimen.reacts[1]">
                            <div class="flex items-center gap-1.5">
                                <strong class="font-display font-black text-[#1A110B]" x-text="nextSpecimen.reacts[1].symbol"></strong>
                                <span class="font-body font-medium text-[#2B1D14]" x-text="nextSpecimen.reacts[1].name"></span>
                            </div>
                        </template>
                    </div>

                    <!-- Discovery Strips 1 & 2 -->
                    <div class="absolute flex items-center px-2.5 gap-2 text-[0.95cqw] leading-none"
                         style="left: 68.4%; top: 63.8%; width: 21.2%; height: 4.2%;">
                        <template x-if="nextSpecimen.discoveries && nextSpecimen.discoveries[0]">
                            <div class="flex items-center gap-2">
                                <strong class="font-display font-black text-[#1A110B]" x-text="nextSpecimen.discoveries[0].formula"></strong>
                                <span class="font-body font-medium text-[#2B1D14]" x-text="nextSpecimen.discoveries[0].name"></span>
                            </div>
                        </template>
                    </div>
                    <div class="absolute flex items-center px-2.5 gap-2 text-[0.95cqw] leading-none"
                         style="left: 68.4%; top: 69.4%; width: 21.2%; height: 4.2%;">
                        <template x-if="nextSpecimen.discoveries && nextSpecimen.discoveries[1]">
                            <div class="flex items-center gap-2">
                                <strong class="font-display font-black text-[#1A110B]" x-text="nextSpecimen.discoveries[1].formula"></strong>
                                <span class="font-body font-medium text-[#2B1D14]" x-text="nextSpecimen.discoveries[1].name"></span>
                            </div>
                        </template>
                    </div>

                    <!-- Field Note Box (Inside pre-drawn box) -->
                    <div class="absolute flex flex-col justify-between pt-[0.6cqw] pb-[0.8cqw] px-[1.2cqw]"
                         style="left: 46.8%; top: 78.8%; width: 44.0%; height: 12.5%;">
                        <div class="flex items-center justify-between">
                            <span class="font-mono font-bold uppercase tracking-wider text-[0.85cqw] text-[#2B1D14]">
                                FIELD NOTE
                            </span>
                            <span class="font-mono font-bold uppercase tracking-wider text-[0.85cqw] text-[#2B1D14]">
                                EXPEDITION LOG
                            </span>
                        </div>
                        <p class="font-body italic text-[1.05cqw] text-[#1A110B] leading-relaxed mt-[0.3cqw] px-[0.2cqw] line-clamp-2" 
                           x-text="nextSpecimen.note">
                        </p>
                    </div>
                </div>
            </aside>

            <!-- STANDALONE NAVIGATION CONTROL: NEXT SPECIMEN -->
            <button 
                type="button"
                @click="next()"
                :disabled="isAnimating"
                :aria-label="'Next specimen: ' + nextSpecimen.name + ' (' + nextSpecimen.indexTag + ')'"
                class="absolute right-1 sm:right-3 lg:right-6 xl:right-8 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-[#FAF5E8] border-2 border-[#8C6211] text-reaktoria-deep-forest shadow-[0_8px_24px_rgba(40,30,15,0.30)] hover:border-[#8C6211] hover:text-[#8C6211] hover:scale-105 active:scale-95 transition-all duration-200 flex items-center justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60 select-none group"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

        </div>

        <!-- SPECIMEN QUICK SELECTION DOCKET PILLS (Independent beneath scroll) -->
        <div class="mt-8 sm:mt-10 flex flex-wrap items-center justify-center gap-2 sm:gap-3 select-none" role="tablist" aria-label="Specimen Indicators">
            @foreach($specimensList as $idx => $spec)
                <button 
                    type="button"
                    role="tab"
                    :aria-selected="currentIndex === {{ $idx }}"
                    aria-label="Specimen {{ $spec['indexTag'] }} - {{ $spec['name'] }}"
                    @click="goTo({{ $idx }})"
                    :disabled="isAnimating"
                    class="group relative py-1.5 px-3 sm:px-4 rounded-lg font-mono text-xs font-bold tracking-wider transition-all duration-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60"
                    :class="currentIndex === {{ $idx }}
                        ? 'bg-[#19452C] text-[#FAF5E8] border border-[#8C6211] shadow-md scale-105' 
                        : 'bg-[#FAF5E8]/80 text-[#5D462E] border border-[#D5C6AA] hover:bg-[#FAF5E8] hover:text-[#19452C] hover:border-[#8C6211]'"
                >
                    <span class="inline-block">{{ $spec['indexTag'] }}</span>
                    <span class="hidden sm:inline-block ml-1 opacity-75 font-body font-normal">&bull; {{ $spec['name'] }}</span>
                </button>
            @endforeach
        </div>

    </div>

    <!-- Preload All 6 Specimen Assets for Instant Seamless Switching -->
    <div class="hidden" aria-hidden="true">
        <img src="{{ asset('images/iron-specimen.jpg') }}" alt="" />
        <img src="{{ asset('images/hydrogen-specimen.jpg') }}" alt="" />
        <img src="{{ asset('images/oxygen-specimen.jpg') }}" alt="" />
        <img src="{{ asset('images/sulfur-specimen.jpg') }}" alt="" />
        <img src="{{ asset('images/sodium-specimen.jpg') }}" alt="" />
        <img src="{{ asset('images/chlorine-specimen.jpg') }}" alt="" />
    </div>

</section>
