<!-- =========================================================================
     SECTION 7 — GAME MODES: PLAY YOUR WAY
     Two distinct gameplay experiences: 01 Campaign & 02 Creative
     ========================================================================= -->
<section id="game-modes" class="relative py-16 sm:py-20 lg:py-24 overflow-hidden bg-gradient-to-b from-[#F5EEDF] via-[#F8F4EC] to-[#EFE8D9]">

    <!-- Global Anchor for Navbar Navigation (#modes) -->
    <span id="modes-view" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental Background Transition Layer -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none">
        <!-- Gentle Transition from Section 6 Parchment Base -->
        <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-b from-[#F5EEDF] via-[#F5EEDF]/80 to-transparent"></div>

        <!-- Subtle Topographical Field Cartography Pattern -->
        <div class="absolute inset-0 opacity-[0.035] text-[#4A2E1D]">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <defs>
                    <pattern id="modes-grid-pattern" width="56" height="56" patternUnits="userSpaceOnUse">
                        <circle cx="28" cy="28" r="1" fill="currentColor" />
                        <line x1="28" y1="20" x2="28" y2="36" stroke="currentColor" stroke-width="0.5" opacity="0.4" />
                        <line x1="20" y1="28" x2="36" y2="28" stroke="currentColor" stroke-width="0.5" opacity="0.4" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#modes-grid-pattern)" />
            </svg>
        </div>

        <!-- Warm Ambient Hearth Atmosphere Glows -->
        <div class="absolute top-1/4 left-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(227,180,76,0.06)_0%,_transparent_70%)]"></div>
        <div class="absolute bottom-1/4 right-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(66,169,198,0.06)_0%,_transparent_70%)]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- =================================================================
             SECTION HEADER: Confident, Restrained, Editorial
             ================================================================= -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-10 sm:mb-12 lg:mb-14">
            
            <div class="space-y-3 max-w-2xl">
                <!-- Eyebrow Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#EFE4D0]/90 border border-[#D5C6AA] shadow-2xs">
                    <span class="w-2 h-2 rounded-full bg-[#C85A3D]"></span>
                    <span class="text-xs font-mono font-bold tracking-widest text-reaktoria-wood-dark uppercase">
                        GAME MODES
                    </span>
                </div>

                <!-- Main Display Heading -->
                <h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-none">
                    PLAY YOUR WAY.
                </h2>

                <!-- Subheading / Supporting Text -->
                <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/80 leading-relaxed font-body">
                    Master the challenge. Or experiment without limits.
                </p>
            </div>

            <!-- In-World Philosophy Badge -->
            <div class="hidden md:flex items-center gap-2.5 font-mono text-xs text-[#6B5A42] bg-[#FAF6EE]/90 backdrop-blur-md px-3.5 py-1.5 rounded-xl border border-[#D5C6AA]/80 shadow-xs self-start md:self-end select-none">
                <span class="w-1.5 h-1.5 rounded-full bg-[#1B7088]"></span>
                <span class="font-bold text-reaktoria-deep-forest">Two Experiences</span>
                <span class="text-stone-300">&bull;</span>
                <span>One Elemental System</span>
            </div>

        </div>

        <!-- =================================================================
             TWO CINEMATIC EXPERIENCE PANELS: Equal Visual Weight
             01 CAMPAIGN (Progression) vs 02 CREATIVE (Free Experimentation)
             ================================================================= -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-7 lg:gap-8 items-stretch">

            <!-- -------------------------------------------------------------
                 PANEL 01: CAMPAIGN
                 Challenge → Experiment → Solve → Progress
                 ------------------------------------------------------------- -->
            <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden border border-[#D5C6AA]/80 bg-[#121B15] text-white shadow-[0_16px_36px_rgba(25,35,28,0.12)] flex flex-col justify-between min-h-[580px] sm:min-h-[640px] lg:min-h-[680px] transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_24px_48px_rgba(20,30,22,0.22)]">

                <!-- Background Image Layer -->
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img 
                        src="{{ asset('images/section7-campaign.jpg') }}" 
                        alt="Reaktoria Campaign Game Mode — Elemental Puzzle Challenge and Level Progression" 
                        class="w-full h-full object-cover object-[center_36%] select-none transition-transform duration-700 ease-out group-hover:scale-[1.03]"
                        loading="lazy"
                    />

                    <!-- Atmospheric Gradient Overlay: Preserves artwork top, darkens base for maximum readability -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0A130E] via-[#0E1A13]/85 via-50% to-transparent pointer-events-none"></div>
                    <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/55 to-transparent pointer-events-none"></div>

                    <!-- Subtle Amber/Warm Alchemical Glow on Hover -->
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(224,103,38,0.16)_0%,_transparent_65%)] opacity-70 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>

                <!-- Top Header Bar: Number Pill & Mode Label -->
                <div class="relative z-10 p-5 sm:p-7 flex items-center justify-between gap-3 select-none">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#0C1510]/85 backdrop-blur-md border border-[#C85A3D]/50 shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-[#E06726] animate-pulse"></span>
                        <span class="font-mono text-xs font-bold tracking-wider text-[#FCEBD9] uppercase">
                            01 &bull; CAMPAIGN
                        </span>
                    </div>

                    <!-- Mode Tag -->
                    <span class="px-2.5 py-1 rounded-md bg-black/45 backdrop-blur-md border border-white/10 font-mono text-[11px] font-semibold tracking-wide text-[#E2DACB] uppercase">
                        Progression Mode
                    </span>
                </div>

                <!-- Bottom Content Area -->
                <div class="relative z-10 p-6 sm:p-8 space-y-5">

                    <!-- Supporting Metadata Indicators -->
                    <div class="flex flex-wrap items-center gap-2 select-none">
                        <span class="px-2.5 py-0.5 rounded-md bg-white/10 backdrop-blur-sm border border-white/15 text-[10px] sm:text-[11px] font-mono font-bold tracking-wider text-[#F5EEDB] uppercase">
                            Objectives
                        </span>
                        <span class="text-white/30 text-xs">&bull;</span>
                        <span class="px-2.5 py-0.5 rounded-md bg-white/10 backdrop-blur-sm border border-white/15 text-[10px] sm:text-[11px] font-mono font-bold tracking-wider text-[#F5EEDB] uppercase">
                            Level Progression
                        </span>
                        <span class="text-white/30 text-xs">&bull;</span>
                        <span class="px-2.5 py-0.5 rounded-md bg-white/10 backdrop-blur-sm border border-white/15 text-[10px] sm:text-[11px] font-mono font-bold tracking-wider text-[#F5EEDB] uppercase">
                            Challenges
                        </span>
                    </div>

                    <!-- Headline & Description -->
                    <div class="space-y-2.5">
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-[#FAF5EB] tracking-tight uppercase leading-tight group-hover:text-white transition-colors">
                            PROGRESS THROUGH THE REALM.
                        </h3>

                        <p class="text-sm sm:text-base text-[#D3DDD1] leading-relaxed font-body">
                            Take on a series of elemental challenges, solve each level through experimentation, and unlock new discoveries as you progress.
                        </p>
                    </div>

                    <!-- Gameplay Loop: OBJECTIVE → EXPERIMENT → SOLVE → PROGRESS (Subdued secondary hierarchy) -->
                    <div class="pt-3 border-t border-white/10 space-y-1.5">
                        <div class="flex items-center justify-between text-[10px] font-mono uppercase tracking-wider text-white/50">
                            <span class="font-medium text-white/60">Campaign Progression Loop</span>
                            <span class="text-white/40 flex items-center gap-1">
                                <span>Master Levels</span>
                                <span>&rarr;</span>
                            </span>
                        </div>

                        <div class="grid grid-cols-4 gap-1.5 text-center font-mono text-[10px] sm:text-xs">
                            <div class="p-1.5 rounded bg-white/[0.04] border border-white/[0.07] text-white/70">
                                <span class="block text-[8px] text-[#E8A572]/70 uppercase font-semibold">01</span>
                                <span class="truncate">Objective</span>
                            </div>
                            <div class="p-1.5 rounded bg-white/[0.04] border border-white/[0.07] text-white/70">
                                <span class="block text-[8px] text-[#E8A572]/70 uppercase font-semibold">02</span>
                                <span class="truncate">Experiment</span>
                            </div>
                            <div class="p-1.5 rounded bg-white/[0.04] border border-white/[0.07] text-white/70">
                                <span class="block text-[8px] text-[#E8A572]/70 uppercase font-semibold">03</span>
                                <span class="truncate">Solve</span>
                            </div>
                            <div class="p-1.5 rounded bg-[#E06726]/12 border border-[#E06726]/25 text-[#FCEBD9]/90">
                                <span class="block text-[8px] text-[#E8A572]/85 uppercase font-bold">04</span>
                                <span class="font-medium truncate">Progress</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- -------------------------------------------------------------
                 PANEL 02: CREATIVE
                 Combine → Experiment → Discover → Create
                 ------------------------------------------------------------- -->
            <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden border border-[#D5C6AA]/80 bg-[#101C22] text-white shadow-[0_16px_36px_rgba(20,32,40,0.12)] flex flex-col justify-between min-h-[580px] sm:min-h-[640px] lg:min-h-[680px] transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_24px_48px_rgba(15,28,36,0.22)]">

                <!-- Background Image Layer -->
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img 
                        src="{{ asset('images/section7-creative.jpg') }}" 
                        alt="Reaktoria Creative Game Mode — Free Elemental Chemistry Workspace and Synthesis" 
                        class="w-full h-full object-cover object-center select-none transition-transform duration-700 ease-out group-hover:scale-[1.03]"
                        loading="lazy"
                    />

                    <!-- Atmospheric Gradient Overlay: Preserves experimental details, deepens lower text area -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#081217] via-[#0D1D24]/85 via-50% to-transparent pointer-events-none"></div>
                    <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/55 to-transparent pointer-events-none"></div>

                    <!-- Radiant Cyan/Electric Blue Elemental Glow on Hover -->
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_rgba(66,169,198,0.2)_0%,_transparent_65%)] opacity-70 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                </div>

                <!-- Top Header Bar: Number Pill & Mode Label -->
                <div class="relative z-10 p-5 sm:p-7 flex items-center justify-between gap-3 select-none">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-[#07151C]/85 backdrop-blur-md border border-[#42A9C6]/50 shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-[#42A9C6] animate-pulse"></span>
                        <span class="font-mono text-xs font-bold tracking-wider text-[#E2F5FA] uppercase">
                            02 &bull; CREATIVE
                        </span>
                    </div>

                    <!-- Mode Tag -->
                    <span class="px-2.5 py-1 rounded-md bg-black/45 backdrop-blur-md border border-white/10 font-mono text-[11px] font-semibold tracking-wide text-[#E2DACB] uppercase">
                        Free Experimentation
                    </span>
                </div>

                <!-- Bottom Content Area -->
                <div class="relative z-10 p-6 sm:p-8 space-y-5">

                    <!-- Supporting Metadata Indicators -->
                    <div class="flex flex-wrap items-center gap-2 select-none">
                        <span class="px-2.5 py-0.5 rounded-md bg-white/10 backdrop-blur-sm border border-white/15 text-[10px] sm:text-[11px] font-mono font-bold tracking-wider text-[#F5EEDB] uppercase">
                            Free Experimentation
                        </span>
                        <span class="text-white/30 text-xs">&bull;</span>
                        <span class="px-2.5 py-0.5 rounded-md bg-white/10 backdrop-blur-sm border border-white/15 text-[10px] sm:text-[11px] font-mono font-bold tracking-wider text-[#F5EEDB] uppercase">
                            Element Combinations
                        </span>
                        <span class="text-white/30 text-xs">&bull;</span>
                        <span class="px-2.5 py-0.5 rounded-md bg-white/10 backdrop-blur-sm border border-white/15 text-[10px] sm:text-[11px] font-mono font-bold tracking-wider text-[#F5EEDB] uppercase">
                            Discovery
                        </span>
                    </div>

                    <!-- Headline & Description -->
                    <div class="space-y-2.5">
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-[#FAF5EB] tracking-tight uppercase leading-tight group-hover:text-white transition-colors">
                            EXPERIMENT WITHOUT LIMITS.
                        </h3>

                        <p class="text-sm sm:text-base text-[#CFDEE3] leading-relaxed font-body">
                            Enter a space built for experimentation. Combine elements, test reactions, and forge unexpected creations with no fixed objective.
                        </p>
                    </div>

                    <!-- Gameplay Loop: COMBINE → EXPERIMENT → DISCOVER → CREATE (Subdued secondary hierarchy) -->
                    <div class="pt-3 border-t border-white/10 space-y-1.5">
                        <div class="flex items-center justify-between text-[10px] font-mono uppercase tracking-wider text-white/50">
                            <span class="font-medium text-white/60">Creative Synthesis Loop</span>
                            <span class="text-white/40 flex items-center gap-1">
                                <span>Endless Forge</span>
                                <span>&rarr;</span>
                            </span>
                        </div>

                        <div class="grid grid-cols-4 gap-1.5 text-center font-mono text-[10px] sm:text-xs">
                            <div class="p-1.5 rounded bg-white/[0.04] border border-white/[0.07] text-white/70">
                                <span class="block text-[8px] text-[#67BED6]/70 uppercase font-semibold">01</span>
                                <span class="truncate">Combine</span>
                            </div>
                            <div class="p-1.5 rounded bg-white/[0.04] border border-white/[0.07] text-white/70">
                                <span class="block text-[8px] text-[#67BED6]/70 uppercase font-semibold">02</span>
                                <span class="truncate">Experiment</span>
                            </div>
                            <div class="p-1.5 rounded bg-white/[0.04] border border-white/[0.07] text-white/70">
                                <span class="block text-[8px] text-[#67BED6]/70 uppercase font-semibold">03</span>
                                <span class="truncate">Discover</span>
                            </div>
                            <div class="p-1.5 rounded bg-[#42A9C6]/12 border border-[#42A9C6]/25 text-[#E2F5FA]/90">
                                <span class="block text-[8px] text-[#67BED6]/85 uppercase font-bold">04</span>
                                <span class="font-medium truncate">Create</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
