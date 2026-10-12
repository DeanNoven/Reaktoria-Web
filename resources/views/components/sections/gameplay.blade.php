<section id="gameplay" class="relative py-12 sm:py-16 lg:py-20 overflow-hidden bg-gradient-to-b from-[#DFD4C2] via-[#E4ECE0] to-[#EFE8D9]">

    <!-- Anchor Aliases for Global Navbar Navigation (#gameplay, #battle) -->
    <span id="battle" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Background Transition Layer (Elemental Wilderness Beyond the Adventure) -->
    <div class="absolute inset-0 z-0">
        <!-- Wide Low-Poly Elemental Wilderness Environment Background -->
        <img 
            src="{{ asset('images/backgrounds/gameplay-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Elemental Wilderness Environmental Background" 
            class="w-full h-full object-cover object-center select-none pointer-events-none opacity-20 sm:opacity-25 blur-[1.5px] scale-[1.02] contrast-[0.80] saturate-[0.62] brightness-[1.03]"
            loading="lazy"
        />

        <!-- Seamless Environmental Transition from Forge Stone (#DFD4C2 into bright meadow green) -->
        <div class="absolute inset-x-0 top-0 h-32 sm:h-40 bg-gradient-to-b from-[#DFD4C2] via-[#DFD4C2]/85 via-[#E4ECE0]/60 to-transparent pointer-events-none"></div>

        <!-- Atmospheric Distance Haze Veil -->
        <div class="absolute inset-0 bg-[#E4ECE0]/30 pointer-events-none"></div>

        <!-- Gentle Sunlit Sky & Meadow Ambiance -->
        <div class="absolute top-1/6 right-1/4 w-[42rem] h-[30rem] bg-[radial-gradient(circle,_rgba(255,250,225,0.45)_0%,_transparent_65%)] pointer-events-none"></div>
        <div class="absolute bottom-1/4 left-1/5 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(140,205,120,0.12)_0%,_transparent_65%)] pointer-events-none"></div>

        <!-- Central Daylight Clearing -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(230,237,225,0.45)_0%,_rgba(230,237,225,0.15)_55%,_transparent_80%)] pointer-events-none"></div>

        <!-- Left & Right Soft Framing Tones -->
        <div class="absolute inset-y-0 left-0 w-24 sm:w-36 bg-gradient-to-r from-[#DFD4C2]/35 to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-24 sm:w-36 bg-gradient-to-l from-[#DFD4C2]/35 to-transparent pointer-events-none"></div>

        <!-- Ambient Room Vignette & Bottom Blending into Modes (#EFE8D9) -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_60%,_rgba(180,200,170,0.15)_100%)] pointer-events-none"></div>
        <div class="absolute bottom-0 inset-x-0 h-28 sm:h-32 bg-gradient-to-t from-[#EFE8D9] via-[#EFE8D9]/75 to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Asymmetrical Editorial Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 sm:gap-6 mb-6 sm:mb-8">
            
            <div class="space-y-2.5 max-w-2xl">
                <!-- Eyebrow -->
                <div>
                    <span class="text-xs font-bold font-body uppercase tracking-[0.2em] text-[#2F6B3C]">
                        THE ADVENTURE
                    </span>
                </div>

                <!-- Main Heading -->
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-[3.25rem] text-reaktoria-deep-forest tracking-tight leading-[1.08]">
                    DISCOVER. REACT. <span class="text-[#B84E1F]">BATTLE.</span>
                </h2>

                <!-- Supporting Copy -->
                <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/85 leading-relaxed font-body">
                    Explore the Elemental Realm, experiment with real chemistry, and bring your discoveries into the field. Every reaction can change how you face the next encounter.
                </p>
            </div>

            <!-- In-World Stage Telemetry Badge -->
            <div class="hidden lg:flex items-center gap-2 font-mono text-xs text-[#5D6B50] bg-[#FAF6EE]/90 backdrop-blur-md px-3.5 py-1.5 rounded-xl border border-[#D5C6AA]/80 shadow-xs self-start lg:self-end select-none">
                <span class="font-bold text-reaktoria-deep-forest">Active Field Stage</span>
                <span class="text-stone-300">&bull;</span>
                <span>Wolfhaven Outskirts Crossing</span>
            </div>

        </div>

        <!-- Panoramic HUD Viewport Plate -->
        <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden border-2 border-[#D5C6AA]/90 shadow-[0_16px_40px_rgba(35,50,30,0.12),_0_2px_8px_rgba(35,50,30,0.05)] bg-[#EFECE3] transition-transform duration-500 hover:scale-[1.004]">
            
            <img 
                src="{{ asset('images/gameplay-adventure.jpg') }}" 
                alt="Reaktoria Low-Poly Medieval Adventure Gameplay in Forest Clearing with Chemical Weapon and Enemy Encounter" 
                class="w-full h-auto aspect-[16/8.6] sm:aspect-[16/8.4] object-cover object-[center_56%] select-none"
                loading="lazy"
            />

            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_65%,_rgba(35,50,25,0.14)_100%)] pointer-events-none"></div>

            <!-- In-game HUD overlays -->
            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-20 flex items-center gap-2 sm:gap-2.5 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA]/90 shadow-md text-xs font-mono select-none">
                <span class="text-[10px] font-bold uppercase tracking-wider text-[#2F6B3C]">[ QUEST ]</span>
                <span class="font-display font-bold text-reaktoria-deep-forest text-xs sm:text-sm tracking-wide">FOREST PATH</span>
            </div>

            <div class="absolute top-3 right-3 sm:top-4 sm:right-4 z-20 hidden md:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/90 backdrop-blur-md border border-[#D5C6AA]/80 text-[11px] font-mono text-[#5A6F54] select-none shadow-sm">
                <svg class="w-3.5 h-3.5 text-[#5A6F54]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                    <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76" fill="currentColor"/>
                </svg>
                <span class="font-semibold text-reaktoria-deep-forest">River Crossing &bull; Wolfhaven Lane</span>
            </div>

            <div class="absolute top-[30%] sm:top-[35%] right-3 sm:right-6 z-20 hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/94 backdrop-blur-md border border-[#D5C6AA]/90 shadow-md text-xs font-mono select-none">
                <div class="flex flex-col">
                    <span class="text-[9px] uppercase tracking-wider text-[#B84E1F] font-bold">[ ENCOUNTER ]</span>
                    <span class="font-display font-bold text-reaktoria-deep-forest text-xs tracking-wide">WILDLING SCOUTS</span>
                </div>
            </div>

            <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 z-20 hidden sm:flex flex-col gap-1 p-2.5 sm:p-3 rounded-xl bg-[#FAF6EE]/95 backdrop-blur-md border border-[#D5C6AA]/90 shadow-lg text-xs font-mono select-none max-w-xs">
                <div class="flex items-center justify-between gap-4 text-[10px] font-bold uppercase tracking-wider">
                    <span class="text-[#8C6211]">[ WEAPON ]</span>
                    <span class="text-[#14566A]">[ REACTION READY ]</span>
                </div>
                <div class="flex items-center justify-between gap-3 font-semibold">
                    <span class="font-display font-bold text-reaktoria-deep-forest flex items-center gap-1.5 text-xs sm:text-sm">
                        <svg class="w-3.5 h-3.5 text-[#B84E1F]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14.5 17.5L3 6V3h3l11.5 11.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 19l6-6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        PYROS BLADE
                    </span>
                    <span class="text-[11px] font-mono font-bold text-[#14566A] bg-[#EAF2F5] px-2 py-0.5 rounded border border-[#BAD1DB]">
                        Fe + S &rarr; FeS
                    </span>
                </div>
                <span class="text-[10px] text-reaktoria-ink-muted">Elemental Heat &bull; Effective vs. Forest Encounters</span>
            </div>

            <!-- Mobile HUD fallback -->
            <div class="sm:hidden px-3.5 py-2.5 bg-[#FAF6EE]/98 border-t border-[#D5C6AA]/80 flex flex-wrap items-center justify-between gap-2 text-xs font-mono">
                <div class="flex items-center gap-1.5 text-[#14566A]">
                    <span class="font-bold text-[10px] text-[#8C6211]">[ WEAPON ]</span>
                    <span class="font-bold text-reaktoria-deep-forest">PYROS BLADE</span>
                </div>
                <div class="flex items-center gap-1 text-[11px] text-[#14566A] bg-[#EAF2F5] px-2 py-0.5 rounded border border-[#BAD1DB] font-bold">
                    <span>Fe + S &rarr; FeS</span>
                </div>
                <div class="flex items-center gap-1 text-[10px] text-[#B84E1F] font-bold">
                    <span>[ ENCOUNTER ]</span>
                    <span>Wildling Scouts</span>
                </div>
            </div>

        </div>

        <!-- Field Combat Dossier & Tactical Engagement Ledger (Replaces generic 3-box stepper with authentic combat telemetry) -->
        <div class="mt-6 sm:mt-8 p-6 sm:p-8 bg-[#FAF6EE]/95 rounded-2xl sm:rounded-3xl border border-[#D5C6AA]/90 shadow-[0_10px_30px_rgba(40,55,30,0.06)]">
            
            <!-- Top Ledger Header -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-5 border-b border-[#D5C6AA]/70">
                <div class="flex items-center gap-2">
                    <h3 class="font-display font-bold text-base sm:text-lg text-reaktoria-deep-forest tracking-wide uppercase">
                        Field Combat Dossier
                    </h3>
                    <span class="font-mono text-xs text-[#8C6D4A]/70">&bull; Tactical Telemetry</span>
                </div>
                <div class="font-mono text-xs text-[#5D6B50] flex items-center gap-2 bg-[#F3EDE0] px-3 py-1.5 rounded-xl border border-[#DCD0BA] self-start sm:self-auto">
                    <span class="font-bold text-reaktoria-deep-forest">Active Weapon:</span>
                    <span class="text-[#B84E1F] font-bold">Pyros Blade [FeS]</span>
                    <span class="text-stone-300">&bull;</span>
                    <span class="text-[#14566A]">Thermal Class</span>
                </div>
            </div>

            <!-- Two-Column Tactical Layout: Action Combat Plate (Left) + Ruled Engagement Ledger (Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 pt-6 items-stretch">
                
                <!-- Left: Action Combat Plate with In-World Annotation -->
                <div class="lg:col-span-5 flex flex-col justify-between">
                    <div class="relative rounded-xl overflow-hidden border border-[#D5C6AA] shadow-sm bg-[#EFECE3] aspect-[16/10]">
                        <img 
                            src="{{ asset('images/feature-battle.jpg') }}" 
                            alt="Reaktoria Low-Poly Combat Strike: Pyros Blade Striking Hostile Wildling Scouts" 
                            class="w-full h-full object-cover object-center select-none"
                            loading="lazy"
                        />
                        <!-- Inset Action Tag -->
                        <div class="absolute bottom-2.5 left-2.5 z-10 flex items-center px-2.5 py-1 rounded-md bg-[#FAF6EE]/94 backdrop-blur-md border border-[#D5C6AA] text-[10px] font-mono text-[#9C381E] font-bold shadow-xs">
                            <span>Field Strike: Thermal Discharge</span>
                        </div>
                    </div>

                    <!-- Caption / In-Game Rationale -->
                    <p class="mt-3 text-xs text-reaktoria-ink-muted leading-relaxed font-body">
                        When the forged Pyros Blade strikes, synthesized Iron Sulfide (<span class="font-mono font-semibold text-[#14566A]">FeS</span>) ignites an elemental heat flare, piercing forest beast defenses and illuminating shadowy clearings.
                    </p>
                </div>

                <!-- Right: Ruled Engagement Ledger (Clean Ruled List, No Nested Boxes) -->
                <div class="lg:col-span-7 divide-y divide-[#E2D4B5]/70 flex flex-col justify-between">
                    
                    <!-- Tactical Row 01: Reaction Affinity -->
                    <div class="pb-4 space-y-1.5">
                        <div class="flex items-center justify-between text-xs font-mono">
                            <span class="font-bold uppercase tracking-wider text-[#2F6B3C]">01. Reaction Affinity</span>
                            <span class="text-[#2F6B3C] font-semibold bg-[#E8F2E4] px-2 py-0.5 rounded border border-[#C6DCBF]">Thermal Advantage</span>
                        </div>
                        <h4 class="font-display font-bold text-sm sm:text-base text-reaktoria-deep-forest">
                            Pyros Infusion vs. Wildling Scouts
                        </h4>
                        <p class="text-xs text-reaktoria-ink/80 leading-relaxed font-body">
                            Creatures native to dense canopies rely on thick bark hides. Standard iron strikes glance off, but heat-infused sulfur compounds trigger an exothermic response, breaking defensive shields upon impact.
                        </p>
                    </div>

                    <!-- Tactical Row 02: Environmental Chemistry Dynamics -->
                    <div class="py-4 space-y-1.5">
                        <div class="flex items-center justify-between text-xs font-mono">
                            <span class="font-bold uppercase tracking-wider text-[#14566A]">02. Environmental Dynamics</span>
                            <span class="text-[#14566A] font-semibold bg-[#EAF2F5] px-2 py-0.5 rounded border border-[#BAD1DB]">Terrain Interaction</span>
                        </div>
                        <h4 class="font-display font-bold text-sm sm:text-base text-reaktoria-deep-forest">
                            Weather and Biome Feedback
                        </h4>
                        <p class="text-xs text-reaktoria-ink/80 leading-relaxed font-body">
                            Cross river shallows to cool overheated blades. In dry undergrowth, thermal strikes ignite brief ember patches that deny flanking paths, turning the terrain itself into a tactical ally.
                        </p>
                    </div>

                    <!-- Tactical Row 03: Field Reagent Cycle -->
                    <div class="pt-4 space-y-1.5">
                        <div class="flex items-center justify-between text-xs font-mono">
                            <span class="font-bold uppercase tracking-wider text-[#8C6211]">03. Field Reagent Cycle</span>
                            <span class="text-[#8C6211] font-semibold bg-[#FAF4E6] px-2 py-0.5 rounded border border-[#DDD0B8]">Combat Loop</span>
                        </div>
                        <h4 class="font-display font-bold text-sm sm:text-base text-reaktoria-deep-forest">
                            Harvest, Synthesize, and Re-Engage
                        </h4>
                        <p class="text-xs text-reaktoria-ink/80 leading-relaxed font-body">
                            Each weapon discharge draws on elemental charges. Collect raw sulfur crystals from roadside mineral veins and iron scrap from ruins to replenish your blade without returning to the workshop.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Grounded Chemistry-to-Combat Loop Bar -->
            <div class="mt-5 pt-3.5 border-t border-[#E8DCBF]/70 flex flex-wrap items-center justify-between gap-3 text-xs font-mono text-[#5D462E]">
                <div class="flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-[#2F6B3C]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m8 14-6 6h20l-6-6" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="m12 3-7 11h14z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="font-bold text-reaktoria-deep-forest">Integrated Field Loop</span>
                    <span class="text-[#8C6D4A]/60">&bull;</span>
                    <span>Synthesis &rarr; Anvil Forging &rarr; Tactical Combat</span>
                </div>
                <div class="flex items-center gap-2 text-[11px] font-semibold bg-[#FAF4E6] px-3 py-1 rounded-lg border border-[#DFD3BB] text-[#14566A]">
                    <span>[Fe] + [S] &rarr; FeS &rarr; Pyros Blade Deployed</span>
                </div>
            </div>

        </div>

    </div>

</section>
