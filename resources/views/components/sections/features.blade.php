<section id="modes" class="relative py-14 sm:py-16 lg:py-20 overflow-hidden bg-gradient-to-b from-[#DDE9D7] via-[#EDE7DA] via-[#FAF6EE] to-[#F5EEDF]">

    <!-- Anchor Aliases for Global Navbar Navigation (#modes, #features) -->
    <span id="features" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Background Transition Layer (Ancient Elemental Codex Workspace Archive) -->
    <div class="absolute inset-0 z-0">
        <!-- Tall Atmospheric Low-Poly Elemental Codex & Blueprint Archive Background -->
        <img 
            src="{{ asset('images/backgrounds/features-bg.jpg') }}" 
            alt="Reaktoria Low-Poly Ancient Elemental Codex and Research Archive Background" 
            class="w-full h-full object-cover object-top select-none pointer-events-none opacity-25 sm:opacity-30 contrast-[0.88] saturate-[0.80] brightness-[1.02]"
            loading="lazy"
        />

        <!-- Seamless Environmental Transition from Section 5 (#DDE9D7 meadow green into warm cream parchment) -->
        <div class="absolute inset-x-0 top-0 h-32 sm:h-40 bg-gradient-to-b from-[#DDE9D7] via-[#DDE9D7]/85 via-[#EDE7DA]/60 to-transparent pointer-events-none"></div>

        <!-- Atmospheric Parchment Softening Veil -->
        <div class="absolute inset-0 bg-[#FAF6EE]/40 pointer-events-none"></div>

        <!-- Subtle Medieval Map & Parchment Watermark Accents -->
        <div class="absolute inset-0 pointer-events-none opacity-[0.035] select-none text-[#5A381A] overflow-hidden">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <pattern id="features-compass-grid" width="48" height="48" patternUnits="userSpaceOnUse">
                        <circle cx="24" cy="24" r="1.2" fill="currentColor" opacity="0.5" />
                        <line x1="24" y1="18" x2="24" y2="30" stroke="currentColor" stroke-width="0.75" opacity="0.3" />
                        <line x1="18" y1="24" x2="30" y2="24" stroke="currentColor" stroke-width="0.75" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#features-compass-grid)" />
            </svg>
        </div>

        <!-- Soft Ambient Hearth & Parchment Glows -->
        <div class="absolute top-1/4 left-1/12 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(245,215,160,0.20)_0%,_transparent_65%)] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/12 w-[36rem] h-[36rem] bg-[radial-gradient(circle,_rgba(140,195,150,0.12)_0%,_transparent_65%)] pointer-events-none"></div>

        <!-- Central Readability Dissolve (Softly washes the center where the four content cards sit) -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(250,246,238,0.55)_0%,_rgba(250,246,238,0.15)_60%,_transparent_85%)] pointer-events-none"></div>

        <!-- Subtle Left & Right Timber/Stone Framing -->
        <div class="absolute inset-y-0 left-0 w-24 sm:w-36 bg-gradient-to-r from-[#D8CCA8]/30 to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-24 sm:w-36 bg-gradient-to-l from-[#D8CCA8]/30 to-transparent pointer-events-none"></div>

        <!-- Soft Bottom Room Blending into Section 7 (#F5EEDF tone) -->
        <div class="absolute bottom-0 inset-x-0 h-28 bg-gradient-to-t from-[#F5EEDF] via-[#F5EEDF]/80 to-transparent pointer-events-none"></div>
    </div>

    <!-- Main Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Editorial Header (Art-Directed Game Feature Introduction) -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-5 sm:gap-6 mb-7 sm:mb-8">
            
            <div class="space-y-2.5 max-w-2xl">
                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-[#B84E1F] animate-pulse"></span>
                    <span class="text-xs font-bold font-body uppercase tracking-[0.2em] text-[#B84E1F]">
                        GAME FEATURES
                    </span>
                </div>

                <!-- Main Heading -->
                <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-[2.7rem] text-reaktoria-deep-forest tracking-tight leading-[1.12]">
                    BUILT TO EXPERIMENT. <br class="hidden sm:inline" />
                    <span class="text-[#2F6B3C]">BUILT TO EXPLORE.</span>
                </h2>

                <!-- Supporting Copy -->
                <p class="text-sm sm:text-base text-reaktoria-ink/85 leading-relaxed font-body">
                    Discover elements, experiment with reactions, forge your discoveries into weapons, and bring them into the world.
                </p>
            </div>

            <!-- In-World Codex Ledger Badge -->
            <div class="hidden md:flex items-center gap-2.5 font-mono text-xs text-[#6B5A42] bg-[#FAF6EE]/90 backdrop-blur-md px-3.5 py-1.5 rounded-xl border border-[#D5C6AA]/80 shadow-xs self-start lg:self-center select-none">
                <span class="w-1.5 h-1.5 rounded-full bg-[#1B7088]"></span>
                <span class="font-bold text-reaktoria-deep-forest">Reaktoria Codex</span>
                <span class="text-stone-300">&bull;</span>
                <span>Four Core Pillars</span>
            </div>

        </div>

        <!-- Asymmetrical Editorial Feature Showcase Grid (Different Visual Weights: Primary, Secondary, Tertiary) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 items-start lg:items-stretch gap-5 sm:gap-6 lg:gap-7">
            
            <!-- PRIMARY FEATURE (LEFT COLUMN): Large Dominant Feature — 01 CHEMISTRY SYSTEM -->
            <div class="lg:col-span-7 flex flex-col h-full min-h-0 rounded-2xl sm:rounded-3xl border border-[#D5C6AA]/85 bg-gradient-to-br from-[#FAF6EE] via-[#F6EFE2] to-[#FAF5EA] shadow-[0_10px_28px_rgba(50,45,30,0.06)] overflow-hidden group">
                
                <!-- Alchemy Workbench Image Frame (Matches two stacked cards on the right with zero empty space below) -->
                <div class="relative w-full overflow-hidden aspect-[16/10] lg:aspect-auto lg:flex-1 min-h-[240px] sm:min-h-[280px] lg:min-h-0 border-b border-[#D8CCA8]/80 bg-[#EFECE3]">
                    <img 
                        src="{{ asset('images/chemistry-workbench.jpg') }}" 
                        alt="Reaktoria Low-Poly Medieval Alchemy Workbench with Glowing Reaction Flask and Elemental Crystals" 
                        class="absolute inset-0 w-full h-full object-cover object-center select-none"
                        loading="lazy"
                    />

                    <!-- Glowing Alchemical Flask Ambient Lighting -->
                    <div class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 w-48 h-48 rounded-full bg-[radial-gradient(circle,_rgba(66,169,198,0.22)_0%,_transparent_70%)] pointer-events-none"></div>

                    <!-- In-World Pillar Number Badge -->
                    <div class="absolute top-3 left-3 sm:top-3.5 sm:left-3.5 z-10 flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA] shadow-xs text-xs font-mono font-semibold text-[#14566A] select-none">
                        <span class="w-1.5 h-1.5 rounded-full bg-reaktoria-chemistry"></span>
                        <span>01 &bull; Primary System</span>
                    </div>

                    <!-- Elemental Reagents Rack -->
                    <div class="absolute bottom-2.5 inset-x-2.5 sm:bottom-3 sm:inset-x-3 z-10 flex flex-wrap items-center justify-between gap-1.5 p-2 rounded-lg bg-[#FAF6EE]/94 backdrop-blur-md border border-[#D5C6AA]/90 shadow-xs text-xs font-mono select-none">
                        <span class="text-[10px] uppercase font-bold text-[#8C6211] tracking-wider hidden sm:inline">Active Reagents:</span>
                        <div class="flex items-center gap-1.5 flex-wrap">
                            <span class="px-2 py-0.5 rounded bg-[#FAF4E6] border border-[#DDD0B8] text-[#14566A] font-bold">Fe</span>
                            <span class="px-2 py-0.5 rounded bg-[#FAF4E6] border border-[#DDD0B8] text-[#8C6211] font-bold">S</span>
                            <span class="px-2 py-0.5 rounded bg-[#FAF4E6] border border-[#DDD0B8] text-[#1B7088] font-bold">H</span>
                            <span class="px-2 py-0.5 rounded bg-[#FAF4E6] border border-[#DDD0B8] text-[#2F6B3C] font-bold">O</span>
                            <span class="px-2 py-0.5 rounded bg-[#FAF4E6] border border-[#DDD0B8] text-[#9C381E] font-bold">Na</span>
                            <span class="px-2 py-0.5 rounded bg-[#FAF4E6] border border-[#DDD0B8] text-[#14566A] font-bold">Cl</span>
                        </div>
                    </div>
                </div>

                <!-- Structured Content Block (No Accidental Vertical Void) -->
                <div class="p-5 sm:p-6 space-y-5">
                    
                    <div class="space-y-2">
                        <!-- Small Label / Eyebrow -->
                        <div class="flex items-center gap-2">
                            <span class="font-mono text-[11px] font-bold text-[#14566A] uppercase tracking-wider bg-[#EAF3F7] px-2 py-0.5 rounded border border-[#BAD1DB]">
                                Core Pillar 01
                            </span>
                            <span class="text-xs font-mono text-[#8C6D4A]/70">&bull; Authentic Reactions</span>
                        </div>

                        <!-- Feature Title -->
                        <h3 class="font-display font-extrabold text-2xl sm:text-2xl lg:text-[1.75rem] text-reaktoria-deep-forest tracking-tight">
                            CHEMISTRY SYSTEM
                        </h3>

                        <!-- Short Description -->
                        <p class="text-sm text-reaktoria-ink/85 leading-relaxed font-body">
                            Combine real elements, trigger reactions, and discover what happens when chemistry becomes part of the adventure.
                        </p>
                    </div>

                    <!-- In-World Discovery Progression Mechanic: SELECT → REACT → DISCOVER -->
                    <div class="p-3 sm:p-3.5 rounded-xl bg-[#FAF4E6]/90 border border-[#D8CCA8]/85 space-y-2">
                        <div class="flex items-center justify-between text-[10px] font-mono font-bold uppercase tracking-wider text-[#8C6D4A]">
                            <span>Discovery Interface</span>
                            <span>Elements &rarr; Reaction &rarr; Discovery</span>
                        </div>
                        
                        <!-- 3-Step Compact Gameplay Flow: [ Fe ] + [ S ] ↓ REACTION ↓ [ FeS ] -->
                        <div class="grid grid-cols-3 gap-2 text-center font-mono text-xs">
                            <!-- 01 SELECT -->
                            <div class="p-2 rounded-lg bg-white/75 border border-[#DDD0B8] flex flex-col justify-center">
                                <span class="text-[9px] uppercase font-bold text-[#14566A] tracking-wider">01 &bull; Select</span>
                                <span class="font-bold text-reaktoria-deep-forest text-xs mt-0.5">[ Fe ] + [ S ]</span>
                            </div>
                            
                            <!-- 02 REACT -->
                            <div class="p-2 rounded-lg bg-[#EAF3F7] border border-[#BCD4DC] flex flex-col justify-center">
                                <span class="text-[9px] uppercase font-bold text-[#14566A] tracking-wider">02 &bull; React</span>
                                <span class="font-bold text-[#14566A] text-[11px] mt-0.5">Reaction Vessel</span>
                            </div>
                            
                            <!-- 03 DISCOVER -->
                            <div class="p-2 rounded-lg bg-[#FBEFE5] border border-[#EACBB3] flex flex-col justify-center">
                                <span class="text-[9px] uppercase font-bold text-[#B84E1F] tracking-wider">03 &bull; Discover</span>
                                <span class="font-bold text-[#B84E1F] text-xs mt-0.5">[ FeS ] Result</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quiet Field Registry Footnote -->
                    <div class="pt-2.5 border-t border-[#E8DCBF]/50 flex items-center justify-between text-[11px] font-mono text-[#8C6D4A]/80">
                        <span>Reaktoria Field Logic</span>
                        <span>Scientific logic &bull; Fantasy outcomes</span>
                    </div>

                </div>

            </div>

            <!-- SECONDARY FEATURES (RIGHT COLUMN): Stacked Tactical Features — 02 FORGING & 03 BATTLE -->
            <div class="lg:col-span-5 flex flex-col gap-5 sm:gap-6">
                
                <!-- FEATURE 2: WEAPON FORGING -->
                <div class="flex flex-col sm:flex-row lg:flex-col rounded-2xl sm:rounded-3xl border border-[#D5C6AA]/85 bg-gradient-to-br from-[#FAF6EE] via-[#F6EFE2] to-[#FAF5EA] shadow-[0_8px_24px_rgba(50,45,30,0.05)] overflow-hidden group">
                    
                    <!-- Forging Artwork Frame -->
                    <div class="relative overflow-hidden sm:w-5/12 lg:w-full aspect-[16/9] sm:aspect-auto lg:aspect-[16/8] border-b sm:border-b-0 lg:border-b border-[#D8CCA8]/80 bg-[#EFECE3]">
                        <img 
                            src="{{ asset('images/feature-forging.jpg') }}" 
                            alt="Reaktoria Low-Poly Medieval Blacksmith Forging Glowing Elemental Weapon" 
                            class="w-full h-full object-cover object-center select-none"
                            loading="lazy"
                        />
                        
                        <!-- Status Badge -->
                        <div class="absolute top-2.5 left-2.5 z-10 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA] shadow-xs text-xs font-mono font-semibold text-[#B84E1F] select-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#E06726]"></span>
                            <span>02 &bull; Craft</span>
                        </div>
                    </div>

                    <!-- Text Block (Hierarchy: Label -> Title -> Description -> Synthesis Detail) -->
                    <div class="p-4 sm:p-5 sm:w-7/12 lg:w-full space-y-3">
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2">
                                <span class="font-mono text-[10px] font-bold text-[#B84E1F] uppercase tracking-wider bg-[#FBEFE5] px-2 py-0.5 rounded border border-[#EAC9B0]">
                                    Core Pillar 02
                                </span>
                                <span class="text-[11px] font-mono text-[#8C6D4A]/70">&bull; Synthesis</span>
                            </div>

                            <h3 class="font-display font-extrabold text-lg sm:text-xl text-reaktoria-deep-forest tracking-tight">
                                WEAPON FORGING
                            </h3>

                            <p class="text-xs sm:text-sm text-reaktoria-ink/85 leading-relaxed font-body">
                                Transform successful discoveries into weapons, tools, and items built for the adventure.
                            </p>
                        </div>

                        <!-- Synthesis Indicator: FeS ↓ Heat Infusion ↓ Pyros Blade -->
                        <div class="pt-2 border-t border-[#E8DCBF]/50 flex items-center justify-between text-[11px] font-mono text-[#8C6D4A]/80">
                            <span class="text-[10px] uppercase font-bold text-[#8C6211]">Synthesis:</span>
                            <div class="flex items-center gap-1 font-semibold text-[#8C3A14]">
                                <span class="px-1.5 py-0.5 rounded bg-white/70 border border-[#DDD0B8]">FeS</span>
                                <span class="text-stone-400">&rarr;</span>
                                <span>Heat Infusion</span>
                                <span class="text-stone-400">&rarr;</span>
                                <span class="font-bold text-[#B84E1F]">⚔️ Pyros Blade</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- FEATURE 3: BATTLE & DISCOVERY -->
                <div class="flex flex-col sm:flex-row lg:flex-col rounded-2xl sm:rounded-3xl border border-[#D5C6AA]/85 bg-gradient-to-br from-[#FAF6EE] via-[#F6EFE2] to-[#FAF5EA] shadow-[0_8px_24px_rgba(50,45,30,0.05)] overflow-hidden group">
                    
                    <!-- Battle Artwork Frame -->
                    <div class="relative overflow-hidden sm:w-5/12 lg:w-full aspect-[16/9] sm:aspect-auto lg:aspect-[16/8] border-b sm:border-b-0 lg:border-b border-[#D8CCA8]/80 bg-[#EFECE3]">
                        <img 
                            src="{{ asset('images/feature-battle.jpg') }}" 
                            alt="Reaktoria Low-Poly Medieval Combat with Elemental Reaction Blade against Forest Creatures" 
                            class="w-full h-full object-cover object-center select-none"
                            loading="lazy"
                        />
                        
                        <!-- Status Badge -->
                        <div class="absolute top-2.5 left-2.5 z-10 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA] shadow-xs text-xs font-mono font-semibold text-[#9C381E] select-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#9C381E]"></span>
                            <span>03 &bull; Combat</span>
                        </div>
                    </div>

                    <!-- Text Block (Hierarchy: Label -> Title -> Description -> Tactical Detail) -->
                    <div class="p-4 sm:p-5 sm:w-7/12 lg:w-full space-y-3">
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2">
                                <span class="font-mono text-[10px] font-bold text-[#9C381E] uppercase tracking-wider bg-[#F9EBE7] px-2 py-0.5 rounded border border-[#E2BFB7]">
                                    Core Pillar 03
                                </span>
                                <span class="text-[11px] font-mono text-[#8C6D4A]/70">&bull; Field Action</span>
                            </div>

                            <h3 class="font-display font-extrabold text-lg sm:text-xl text-reaktoria-deep-forest tracking-tight">
                                BATTLE &amp; DISCOVERY
                            </h3>

                            <p class="text-xs sm:text-sm text-reaktoria-ink/85 leading-relaxed font-body">
                                Bring your creations into the field and discover new ways to face hostile encounters.
                            </p>
                        </div>

                        <!-- Tactical Metadata: Field Tactics • Elemental Affinity • Tactical Impact -->
                        <div class="pt-2 border-t border-[#E8DCBF]/50 flex items-center justify-between text-[11px] font-mono text-[#8C6D4A]/80">
                            <span class="text-[10px] uppercase font-bold text-[#9C381E]">Tactics:</span>
                            <div class="flex items-center gap-1.5 text-xs text-[#9C381E] font-medium">
                                <span>Field Tactics</span>
                                <span class="text-stone-300">&bull;</span>
                                <span>Elemental Affinity</span>
                                <span class="text-stone-300">&bull;</span>
                                <span class="font-bold">Tactical Impact</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- TERTIARY / WORLD SHOWCASE (BOTTOM / WIDE): Panoramic Feature — 04 WORLD EXPLORATION -->
            <div class="lg:col-span-12 rounded-2xl sm:rounded-3xl border border-[#D5C6AA]/85 bg-gradient-to-br from-[#FAF6EE] via-[#F6EFE2] to-[#FAF5EA] shadow-[0_12px_32px_rgba(50,45,30,0.07)] overflow-hidden transition-transform duration-500 hover:scale-[1.004] group">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                    
                    <!-- Panoramic Realm Artwork -->
                    <div class="lg:col-span-7 relative overflow-hidden aspect-[16/9] lg:aspect-[16/9] border-b lg:border-b-0 lg:border-r border-[#D8CCA8]/80 bg-[#EFECE3]">
                        <img 
                            src="{{ asset('images/realm-landscape.jpg') }}" 
                            alt="Reaktoria Low-Poly Medieval Explorable Realm Landscape with Village, Watermill, River, Bridge, Ruins and Mountains" 
                            class="w-full h-full object-cover object-center select-none"
                            loading="lazy"
                        />

                        <!-- Status Badge -->
                        <div class="absolute top-3 left-3 sm:top-3.5 sm:left-3.5 z-10 flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-[#FAF6EE]/92 backdrop-blur-md border border-[#D5C6AA] shadow-xs text-xs font-mono font-semibold text-[#2F6B3C] select-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#2F6B3C]"></span>
                            <span>04 &bull; Open World</span>
                        </div>

                        <!-- Environmental Landmark Tags Overlay -->
                        <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-3.5 z-10 hidden sm:flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-[#FAF6EE]/94 backdrop-blur-md border border-[#D5C6AA] text-[11px] font-mono text-reaktoria-wood-dark select-none shadow-xs">
                            <span>🌲 Forests</span>
                            <span class="text-stone-300">&bull;</span>
                            <span>🏘️ Villages</span>
                            <span class="text-stone-300">&bull;</span>
                            <span>🌊 Rivers</span>
                            <span class="text-stone-300">&bull;</span>
                            <span>🏰 Ruins</span>
                        </div>
                    </div>

                    <!-- Description Block (Hierarchy: Label -> Title -> Description -> Discovery Terms) -->
                    <div class="lg:col-span-5 p-5 sm:p-7 lg:p-8 space-y-4">
                        <div class="space-y-1.5">
                            <div class="flex items-center gap-2">
                                <span class="font-mono text-[10px] font-bold text-[#2F6B3C] uppercase tracking-wider bg-[#E8F2E4] px-2.5 py-0.5 rounded border border-[#C6DCBF]">
                                    Core Pillar 04
                                </span>
                                <span class="text-[11px] font-mono text-[#8C6D4A]/70">&bull; Realm Discovery</span>
                            </div>

                            <h3 class="font-display font-extrabold text-2xl sm:text-2xl lg:text-[1.75rem] text-reaktoria-deep-forest tracking-tight leading-snug">
                                WORLD EXPLORATION
                            </h3>

                            <p class="text-sm text-reaktoria-ink/85 leading-relaxed font-body">
                                Explore forests, villages, rivers, ruins, and battlefields across the Elemental Realm.
                            </p>
                        </div>

                        <!-- Discovery & Location Milestones -->
                        <div class="pt-3 border-t border-[#E8DCBF]/50 grid grid-cols-2 gap-2 text-xs font-mono text-[#6B5A42]">
                            <div class="flex items-center gap-1.5">
                                <span class="text-[#2F6B3C]">🌲</span>
                                <span>Dense Forests</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-[#8C6211]">🏘️</span>
                                <span>Medieval Villages</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-[#14566A]">🌊</span>
                                <span>Winding Rivers</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-[#B84E1F]">🏰</span>
                                <span>Ancient Ruins</span>
                            </div>
                        </div>

                        <!-- Footer Explorer Note -->
                        <div class="pt-1.5 text-[11px] font-mono text-[#8C6D4A]/70 flex items-center justify-between">
                            <span>World Scope: Free Exploration</span>
                            <span>Uncover elemental deposits</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
