<!-- Section 8 / Pilar 4: Elemental Archive (Interactive Specimen Selection Carousel) -->
<section id="archive" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#EFE8D9] via-[#F4EFE4] to-[#E9DFC9]">

    <!-- Global Anchor for Navbar and Footer Navigation (#archive, #elemental-archive) -->
    <span id="elemental-archive" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental archive background -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <img 
            src="{{ asset('images/backgrounds/archive-bg.jpg') }}" 
            alt="Reaktoria Elemental Archive Study and Specimen Dossier Background" 
            class="w-full h-full object-cover object-center select-none pointer-events-none opacity-40 sm:opacity-45 contrast-[0.95] saturate-[0.92] brightness-[1.01]"
            loading="lazy"
        />

        <div class="absolute inset-x-0 top-0 h-28 sm:h-32 bg-gradient-to-b from-[#EFE8D9] to-transparent"></div>
        <div class="absolute inset-0 bg-[#F4EFE4]/18 pointer-events-none"></div>
        <div class="absolute bottom-0 inset-x-0 h-28 sm:h-32 bg-gradient-to-t from-[#E9DFC9] to-transparent pointer-events-none"></div>
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

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
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
                const dur = 0.65;
                const ease = 'power2.out';

                const activeCard = this.$refs.activeCard;
                const prevCard = this.$refs.prevCard;
                const nextCard = this.$refs.nextCard;
                const activeArt = this.$refs.activeArt;
                const activeDetails = this.$refs.activeDetails;

                const tl = window.gsap.timeline({
                    onComplete: () => {
                        this.isAnimating = false;
                    }
                });

                if (direction === 'next') {
                    tl.to(activeCard, {
                        x: -36,
                        scale: 0.95,
                        opacity: 0.45,
                        duration: dur * 0.45,
                        ease: 'power2.in'
                    }, 0);

                    if (prevCard) {
                        tl.to(prevCard, { x: -45, opacity: 0.2, duration: dur * 0.45, ease: 'power2.in' }, 0);
                    }
                    if (nextCard) {
                        tl.to(nextCard, { x: -35, scale: 0.94, opacity: 0.85, duration: dur * 0.45, ease: 'power2.out' }, 0);
                    }

                    tl.add(() => {
                        this.currentIndex = newIndex;
                    });

                    tl.fromTo(activeCard, 
                        { x: 36, scale: 0.95, opacity: 0.45 }, 
                        { x: 0, scale: 1, opacity: 1, duration: dur * 0.55, ease: ease }
                    );

                    if (activeArt) {
                        tl.fromTo(activeArt, { scale: 0.92, opacity: 0.7 }, { scale: 1, opacity: 1, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }
                    if (activeDetails) {
                        tl.fromTo(activeDetails, { y: 8, opacity: 0.7 }, { y: 0, opacity: 1, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }

                    if (prevCard) {
                        tl.fromTo(prevCard, { x: 0, opacity: 0.35 }, { x: 0, opacity: 0.65, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }
                    if (nextCard) {
                        tl.fromTo(nextCard, { x: 0, opacity: 0.35 }, { x: 0, opacity: 0.65, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }
                } else {
                    tl.to(activeCard, {
                        x: 36,
                        scale: 0.95,
                        opacity: 0.45,
                        duration: dur * 0.45,
                        ease: 'power2.in'
                    }, 0);

                    if (nextCard) {
                        tl.to(nextCard, { x: 45, opacity: 0.2, duration: dur * 0.45, ease: 'power2.in' }, 0);
                    }
                    if (prevCard) {
                        tl.to(prevCard, { x: 35, scale: 0.94, opacity: 0.85, duration: dur * 0.45, ease: 'power2.out' }, 0);
                    }

                    tl.add(() => {
                        this.currentIndex = newIndex;
                    });

                    tl.fromTo(activeCard, 
                        { x: -36, scale: 0.95, opacity: 0.45 }, 
                        { x: 0, scale: 1, opacity: 1, duration: dur * 0.55, ease: ease }
                    );

                    if (activeArt) {
                        tl.fromTo(activeArt, { scale: 0.92, opacity: 0.7 }, { scale: 1, opacity: 1, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }
                    if (activeDetails) {
                        tl.fromTo(activeDetails, { y: 8, opacity: 0.7 }, { y: 0, opacity: 1, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }

                    if (prevCard) {
                        tl.fromTo(prevCard, { x: 0, opacity: 0.35 }, { x: 0, opacity: 0.65, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }
                    if (nextCard) {
                        tl.fromTo(nextCard, { x: 0, opacity: 0.35 }, { x: 0, opacity: 0.65, duration: dur * 0.5, ease: ease }, '-=' + (dur * 0.5));
                    }
                }
            }
         }">

        <!-- SECTION HEADER: In-World Scientific Archive -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-10 sm:mb-12 lg:mb-14">
            
            <div class="space-y-3.5 max-w-2xl">
                <span class="text-xs font-bold font-display uppercase tracking-widest text-[#2F6B3C]">
                    ELEMENTAL ARCHIVE
                </span>

                <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08]">
                    KNOW WHAT YOU'RE MIXING.
                </h2>

                <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/80 leading-relaxed font-body">
                    Every discovery begins with an element. Study their properties, understand their behavior, and uncover what happens when they react.
                </p>
            </div>

            <!-- Archival Registry Heading Line -->
            <div class="text-xs font-display font-semibold tracking-wider text-[#5A452E] select-none self-start md:self-end">
                <span class="text-reaktoria-deep-forest font-bold uppercase">FIELD ARCHIVE</span>
                <span class="text-[#D5C6AA]">&bull;</span>
                <span class="uppercase">REAKTORIA RESEARCH</span>
            </div>

        </div>

        <!-- =================================================================
             INTERACTIVE SPECIMEN SELECTION CAROUSEL
             Video game character selection screen inspired composition:
             Previous Preview (Left, depth-layered) <- Active Dossier (Center, dominant) -> Next Preview (Right, depth-layered)
             ================================================================= -->
        <div 
            class="relative w-full flex items-center justify-center min-h-[560px] sm:min-h-[580px] lg:min-h-[540px] px-2 sm:px-6 lg:px-12 focus:outline-none"
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
                class="absolute left-0 sm:left-1 lg:-left-4 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-[#FAF6EE] border-2 border-[#D5C6AA] text-reaktoria-deep-forest shadow-[0_8px_20px_rgba(40,30,15,0.12)] hover:border-[#8C6211] hover:text-[#8C6211] hover:scale-105 active:scale-95 transition-all duration-200 flex items-center justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60 select-none group"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <!-- PREVIOUS SPECIMEN PREVIEW CARD (Layered behind active card on left) -->
            <aside 
                x-ref="prevCard"
                @click="prev()"
                :aria-label="'Preview previous specimen: ' + prevSpecimen.name + ' (' + prevSpecimen.indexTag + ')'"
                class="hidden md:flex absolute left-2 lg:left-6 top-1/2 -translate-y-1/2 w-[230px] lg:w-[280px] h-[450px] lg:h-[480px] rounded-2xl border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-md flex-col justify-between p-5 z-10 scale-[0.88] lg:scale-[0.9] opacity-65 hover:opacity-90 transition-all duration-300 cursor-pointer select-none group focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60"
                tabindex="0"
                role="button"
            >
                <!-- Side Card Header -->
                <div class="flex items-center justify-between pb-3 border-b border-[#E2D5BE]">
                    <span class="font-display text-xs font-bold text-[#8C6211] tracking-wider" x-text="prevSpecimen.indexTag">
                        06 CL
                    </span>
                    <span class="font-display text-[10px] font-bold text-[#5A452E] uppercase tracking-wider" x-text="'Z=' + prevSpecimen.number">
                        Z=17
                    </span>
                </div>

                <!-- Side Card Specimen Artwork Plate -->
                <div class="my-auto relative w-full aspect-square rounded-xl bg-[#12191D] border border-[#2B3B42] p-3 flex flex-col items-center justify-center overflow-hidden">
                    <div class="w-full h-full rounded-lg overflow-hidden border border-[#3A4B54] bg-[#0E1518]">
                        <img 
                            :src="prevSpecimen.image" 
                            :alt="prevSpecimen.name + ' Specimen Preview'"
                            class="w-full h-full object-cover filter contrast-[0.95] saturate-[0.85] group-hover:saturate-100 transition-all duration-300" 
                            loading="lazy" 
                        />
                    </div>
                    <div class="absolute bottom-2 inset-x-0 flex justify-center">
                        <span class="px-2 py-0.5 rounded bg-black/60 font-display text-[10px] text-[#E3B44C] font-bold tracking-widest backdrop-blur-xs" x-text="'[' + prevSpecimen.symbol + ']'">
                            [Cl]
                        </span>
                    </div>
                </div>

                <!-- Side Card Bottom Identity -->
                <div class="pt-3 border-t border-[#E2D5BE] space-y-1">
                    <div class="flex items-baseline justify-between">
                        <h4 class="font-display font-bold text-base text-reaktoria-deep-forest tracking-tight group-hover:text-[#8C6211] transition-colors" x-text="prevSpecimen.name">
                            CHLORINE
                        </h4>
                        <span class="font-display font-bold text-sm text-[#14566A]" x-text="prevSpecimen.symbol">
                            Cl
                        </span>
                    </div>
                    <p class="font-body text-xs text-[#7A674D] truncate" x-text="prevSpecimen.role">
                        Corrosive Solvent
                    </p>
                    <div class="pt-1.5 flex items-center gap-1.5 text-[11px] font-display font-bold text-[#8C6211] group-hover:-translate-x-1 transition-transform">
                        <span>&lsaquo;</span>
                        <span class="uppercase tracking-wider">PREVIOUS</span>
                    </div>
                </div>
            </aside>

            <!-- CENTER ACTIVE SPECIMEN DOSSIER CARD (Primary Focus, Character Selection Centerpiece) -->
            <article 
                x-ref="activeCard"
                class="relative w-full max-w-4xl z-20 rounded-2xl sm:rounded-3xl overflow-hidden border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-[0_22px_55px_rgba(40,30,15,0.12)]"
            >
                <!-- Main Two-Column Archive Workspace -->
                <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch min-h-[500px]">
                    
                    <!-- LEFT COLUMN: Specimen Mounting Pedestal -->
                    <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between bg-[#F4ECE0]/80 border-b lg:border-b-0 lg:border-r border-[#DDCFB7]">
                        
                        <!-- Archival Label Top -->
                        <div class="flex items-center justify-between gap-2 mb-3 select-none">
                            <span class="text-xs font-display font-bold uppercase tracking-widest text-[#5A452E]" x-text="current.label">
                                ELEMENT 01 / FIELD SPECIMEN
                            </span>
                            <span class="text-xs font-display font-bold uppercase tracking-wider text-[#8C6211]" x-text="current.classification">
                                TRANSITION METAL
                            </span>
                        </div>

                        <!-- Clean Medieval Specimen Mounting Chamber -->
                        <div class="relative w-full rounded-2xl bg-[#12191D] border-2 border-[#2B3B42] shadow-inner p-6 flex flex-col items-center justify-center my-3 h-[290px] sm:h-[320px] overflow-hidden group">
                            
                            <!-- Ambient Alchemical Hearth Illumination -->
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(227,180,76,0.12)_0%,_transparent_65%)] pointer-events-none"></div>

                            <!-- Real Elemental Field Specimen Artwork Plate -->
                            <div 
                                x-ref="activeArt"
                                class="relative z-10 w-[200px] h-[200px] sm:w-[220px] sm:h-[220px] aspect-square rounded-xl overflow-hidden border border-[#3A4B54] shadow-[0_12px_28px_rgba(0,0,0,0.6)] transition-transform duration-500 group-hover:scale-[1.02] bg-[#0E1518] shrink-0"
                            >
                                <img 
                                    :src="current.image"
                                    src="{{ asset('images/iron-specimen.jpg') }}" 
                                    :alt="'Reaktoria Low-Poly ' + current.name + ' Field Specimen'"
                                    alt="Reaktoria Low-Poly Raw Iron Ore Field Specimen with Forged Sample" 
                                    class="w-full h-full object-cover select-none"
                                    loading="lazy"
                                />
                            </div>

                            <!-- Identification Inscription below Mount -->
                            <div class="relative z-10 mt-3 flex items-center gap-2 font-display text-xs text-[#D5C6AA] select-none shrink-0">
                                <span class="font-bold text-white tracking-widest" x-text="current.name + ' SPECIMEN'">IRON SPECIMEN</span>
                                <span class="text-stone-500">&bull;</span>
                                <span class="text-[#E3B44C] font-bold" x-text="'[' + current.symbol + ']'">[Fe]</span>
                            </div>

                        </div>

                        <!-- Specimen Identity Bar (26, Fe, IRON) -->
                        <div class="pt-4 border-t border-[#DDCFB7] flex items-center justify-between gap-3">
                            <div class="flex items-baseline gap-3">
                                <span class="font-display text-2xl sm:text-3xl font-extrabold text-[#8C6211]" x-text="current.number">26</span>
                                <span class="font-display font-black text-3xl sm:text-4xl text-reaktoria-deep-forest tracking-tight" x-text="current.symbol">Fe</span>
                                <span class="font-display font-bold text-lg sm:text-xl text-[#3A2E1D] tracking-wide" x-text="current.name">IRON</span>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN: Scientific Dossier & Research Ledger -->
                    <div 
                        x-ref="activeDetails"
                        class="lg:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between bg-[#FAF6EE]"
                    >
                        
                        <!-- Research Dossier Header -->
                        <div class="flex items-start justify-between gap-4 pb-5 border-b border-[#E2D5BE]">
                            <div class="space-y-1">
                                <span class="text-xs font-display font-bold uppercase tracking-widest text-[#8C6211]">
                                    FIELD RESEARCH PROFILE
                                </span>
                                <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-reaktoria-deep-forest tracking-tight" x-text="current.name">
                                    IRON
                                </h3>
                                <p class="text-xs sm:text-sm font-body text-reaktoria-ink/75" x-text="current.desc">
                                    Primary metallic foundation for blades, heavy plate, and elemental reaction catalysts.
                                </p>
                            </div>

                            <!-- Symbol Tile: Fe -->
                            <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl bg-[#EFE6D4] border-2 border-[#D5C6AA] flex flex-col items-center justify-center shadow-xs select-none shrink-0">
                                <span class="font-display font-black text-3xl sm:text-4xl text-[#14566A]" x-text="current.symbol">Fe</span>
                                <span class="font-display text-[10px] font-bold text-[#8C6211] -mt-1" x-text="'Z=' + current.number">Z=26</span>
                            </div>
                        </div>

                        <!-- Properties Grid: Clean Ruled Data Table -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 border border-[#DDCFB7] divide-y sm:divide-y-0 sm:divide-x divide-[#DDCFB7] rounded-xl bg-[#F6F0E3]/70 overflow-hidden shadow-2xs my-5">
                            
                            <!-- Property 1: ATOMIC NUMBER -->
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                                <span class="block text-[11px] font-display font-bold uppercase tracking-wider text-[#7A674D]">
                                    ATOMIC NUMBER
                                </span>
                                <span class="font-display text-2xl font-extrabold text-reaktoria-deep-forest mt-1" x-text="current.number">
                                    26
                                </span>
                            </div>

                            <!-- Property 2: CATEGORY -->
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                                <span class="block text-[11px] font-display font-bold uppercase tracking-wider text-[#7A674D]">
                                    CATEGORY
                                </span>
                                <span class="font-body text-sm sm:text-base font-bold text-reaktoria-deep-forest mt-1" x-text="current.category">
                                    Metal
                                </span>
                            </div>

                            <!-- Property 3: SYMBOL -->
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                                <span class="block text-[11px] font-display font-bold uppercase tracking-wider text-[#7A674D]">
                                    SYMBOL
                                </span>
                                <span class="font-display text-2xl font-black text-[#14566A] mt-1" x-text="current.symbol">
                                    Fe
                                </span>
                            </div>

                            <!-- Property 4: ROLE -->
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                                <span class="block text-[11px] font-display font-bold uppercase tracking-wider text-[#7A674D]">
                                    ROLE
                                </span>
                                <span class="font-body text-xs sm:text-sm font-bold text-reaktoria-deep-forest leading-snug mt-1" x-text="current.role">
                                    Forging Material
                                </span>
                            </div>

                        </div>

                        <!-- Reaction Profile & Discoveries Section -->
                        <div class="py-5 border-t border-[#E2D5BE] space-y-4">
                            
                            <h4 class="font-display text-xs font-bold uppercase tracking-widest text-[#B84E1F]">
                                REACTION PROFILE
                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                
                                <!-- Sub-Section A: COMMONLY REACTS WITH -->
                                <div class="space-y-2">
                                    <span class="block text-xs font-display font-bold uppercase tracking-wider text-[#7A674D]">
                                        COMMONLY REACTS WITH
                                    </span>
                                    
                                    <div class="flex flex-wrap items-center gap-2 min-h-[2.5rem]">
                                        <template x-for="reactant in current.reacts" :key="reactant.symbol">
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F3ECDC] border border-[#D8C9AA] text-xs font-body shadow-2xs shrink-0">
                                                <span class="font-display font-bold text-[#8C6211] text-sm" x-text="reactant.symbol">S</span>
                                                <span class="text-xs text-[#7A674D]" x-text="reactant.name">Sulfur</span>
                                            </div>
                                        </template>

                                        <!-- Static SSR Fallback for Iron Reactants (guarantees text indexing) -->
                                        <div class="contents" x-show="false">
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#FAF2DC] border border-[#DECFA9] text-xs font-body">
                                                <span class="font-display font-bold text-[#8C6211] text-sm">S</span>
                                                <span class="text-xs text-[#7A674D]">Sulfur</span>
                                            </div>
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#E8F4F8] border border-[#C5DFE8] text-xs font-body">
                                                <span class="font-display font-bold text-[#14566A] text-sm">O₂</span>
                                                <span class="text-xs text-[#558190]">Oxygen</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sub-Section B: DISCOVERIES -->
                                <div class="space-y-2">
                                    <span class="block text-xs font-display font-bold uppercase tracking-wider text-[#7A674D]">
                                        DISCOVERIES
                                    </span>
                                    
                                    <div class="flex flex-wrap items-center gap-2 min-h-[2.5rem]">
                                        <template x-for="discovery in current.discoveries" :key="discovery.formula">
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-body shadow-2xs shrink-0">
                                                <span class="font-display font-bold text-reaktoria-deep-forest text-sm" x-text="discovery.formula">FeS</span>
                                                <span class="text-xs text-[#8C6211]" x-text="discovery.name">Iron Sulfide</span>
                                            </div>
                                        </template>

                                        <!-- Static SSR Fallback for Iron Discoveries (guarantees text indexing) -->
                                        <div class="contents" x-show="false">
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-body">
                                                <span class="font-display font-bold text-reaktoria-deep-forest text-sm">FeS</span>
                                                <span class="text-xs text-[#8C6211]">Iron Sulfide</span>
                                            </div>
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-body">
                                                <span class="font-display font-bold text-reaktoria-deep-forest text-sm">Fe₂O₃</span>
                                                <span class="text-xs text-[#B84E1F]">Iron Oxide</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Archival Field Observation Callout -->
                        <div class="mt-4 p-4 rounded-xl bg-[#F6F0E3]/90 border border-[#DDCFB7] shadow-2xs min-h-[5rem] flex flex-col justify-center">
                            <div class="flex items-center justify-between gap-2 mb-1">
                                <span class="text-xs font-display font-bold uppercase tracking-widest text-[#B84E1F]">
                                    FIELD NOTE
                                </span>
                                <span class="text-xs font-display text-[#8C7355] uppercase">Expedition Log</span>
                            </div>
                            <p class="font-body text-sm text-reaktoria-ink/85 italic leading-relaxed" x-text="current.note">
                                Iron forms the foundation of many forged discoveries throughout the realm.
                            </p>
                        </div>

                    </div>

                </div>
            </article>

            <!-- NEXT SPECIMEN PREVIEW CARD (Layered behind active card on right) -->
            <aside 
                x-ref="nextCard"
                @click="next()"
                :aria-label="'Preview next specimen: ' + nextSpecimen.name + ' (' + nextSpecimen.indexTag + ')'"
                class="hidden md:flex absolute right-2 lg:right-6 top-1/2 -translate-y-1/2 w-[230px] lg:w-[280px] h-[450px] lg:h-[480px] rounded-2xl border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-md flex-col justify-between p-5 z-10 scale-[0.88] lg:scale-[0.9] opacity-65 hover:opacity-90 transition-all duration-300 cursor-pointer select-none group focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60"
                tabindex="0"
                role="button"
            >
                <!-- Side Card Header -->
                <div class="flex items-center justify-between pb-3 border-b border-[#E2D5BE]">
                    <span class="font-display text-xs font-bold text-[#8C6211] tracking-wider" x-text="nextSpecimen.indexTag">
                        02 H
                    </span>
                    <span class="font-display text-[10px] font-bold text-[#5A452E] uppercase tracking-wider" x-text="'Z=' + nextSpecimen.number">
                        Z=01
                    </span>
                </div>

                <!-- Side Card Specimen Artwork Plate -->
                <div class="my-auto relative w-full aspect-square rounded-xl bg-[#12191D] border border-[#2B3B42] p-3 flex flex-col items-center justify-center overflow-hidden">
                    <div class="w-full h-full rounded-lg overflow-hidden border border-[#3A4B54] bg-[#0E1518]">
                        <img 
                            :src="nextSpecimen.image" 
                            :alt="nextSpecimen.name + ' Specimen Preview'"
                            class="w-full h-full object-cover filter contrast-[0.95] saturate-[0.85] group-hover:saturate-100 transition-all duration-300" 
                            loading="lazy" 
                        />
                    </div>
                    <div class="absolute bottom-2 inset-x-0 flex justify-center">
                        <span class="px-2 py-0.5 rounded bg-black/60 font-display text-[10px] text-[#E3B44C] font-bold tracking-widest backdrop-blur-xs" x-text="'[' + nextSpecimen.symbol + ']'">
                            [H]
                        </span>
                    </div>
                </div>

                <!-- Side Card Bottom Identity -->
                <div class="pt-3 border-t border-[#E2D5BE] space-y-1">
                    <div class="flex items-baseline justify-between">
                        <h4 class="font-display font-bold text-base text-reaktoria-deep-forest tracking-tight group-hover:text-[#8C6211] transition-colors" x-text="nextSpecimen.name">
                            HYDROGEN
                        </h4>
                        <span class="font-display font-bold text-sm text-[#14566A]" x-text="nextSpecimen.symbol">
                            H
                        </span>
                    </div>
                    <p class="font-body text-xs text-[#7A674D] truncate" x-text="nextSpecimen.role">
                        Volatile Fuel
                    </p>
                    <div class="pt-1.5 flex items-center justify-end gap-1.5 text-[11px] font-display font-bold text-[#8C6211] group-hover:translate-x-1 transition-transform">
                        <span class="uppercase tracking-wider">NEXT</span>
                        <span>&rsaquo;</span>
                    </div>
                </div>
            </aside>

            <!-- STANDALONE NAVIGATION CONTROL: NEXT SPECIMEN -->
            <button 
                type="button"
                @click="next()"
                :disabled="isAnimating"
                :aria-label="'Next specimen: ' + nextSpecimen.name + ' (' + nextSpecimen.indexTag + ')'"
                class="absolute right-0 sm:right-1 lg:-right-4 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-[#FAF6EE] border-2 border-[#D5C6AA] text-reaktoria-deep-forest shadow-[0_8px_20px_rgba(40,30,15,0.12)] hover:border-[#8C6211] hover:text-[#8C6211] hover:scale-105 active:scale-95 transition-all duration-200 flex items-center justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60 select-none group"
            >
                <svg class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

        </div>

        <!-- MINIMAL STANDALONE SPECIMEN INDICATOR (Independent beneath carousel) -->
        <div class="mt-8 sm:mt-10 flex items-center justify-center gap-2.5 sm:gap-3 select-none" role="tablist" aria-label="Specimen Indicators">
            @foreach($specimensList as $idx => $spec)
                <button 
                    type="button"
                    role="tab"
                    :aria-selected="currentIndex === {{ $idx }}"
                    aria-label="Specimen {{ $spec['indexTag'] }} - {{ $spec['name'] }}"
                    @click="goTo({{ $idx }})"
                    :disabled="isAnimating"
                    class="group relative py-2 px-1 focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60 rounded-full cursor-pointer transition-all duration-300"
                >
                    <span 
                        class="block h-2 rounded-full transition-all duration-500 ease-out"
                        :class="currentIndex === {{ $idx }} 
                            ? 'w-8 sm:w-10 bg-[#19452C] shadow-xs' 
                            : 'w-2.5 bg-[#D5C6AA] group-hover:bg-[#8C6211] group-hover:w-3.5'"
                    ></span>
                    <span class="sr-only">{{ $spec['indexTag'] }}</span>
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
