<!-- Section 8 / Pilar 4: Elemental Archive -->
<section id="archive" class="relative py-16 sm:py-20 lg:py-24 overflow-hidden bg-gradient-to-b from-[#EFE8D9] via-[#F4EFE4] to-[#E9DFC9]">

    <!-- Global Anchor for Navbar and Footer Navigation (#archive, #elemental-archive) -->
    <span id="elemental-archive" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental archive background -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <img 
            src="{{ asset('images/backgrounds/archive-bg.jpg') }}" 
            alt="Reaktoria Elemental Archive Study and Specimen Dossier Background" 
            class="w-full h-full object-cover object-center select-none pointer-events-none opacity-45 sm:opacity-50 contrast-[0.95] saturate-[0.92] brightness-[1.01]"
            loading="lazy"
        />

        <div class="absolute inset-x-0 top-0 h-28 sm:h-32 bg-gradient-to-b from-[#EFE8D9] via-[#EFE8D9]/75 to-transparent"></div>
        <div class="absolute inset-0 bg-[#F4EFE4]/18 pointer-events-none"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(244,239,228,0.45)_0%,_rgba(244,239,228,0.10)_50%,_transparent_75%)] pointer-events-none"></div>

        <!-- Faint Ambient Archival Glows -->
        <div class="absolute top-1/4 left-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(227,180,76,0.06)_0%,_transparent_70%)]"></div>
        <div class="absolute bottom-1/4 right-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(66,169,198,0.05)_0%,_transparent_70%)]"></div>

        <!-- Gentle Side Boundary Softening -->
        <div class="absolute inset-y-0 left-0 w-16 sm:w-24 bg-gradient-to-r from-[#DFD4C2]/15 to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-16 sm:w-24 bg-gradient-to-l from-[#DFD4C2]/15 to-transparent pointer-events-none"></div>

        <!-- Soft Bottom Blending into Gallery (#E9DFC9) -->
        <div class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-t from-[#E9DFC9] via-[#E9DFC9]/75 to-transparent pointer-events-none"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10"
         x-data="{
            activeTab: 'FE',
            specimens: {
                'FE': {
                    number: '26',
                    symbol: 'Fe',
                    name: 'IRON',
                    label: 'ELEMENT 01 / FIELD SPECIMEN',
                    image: '{{ asset('images/iron-specimen.jpg') }}',
                    category: 'Metal',
                    role: 'Forging Material',
                    classification: 'TRANSITION METAL',
                    reacts: [
                        { symbol: 'S', name: 'Sulfur' },
                        { symbol: 'O₂', name: 'Oxygen' }
                    ],
                    discoveries: [
                        { formula: 'FeS', name: 'Iron Sulfide', detail: 'Pyros Blade Reagent' },
                        { formula: 'Fe₂O₃', name: 'Iron Oxide', detail: 'Thermal Catalyst' }
                    ],
                    note: 'Iron forms the foundation of many forged discoveries throughout the realm.'
                },
                'H': {
                    number: '01',
                    symbol: 'H',
                    name: 'HYDROGEN',
                    label: 'ELEMENT 02 / FIELD SPECIMEN',
                    image: '{{ asset('images/hydrogen-specimen.jpg') }}',
                    category: 'Nonmetal',
                    role: 'Volatile Fuel',
                    classification: 'REACTIVE NONMETAL',
                    reacts: [
                        { symbol: 'O₂', name: 'Oxygen' },
                        { symbol: 'Cl', name: 'Chlorine' }
                    ],
                    discoveries: [
                        { formula: 'H₂O', name: 'Pure Water', detail: 'Cooling Solvent' },
                        { formula: 'HCl', name: 'Acidic Vapor', detail: 'Etching Agent' }
                    ],
                    note: 'Volatile light vapor captured in high thermals, vital for exothermic ignition.'
                },
                'O': {
                    number: '08',
                    symbol: 'O',
                    name: 'OXYGEN',
                    label: 'ELEMENT 03 / FIELD SPECIMEN',
                    image: '{{ asset('images/oxygen-specimen.jpg') }}',
                    category: 'Nonmetal',
                    role: 'Combustion Agent',
                    classification: 'CHALCOGEN',
                    reacts: [
                        { symbol: 'Fe', name: 'Iron' },
                        { symbol: 'H', name: 'Hydrogen' }
                    ],
                    discoveries: [
                        { formula: 'Fe₂O₃', name: 'Iron Oxide', detail: 'Blast Furnace Slag' },
                        { formula: 'H₂O', name: 'Water Vapor', detail: 'Quenching Vapor' }
                    ],
                    note: 'Sustains thermal oxidation required in the great forges across the realm.'
                },
                'S': {
                    number: '16',
                    symbol: 'S',
                    name: 'SULFUR',
                    label: 'ELEMENT 04 / FIELD SPECIMEN',
                    image: '{{ asset('images/sulfur-specimen.jpg') }}',
                    category: 'Nonmetal',
                    role: 'Elemental Catalyst',
                    classification: 'REACTIVE NONMETAL',
                    reacts: [
                        { symbol: 'Fe', name: 'Iron' },
                        { symbol: 'O₂', name: 'Oxygen' }
                    ],
                    discoveries: [
                        { formula: 'FeS', name: 'Iron Sulfide', detail: 'Pyros Blade Coating' },
                        { formula: 'SO₂', name: 'Sulfur Dioxide', detail: 'Pungent Deterrent' }
                    ],
                    note: 'Harvested from volcanic vents; readily binds with metals to impart flame.'
                },
                'NA': {
                    number: '11',
                    symbol: 'Na',
                    name: 'SODIUM',
                    label: 'ELEMENT 05 / FIELD SPECIMEN',
                    image: '{{ asset('images/sodium-specimen.jpg') }}',
                    category: 'Alkali Metal',
                    role: 'Explosive Reagent',
                    classification: 'ALKALI METAL',
                    reacts: [
                        { symbol: 'Cl', name: 'Chlorine' },
                        { symbol: 'H₂O', name: 'Water' }
                    ],
                    discoveries: [
                        { formula: 'NaCl', name: 'Rock Salt', detail: 'Preservation Flux' },
                        { formula: 'NaOH', name: 'Caustic Lye', detail: 'Alchemical Cleanser' }
                    ],
                    note: 'Soft lustrous metal that violently combusts upon contact with moisture.'
                },
                'CL': {
                    number: '17',
                    symbol: 'Cl',
                    name: 'CHLORINE',
                    label: 'ELEMENT 06 / FIELD SPECIMEN',
                    image: '{{ asset('images/chlorine-specimen.jpg') }}',
                    category: 'Halogen',
                    role: 'Corrosive Solvent',
                    classification: 'HALOGEN GAS',
                    reacts: [
                        { symbol: 'Na', name: 'Sodium' },
                        { symbol: 'H', name: 'Hydrogen' }
                    ],
                    discoveries: [
                        { formula: 'NaCl', name: 'Table Salt', detail: 'Mineral Stabilizer' },
                        { formula: 'HCl', name: 'Acid Solvent', detail: 'Ore Dissolution' }
                    ],
                    note: 'Dense pungent vapor distilled from salt pans, vital for dissolving ores.'
                }
            }
         }">

        <!-- SECTION HEADER: In-World Scientific Archive -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-8 sm:mb-10 lg:mb-12">
            
            <div class="space-y-3 max-w-2xl">
                <!-- Eyebrow -->
                <div class="inline-flex items-center px-3 py-1 rounded-lg bg-[#E4D8BE]/85 border border-[#CEBF9E] shadow-2xs">
                    <span class="text-xs font-mono font-bold tracking-widest text-[#5A452E] uppercase">
                        ELEMENTAL ARCHIVE
                    </span>
                </div>

                <!-- Main Display Heading -->
                <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08]">
                    KNOW WHAT YOU'RE MIXING.
                </h2>

                <!-- Subheading / Supporting Text -->
                <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/80 leading-relaxed font-body">
                    Every discovery begins with an element. Study their properties, understand their behavior, and uncover what happens when they react.
                </p>
            </div>

            <!-- Archival Registry Badge -->
            <div class="hidden sm:inline-flex items-center gap-2 font-mono text-xs text-[#5A452E] bg-[#E8DEC8]/90 px-3.5 py-2 rounded-xl border border-[#D0C2A5] shadow-xs select-none self-start md:self-end">
                <span class="font-bold tracking-wider text-reaktoria-deep-forest uppercase">FIELD ARCHIVE</span>
                <span class="text-stone-400">&bull;</span>
                <span class="tracking-wide">REAKTORIA RESEARCH</span>
            </div>

        </div>

        <!-- MAIN FEATURED ARCHIVE DOSSIER: Specimen Folio & Research Ledger -->
        <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden border-2 border-[#C9BCA0] bg-[#FAF6EE] shadow-[0_20px_50px_rgba(40,30,15,0.08),_0_2px_8px_rgba(40,30,15,0.04)]">
            
            <!-- Folio Header Bar (Archival Docket Registry Line) -->
            <div class="bg-[#ECE2CE] border-b border-[#D5C6AA] px-4 sm:px-6 py-2.5 flex flex-wrap items-center justify-between gap-2 text-[11px] font-mono text-[#7A674D] select-none">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-reaktoria-deep-forest tracking-wider uppercase">ARCHIVAL SPECIMEN DOSSIER</span>
                    <span class="text-stone-400">&bull;</span>
                    <span class="text-[#8C6211]" x-text="'REGISTRY NO. RK-' + specimens[activeTab].number + '-' + specimens[activeTab].symbol.toUpperCase()">REGISTRY NO. RK-26-FE</span>
                </div>
                <div class="flex items-center gap-3 text-[10px] uppercase text-[#7A674D]">
                    <span>WOLFHAVEN FIELD LABORATORY</span>
                    <span class="text-stone-300">|</span>
                    <span class="text-[#14566A] font-semibold">ELEMENTAL REALM SURVEY</span>
                </div>
            </div>

            <!-- Main Two-Column Archive Workspace -->
            <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch min-h-[540px] lg:min-h-[560px]">
                
                <!-- LEFT SIDE: Specimen Mounting Chamber & Physical Observation -->
                <div class="lg:col-span-5 p-5 sm:p-7 lg:p-8 flex flex-col justify-between bg-[#F2EBDE]/70 border-b lg:border-b-0 lg:border-r border-[#DDCFB7]">
                    
                    <!-- Archival Label Top -->
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <div class="inline-flex items-center px-2.5 py-1 rounded-md bg-[#E4D7BE] border border-[#CBBBA0] font-mono text-[10px] sm:text-xs font-bold tracking-wider text-[#634E35] uppercase shadow-2xs select-none">
                            <span x-text="specimens[activeTab].label">ELEMENT 01 / FIELD SPECIMEN</span>
                        </div>

                        <!-- Technical Scale Marking -->
                        <span class="font-mono text-[10px] text-[#8C7355] uppercase tracking-wider hidden sm:inline">
                            SCALE 1:1 FIELD SAMPLE
                        </span>
                    </div>

                    <!-- Low-Poly Faceted Mineral Specimen Mounting Chamber -->
                    <div class="relative w-full rounded-xl bg-[#141E23] border border-[#2B3B42] shadow-inner p-4 sm:p-5 flex flex-col items-center justify-center my-2 h-[320px] sm:h-[350px] overflow-hidden group">
                        
                        <!-- Archival Measurement Grid & Crosshairs (Background of Specimen Tray) -->
                        <svg class="absolute inset-0 w-full h-full opacity-20 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="specimen-tray-grid" width="24" height="24" patternUnits="userSpaceOnUse">
                                    <path d="M 24 0 L 0 0 0 24" fill="none" stroke="#67BED6" stroke-width="0.5" />
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#specimen-tray-grid)" />
                            <!-- Center Crosshairs & Metric Rings -->
                            <circle cx="50%" cy="50%" r="48" fill="none" stroke="#67BED6" stroke-width="0.75" stroke-dasharray="2 4" />
                            <circle cx="50%" cy="50%" r="84" fill="none" stroke="#67BED6" stroke-width="0.5" stroke-dasharray="4 6" />
                            <line x1="50%" y1="15%" x2="50%" y2="85%" stroke="#67BED6" stroke-width="0.5" stroke-dasharray="2 4" />
                            <line x1="15%" y1="50%" x2="85%" y2="50%" stroke="#67BED6" stroke-width="0.5" stroke-dasharray="2 4" />
                        </svg>

                        <!-- Corner Telemetry Stamp Overlays -->
                        <div class="absolute top-2.5 left-3 font-mono text-[9px] text-[#9CD5E6] tracking-wider uppercase select-none">
                            TRAY // 80mm
                        </div>
                        <div class="absolute top-2.5 right-3 font-mono text-[9px] text-[#9CD5E6] tracking-wider uppercase select-none">
                            OPTICAL AXIS // 90°
                        </div>
                        <div class="absolute bottom-2.5 left-3 font-mono text-[9px] text-[#B6D8E2] tracking-wider uppercase select-none">
                            LUSTER // METALLIC
                        </div>
                        <div class="absolute bottom-2.5 right-3 font-mono text-[9px] text-[#B6D8E2] tracking-wider uppercase select-none">
                            PURITY // 96.4%
                        </div>

                        <!-- Real Elemental Field Specimen Artwork -->
                        <div class="relative z-10 w-[220px] h-[220px] sm:w-[250px] sm:h-[250px] aspect-square rounded-xl overflow-hidden border border-[#2D3C43] shadow-[0_12px_24px_rgba(0,0,0,0.55)] transition-transform duration-300 group-hover:scale-[1.02] bg-[#10171A] shrink-0">
                            <img 
                                :src="specimens[activeTab].image"
                                src="{{ asset('images/iron-specimen.jpg') }}" 
                                :alt="'Reaktoria Low-Poly ' + specimens[activeTab].name + ' Field Specimen'"
                                alt="Reaktoria Low-Poly Raw Iron Ore Field Specimen with Forged Sample" 
                                class="w-full h-full object-cover select-none"
                                loading="lazy"
                            />
                            <!-- Subtle Ambient Specimen Glass Reflection -->
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>

                        <!-- Brass Identification Plaque at Bottom of Specimen Mount -->
                        <div class="relative z-10 mt-3 px-3 py-1 rounded-md bg-[#0F171A] border border-[#2B3B42] flex items-center gap-2 font-mono text-[10px] text-[#93A8B3] select-none shrink-0">
                            <span class="font-bold text-white tracking-widest" x-text="specimens[activeTab].name + ' SPECIMEN'">IRON SPECIMEN</span>
                            <span class="text-stone-600">&bull;</span>
                            <span class="text-[#67BED6]" x-text="'[' + specimens[activeTab].symbol + ']'">[Fe]</span>
                        </div>

                    </div>

                    <!-- Specimen Identity Bar (26, Fe, IRON, TRANSITION METAL) -->
                    <div class="pt-4 border-t border-[#DDCFB7] flex items-center justify-between gap-3">
                        <div class="flex items-baseline gap-2.5">
                            <!-- Atomic Number 26 -->
                            <span class="font-mono text-xl sm:text-2xl font-bold text-[#8C6211]" x-text="specimens[activeTab].number">26</span>
                            <!-- Large Symbol Fe -->
                            <span class="font-display font-black text-3xl sm:text-4xl text-reaktoria-deep-forest tracking-tight" x-text="specimens[activeTab].symbol">Fe</span>
                            <!-- Name IRON -->
                            <span class="font-display font-bold text-lg sm:text-xl text-[#3A2E1D] tracking-wide ml-0.5" x-text="specimens[activeTab].name">IRON</span>
                        </div>

                        <!-- Classification: TRANSITION METAL -->
                        <span class="font-mono text-[10px] sm:text-xs font-bold tracking-wider uppercase px-2.5 py-1 rounded-md bg-[#E4D7BE] text-[#5A452E] border border-[#CBBBA0] shadow-2xs select-none"
                              x-text="specimens[activeTab].classification">
                            TRANSITION METAL
                        </span>
                    </div>

                </div>

                <!-- RIGHT SIDE: Ruled Scientific Dossier & Research Ledger -->
                <div class="lg:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between bg-[#FAF6EE]">
                    
                    <!-- Research Dossier Header -->
                    <div class="flex items-start justify-between gap-4 pb-5 border-b border-[#E2D5BE]">
                        <div>
                            <span class="text-[10px] sm:text-xs font-mono font-bold uppercase tracking-widest text-[#8C6211] block mb-1">
                                FIELD RESEARCH PROFILE
                            </span>
                            <!-- Title: IRON -->
                            <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-reaktoria-deep-forest tracking-tight" x-text="specimens[activeTab].name">
                                IRON
                            </h3>
                            <p class="text-xs sm:text-sm font-body text-reaktoria-ink/75 mt-0.5">
                                Primary metallic foundation for blades, heavy plate, and elemental reaction catalysts.
                            </p>
                        </div>

                        <!-- Large Symbol Tile: Fe -->
                        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl bg-[#EFE6D4] border-2 border-[#D5C6AA] flex flex-col items-center justify-center shadow-xs select-none shrink-0">
                            <span class="font-display font-black text-3xl sm:text-4xl text-[#14566A]" x-text="specimens[activeTab].symbol">Fe</span>
                            <span class="font-mono text-[9px] font-bold text-[#8C6211] -mt-1" x-text="'Z=' + specimens[activeTab].number">Z=26</span>
                        </div>
                    </div>

                    <!-- Properties Grid: Cohesive Ruled Data Table (Eliminates floating nested cards) -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 border border-[#DDCFB7] divide-y sm:divide-y-0 sm:divide-x divide-[#DDCFB7] rounded-xl bg-[#F6F0E3]/70 overflow-hidden shadow-2xs my-5">
                        
                        <!-- Property 1: ATOMIC NUMBER -->
                        <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                            <span class="block text-[10px] font-mono font-bold uppercase tracking-wider text-[#7A674D]">
                                ATOMIC NUMBER
                            </span>
                            <span class="font-mono text-xl sm:text-2xl font-bold text-reaktoria-deep-forest mt-1" x-text="specimens[activeTab].number">
                                26
                            </span>
                        </div>

                        <!-- Property 2: CATEGORY -->
                        <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                            <span class="block text-[10px] font-mono font-bold uppercase tracking-wider text-[#7A674D]">
                                CATEGORY
                            </span>
                            <span class="font-body text-sm sm:text-base font-bold text-reaktoria-deep-forest mt-1" x-text="specimens[activeTab].category">
                                Metal
                            </span>
                        </div>

                        <!-- Property 3: SYMBOL -->
                        <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                            <span class="block text-[10px] font-mono font-bold uppercase tracking-wider text-[#7A674D]">
                                SYMBOL
                            </span>
                            <span class="font-mono text-xl sm:text-2xl font-bold text-[#14566A] mt-1" x-text="specimens[activeTab].symbol">
                                Fe
                            </span>
                        </div>

                        <!-- Property 4: ROLE -->
                        <div class="p-3.5 sm:p-4 flex flex-col justify-between min-h-[5rem]">
                            <span class="block text-[10px] font-mono font-bold uppercase tracking-wider text-[#7A674D]">
                                ROLE
                            </span>
                            <span class="font-body text-xs sm:text-sm font-bold text-reaktoria-deep-forest leading-snug mt-1" x-text="specimens[activeTab].role">
                                Forging Material
                            </span>
                        </div>

                    </div>

                    <!-- Reaction Profile & Discoveries Section -->
                    <div class="py-5 border-t border-[#E2D5BE] space-y-4">
                        
                        <div>
                            <h4 class="font-mono text-xs font-bold uppercase tracking-widest text-[#B84E1F]">
                                REACTION PROFILE
                            </h4>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            
                            <!-- Sub-Section A: COMMONLY REACTS WITH -->
                            <div class="space-y-2">
                                <span class="block text-[10px] sm:text-[11px] font-mono font-bold uppercase tracking-wider text-[#7A674D]">
                                    COMMONLY REACTS WITH
                                </span>
                                
                                <div class="flex flex-wrap items-center gap-2 min-h-[2.5rem]">
                                    <template x-for="reactant in specimens[activeTab].reacts" :key="reactant.symbol">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F3ECDC] border border-[#D8C9AA] text-xs font-mono shadow-2xs shrink-0">
                                            <span class="font-bold text-[#8C6211] text-sm" x-text="reactant.symbol">S</span>
                                            <span class="text-[10px] text-[#7A674D] whitespace-nowrap" x-text="reactant.name">Sulfur</span>
                                        </div>
                                    </template>

                                    <!-- Static SSR Fallback for Iron Reactants (guarantees text indexing) -->
                                    <div class="contents" x-show="false">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#FAF2DC] border border-[#DECFA9] text-xs font-mono">
                                            <span class="font-bold text-[#8C6211] text-sm">S</span>
                                            <span class="text-[10px] text-[#7A674D]">Sulfur</span>
                                        </div>
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#E8F4F8] border border-[#C5DFE8] text-xs font-mono">
                                            <span class="font-bold text-[#14566A] text-sm">O₂</span>
                                            <span class="text-[10px] text-[#558190]">Oxygen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sub-Section B: DISCOVERIES -->
                            <div class="space-y-2">
                                <span class="block text-[10px] sm:text-[11px] font-mono font-bold uppercase tracking-wider text-[#7A674D]">
                                    DISCOVERIES
                                </span>
                                
                                <div class="flex flex-wrap items-center gap-2 min-h-[2.5rem]">
                                    <template x-for="discovery in specimens[activeTab].discoveries" :key="discovery.formula">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-mono shadow-2xs shrink-0">
                                            <span class="font-bold text-reaktoria-deep-forest text-sm" x-text="discovery.formula">FeS</span>
                                            <span class="text-[10px] text-[#8C6211] whitespace-nowrap" x-text="discovery.name">Iron Sulfide</span>
                                        </div>
                                    </template>

                                    <!-- Static SSR Fallback for Iron Discoveries (guarantees text indexing) -->
                                    <div class="contents" x-show="false">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-mono">
                                            <span class="font-bold text-reaktoria-deep-forest text-sm">FeS</span>
                                            <span class="text-[10px] text-[#8C6211]">Iron Sulfide</span>
                                        </div>
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#F4EDE0] border border-[#D9CBB0] text-xs font-mono">
                                            <span class="font-bold text-reaktoria-deep-forest text-sm">Fe₂O₃</span>
                                            <span class="text-[10px] text-[#B84E1F]">Iron Oxide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Archival Field Observation Callout (Eliminates generic colored left stripe) -->
                    <div class="mt-5 p-4 rounded-xl bg-[#F6F0E3]/90 border border-[#DDCFB7] shadow-2xs min-h-[5.5rem] flex flex-col justify-center">
                        <div class="flex items-center justify-between gap-2 mb-1.5">
                            <div>
                                <span class="text-[10px] font-mono font-bold uppercase tracking-wider text-[#B84E1F]">
                                    FIELD NOTE
                                </span>
                            </div>
                            <span class="text-[10px] font-mono text-[#8C7355] uppercase">Expedition Log</span>
                        </div>
                        <p class="font-body text-xs sm:text-sm text-reaktoria-ink/85 italic leading-relaxed" x-text="specimens[activeTab].note">
                            Iron forms the foundation of many forged discoveries throughout the realm.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Elemental Archive Index (Archival Specimen Tabs) -->
            <div class="bg-[#ECE2CE] border-t border-[#D5C6AA] px-4 sm:px-6 lg:px-8 py-3.5 flex flex-col md:flex-row md:items-center justify-between gap-3 select-none">
                
                <!-- Archival Registry Heading -->
                <div class="flex items-center gap-2 font-mono text-xs text-[#7A674D]">
                    <span class="font-bold uppercase tracking-wider text-reaktoria-deep-forest">ARCHIVE INDEX</span>
                    <span class="text-stone-300">&bull;</span>
                    <span class="text-[11px] text-[#7A674D] hidden sm:inline">SELECT SPECIMEN DOSSIER</span>
                </div>

                <!-- Archival Specimen Labels / Research Index Tabs -->
                <div class="flex flex-wrap items-center gap-2 sm:gap-2.5" role="tablist" aria-label="Elemental Specimen Selector">
                    
                    <!-- 01 FE -->
                    <button 
                        type="button"
                        role="tab"
                        :aria-selected="activeTab === 'FE'"
                        @click="activeTab = 'FE'"
                        :class="activeTab === 'FE' 
                            ? 'bg-[#FAF6EE] text-reaktoria-deep-forest border-t-[#B84E1F] border-x-[#D5C6AA] border-b-[#FAF6EE] shadow-xs' 
                            : 'bg-[#E4D7BE]/70 text-[#7A674D] border-t-transparent border-[#CEBF9E] hover:bg-[#E4D7BE] hover:text-reaktoria-deep-forest'"
                        class="inline-flex items-center px-3 py-1.5 rounded-t-lg font-mono text-xs font-bold border-t-2 border-x border-b transition-colors cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60">
                        <span>01 FE</span>
                    </button>

                    <!-- 02 H -->
                    <button 
                        type="button"
                        role="tab"
                        :aria-selected="activeTab === 'H'"
                        @click="activeTab = 'H'"
                        :class="activeTab === 'H' 
                            ? 'bg-[#FAF6EE] text-reaktoria-deep-forest border-t-[#B84E1F] border-x-[#D5C6AA] border-b-[#FAF6EE] shadow-xs' 
                            : 'bg-[#E4D7BE]/70 text-[#7A674D] border-t-transparent border-[#CEBF9E] hover:bg-[#E4D7BE] hover:text-reaktoria-deep-forest'"
                        class="inline-flex items-center px-3 py-1.5 rounded-t-lg font-mono text-xs font-bold border-t-2 border-x border-b transition-colors cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60">
                        <span>02 H</span>
                    </button>

                    <!-- 03 O -->
                    <button 
                        type="button"
                        role="tab"
                        :aria-selected="activeTab === 'O'"
                        @click="activeTab = 'O'"
                        :class="activeTab === 'O' 
                            ? 'bg-[#FAF6EE] text-reaktoria-deep-forest border-t-[#B84E1F] border-x-[#D5C6AA] border-b-[#FAF6EE] shadow-xs' 
                            : 'bg-[#E4D7BE]/70 text-[#7A674D] border-t-transparent border-[#CEBF9E] hover:bg-[#E4D7BE] hover:text-reaktoria-deep-forest'"
                        class="inline-flex items-center px-3 py-1.5 rounded-t-lg font-mono text-xs font-bold border-t-2 border-x border-b transition-colors cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60">
                        <span>03 O</span>
                    </button>

                    <!-- 04 S -->
                    <button 
                        type="button"
                        role="tab"
                        :aria-selected="activeTab === 'S'"
                        @click="activeTab = 'S'"
                        :class="activeTab === 'S' 
                            ? 'bg-[#FAF6EE] text-reaktoria-deep-forest border-t-[#B84E1F] border-x-[#D5C6AA] border-b-[#FAF6EE] shadow-xs' 
                            : 'bg-[#E4D7BE]/70 text-[#7A674D] border-t-transparent border-[#CEBF9E] hover:bg-[#E4D7BE] hover:text-reaktoria-deep-forest'"
                        class="inline-flex items-center px-3 py-1.5 rounded-t-lg font-mono text-xs font-bold border-t-2 border-x border-b transition-colors cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60">
                        <span>04 S</span>
                    </button>

                    <!-- 05 NA -->
                    <button 
                        type="button"
                        role="tab"
                        :aria-selected="activeTab === 'NA'"
                        @click="activeTab = 'NA'"
                        :class="activeTab === 'NA' 
                            ? 'bg-[#FAF6EE] text-reaktoria-deep-forest border-t-[#B84E1F] border-x-[#D5C6AA] border-b-[#FAF6EE] shadow-xs' 
                            : 'bg-[#E4D7BE]/70 text-[#7A674D] border-t-transparent border-[#CEBF9E] hover:bg-[#E4D7BE] hover:text-reaktoria-deep-forest'"
                        class="inline-flex items-center px-3 py-1.5 rounded-t-lg font-mono text-xs font-bold border-t-2 border-x border-b transition-colors cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60">
                        <span>05 NA</span>
                    </button>

                    <!-- 06 CL -->
                    <button 
                        type="button"
                        role="tab"
                        :aria-selected="activeTab === 'CL'"
                        @click="activeTab = 'CL'"
                        :class="activeTab === 'CL' 
                            ? 'bg-[#FAF6EE] text-reaktoria-deep-forest border-t-[#B84E1F] border-x-[#D5C6AA] border-b-[#FAF6EE] shadow-xs' 
                            : 'bg-[#E4D7BE]/70 text-[#7A674D] border-t-transparent border-[#CEBF9E] hover:bg-[#E4D7BE] hover:text-reaktoria-deep-forest'"
                        class="inline-flex items-center px-3 py-1.5 rounded-t-lg font-mono text-xs font-bold border-t-2 border-x border-b transition-colors cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#B84E1F]/60">
                        <span>06 CL</span>
                    </button>

                </div>

            </div>

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
