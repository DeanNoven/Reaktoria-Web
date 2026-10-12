<!-- Section 6: Game Modes (Campaign vs Creative) -->
<section id="game-modes" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#EFE8D9] via-[#F8F4EC] to-[#EFE8D9]">

    <!-- Anchor Aliases for Global Navbar and Footer Navigation (#features, #modes, #game-modes) -->
    <span id="features" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>
    <span id="modes" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>
    <span id="modes-view" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental background transition -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-b from-[#EFE8D9] to-transparent"></div>
        <div class="absolute top-1/4 left-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(227,180,76,0.06)_0%,_transparent_70%)]"></div>
        <div class="absolute bottom-1/4 right-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(66,169,198,0.06)_0%,_transparent_70%)]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Editorial Section Header -->
        <div class="max-w-3xl mb-10 sm:mb-14 lg:mb-16 space-y-3.5">
            <span class="text-xs font-bold font-display uppercase tracking-widest text-[#2F6B3C]">
                GAME MODES
            </span>

            <h2 class="font-display font-extrabold text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.1]">
                PLAY YOUR WAY.
            </h2>

            <p class="text-base sm:text-lg text-reaktoria-ink/80 leading-relaxed font-body">
                Master the challenge. Or experiment without limits.
            </p>
        </div>

        <!-- TWO CINEMATIC EXPERIENCE PANELS: 01 CAMPAIGN (Progression) vs 02 CREATIVE (Free Experimentation) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-stretch">

            <!-- PANEL 01: CAMPAIGN -->
            <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden border-2 border-[#D5C6AA] bg-[#121B15] text-white shadow-[0_16px_36px_rgba(25,35,28,0.12)] flex flex-col justify-between min-h-[560px] sm:min-h-[600px] transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_24px_48px_rgba(20,30,22,0.22)]">

                <!-- Background Image Layer -->
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img 
                        src="{{ asset('images/section7-campaign.jpg') }}" 
                        alt="Reaktoria Campaign Game Mode: Elemental Puzzle Challenge and Level Progression" 
                        class="w-full h-full object-cover object-[center_36%] select-none transition-transform duration-700 ease-out group-hover:scale-[1.03]"
                        loading="lazy"
                    />

                    <!-- Atmospheric Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0A130E] via-[#0E1A13]/85 via-50% to-transparent pointer-events-none"></div>
                    <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/55 to-transparent pointer-events-none"></div>
                </div>

                <!-- Top Header Bar: Mode Label & Tag -->
                <div class="relative z-10 p-6 sm:p-8 flex items-center justify-between gap-3 select-none">
                    <span class="font-display text-xs font-bold tracking-widest text-[#FCEBD9] uppercase">
                        01 &bull; CAMPAIGN
                    </span>

                    <span class="font-body text-xs font-semibold tracking-wider text-[#E2DACB] uppercase">
                        Progression Mode
                    </span>
                </div>

                <!-- Bottom Content Area -->
                <div class="relative z-10 p-6 sm:p-8 space-y-5">

                    <!-- Headline & Description -->
                    <div class="space-y-2.5">
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-[#FAF5EB] tracking-tight uppercase leading-tight group-hover:text-white transition-colors">
                            PROGRESS THROUGH THE REALM.
                        </h3>

                        <p class="text-sm sm:text-base text-[#D3DDD1] leading-relaxed font-body">
                            Take on a series of elemental challenges, solve each level through experimentation, and unlock new discoveries as you progress.
                        </p>
                    </div>

                    <!-- Clean Unboxed Feature Highlights -->
                    <div class="pt-4 border-t border-white/15 space-y-2.5 font-body text-xs text-[#D3DDD1]">
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#E06726] font-display font-bold">I.</span>
                            <div>
                                <span class="text-white font-semibold">Elemental Challenges:</span>
                                <span class="text-[#D3DDD1]/80"> Solve environmental blockades using localized chemical reactions.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#E06726] font-display font-bold">II.</span>
                            <div>
                                <span class="text-white font-semibold">Discovery Milestones:</span>
                                <span class="text-[#D3DDD1]/80"> Unlock rare elemental specimens as rewards for overcoming hostile encounters.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#E06726] font-display font-bold">III.</span>
                            <div>
                                <span class="text-white font-semibold">Master Trials:</span>
                                <span class="text-[#D3DDD1]/80"> Test combined knowledge against complex alchemical puzzles across 12 distinct realm zones.</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- PANEL 02: CREATIVE -->
            <div class="group relative rounded-2xl sm:rounded-3xl overflow-hidden border-2 border-[#D5C6AA] bg-[#101C22] text-white shadow-[0_16px_36px_rgba(20,32,40,0.12)] flex flex-col justify-between min-h-[560px] sm:min-h-[600px] transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_24px_48px_rgba(15,28,36,0.22)]">

                <!-- Background Image Layer -->
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img 
                        src="{{ asset('images/section7-creative.jpg') }}" 
                        alt="Reaktoria Creative Game Mode: Free Elemental Chemistry Workspace and Synthesis" 
                        class="w-full h-full object-cover object-center select-none transition-transform duration-700 ease-out group-hover:scale-[1.03]"
                        loading="lazy"
                    />

                    <!-- Atmospheric Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#081217] via-[#0D1D24]/85 via-50% to-transparent pointer-events-none"></div>
                    <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/55 to-transparent pointer-events-none"></div>
                </div>

                <!-- Top Header Bar: Mode Label & Tag -->
                <div class="relative z-10 p-6 sm:p-8 flex items-center justify-between gap-3 select-none">
                    <span class="font-display text-xs font-bold tracking-widest text-[#E2F5FA] uppercase">
                        02 &bull; CREATIVE
                    </span>

                    <span class="font-body text-xs font-semibold tracking-wider text-[#E2DACB] uppercase">
                        Free Experimentation
                    </span>
                </div>

                <!-- Bottom Content Area -->
                <div class="relative z-10 p-6 sm:p-8 space-y-5">

                    <!-- Headline & Description -->
                    <div class="space-y-2.5">
                        <h3 class="font-display font-extrabold text-2xl sm:text-3xl text-[#FAF5EB] tracking-tight uppercase leading-tight group-hover:text-white transition-colors">
                            EXPERIMENT WITHOUT LIMITS.
                        </h3>

                        <p class="text-sm sm:text-base text-[#CFDEE3] leading-relaxed font-body">
                            Enter a space built for experimentation. Combine elements, test reactions, and forge unexpected creations with no fixed objective.
                        </p>
                    </div>

                    <!-- Clean Unboxed Feature Highlights -->
                    <div class="pt-4 border-t border-white/15 space-y-2.5 font-body text-xs text-[#CFDEE3]">
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#42A9C6] font-display font-bold">I.</span>
                            <div>
                                <span class="text-white font-semibold">Unlimited Reagents:</span>
                                <span class="text-[#CFDEE3]/80"> Full access to every discovered element with zero depletion.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#42A9C6] font-display font-bold">II.</span>
                            <div>
                                <span class="text-white font-semibold">Hypothesis Testing:</span>
                                <span class="text-[#CFDEE3]/80"> Test hypothetical formulas in the reaction vessel without penalty or fail-states.</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="text-[#42A9C6] font-display font-bold">III.</span>
                            <div>
                                <span class="text-white font-semibold">Instant Forge &amp; Test:</span>
                                <span class="text-[#CFDEE3]/80"> Forge custom experimental weapons and immediately test impact against training targets.</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
