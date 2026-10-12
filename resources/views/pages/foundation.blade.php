<x-layouts.app>
    <x-slot:title>Reaktoria: Visual & Technical Foundation</x-slot:title>

    <div class="py-10 sm:py-14">
        <x-ui.container size="default" class="space-y-12">

            <!-- Realm Header / Foundation Notice -->
            <header class="bg-gradient-to-r from-reaktoria-cream via-[#FFFBF2] to-reaktoria-sky-light/40 border-2 border-[#E2D5BA] rounded-xl p-6 sm:p-8 shadow-sm space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-2.5">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded bg-reaktoria-forest text-reaktoria-cream-light font-display font-bold text-sm border-2 border-reaktoria-deep-forest shadow-sm">
                            R
                        </span>
                        <div>
                            <span class="font-display font-bold tracking-wider text-xl text-reaktoria-forest-dark block">REAKTORIA</span>
                            <span class="text-xs font-medium text-reaktoria-wood">Low-Poly 3D Medieval Adventure &amp; Chemistry</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-ui.badge variant="grass" size="sm">Daylight Atmosphere</x-ui.badge>
                        <x-ui.badge variant="chemistry" size="sm">Style Guide &amp; Foundation</x-ui.badge>
                    </div>
                </div>

                <div class="pt-2 border-t border-[#E8DCC4] space-y-2">
                    <x-ui.heading as="h1" size="h1" color="forest">
                        The Visual &amp; Technical Foundation
                    </x-ui.heading>
                    <p class="text-reaktoria-ink-muted text-base max-w-3xl leading-relaxed">
                        A colorful low-poly fantasy world of bright green forests, blue rivers, wooden bridges, terracotta rooftops, and warm daylight. Chemistry is the discovery engine; medieval adventure is the realm.
                    </p>
                </div>
            </header>

            <!-- 1. Environmental Color Palette System -->
            <section class="space-y-5">
                <div class="flex items-center gap-2.5">
                    <span class="w-3 h-3 rounded-full bg-reaktoria-grass border border-reaktoria-forest"></span>
                    <x-ui.heading as="h2" size="h2" color="forest">
                        1. Game Environment Color Palette
                    </x-ui.heading>
                </div>
                <p class="text-sm text-reaktoria-ink-muted -mt-2">
                    Extracted directly from the low-poly 3D world: pine forests, sunlit meadows, open skies, rivers, timber structures, and village roofs.
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    <!-- Forest Green -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-reaktoria-forest border-2 border-reaktoria-deep-forest flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-reaktoria-cream">#2F6B3C</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-reaktoria-forest">Pine Forest</div>
                            <div class="text-xs text-reaktoria-ink-muted">Low-poly pine trees &amp; canopy</div>
                        </div>
                    </x-ui.card>

                    <!-- Grass & Light Grass -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-gradient-to-r from-reaktoria-grass to-reaktoria-grass-light border-2 border-reaktoria-forest flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-white">#63A84E / #8BCB63</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-[#2B5E20]">Meadow Grass</div>
                            <div class="text-xs text-reaktoria-ink-muted">Sunlit terrain &amp; battle clearings</div>
                        </div>
                    </x-ui.card>

                    <!-- Sky & Light Sky -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-gradient-to-r from-reaktoria-sky to-reaktoria-sky-light border-2 border-[#5AA4CB] flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-[#184F69]">#8CC8E8 / #C6E6F4</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-[#184F69]">Daylight Sky &amp; River</div>
                            <div class="text-xs text-reaktoria-ink-muted">Atmospheric sky &amp; blue streams</div>
                        </div>
                    </x-ui.card>

                    <!-- Timber & Earth -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-gradient-to-r from-reaktoria-wood to-reaktoria-earth border-2 border-reaktoria-wood-dark flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-reaktoria-cream">#6B452E / #8B6040</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-reaktoria-wood">Timber &amp; Trail Earth</div>
                            <div class="text-xs text-reaktoria-ink-muted">Wooden bridges, fences &amp; dirt roads</div>
                        </div>
                    </x-ui.card>

                    <!-- Roof Red -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-reaktoria-roof border-2 border-[#8E341E] flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-white">#C85A3D</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-[#8E341E]">Village Rooftops</div>
                            <div class="text-xs text-reaktoria-ink-muted">Terracotta medieval house roofs</div>
                        </div>
                    </x-ui.card>

                    <!-- Stone -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-reaktoria-stone border-2 border-reaktoria-stone-dark flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-white">#71808A</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-reaktoria-stone-dark">Mountain Stone</div>
                            <div class="text-xs text-reaktoria-ink-muted">Blue-gray cliff rocks &amp; castle ruins</div>
                        </div>
                    </x-ui.card>

                    <!-- Cream / Parchment -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-reaktoria-cream border-2 border-[#D7C29F] flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-reaktoria-wood-dark">#F7EBD0</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-reaktoria-wood">Stucco &amp; Parchment</div>
                            <div class="text-xs text-reaktoria-ink-muted">Medieval house walls &amp; field notes</div>
                        </div>
                    </x-ui.card>

                    <!-- Chemistry Blue & Gold -->
                    <x-ui.card variant="default" padding="sm" class="space-y-2.5">
                        <div class="h-16 rounded bg-gradient-to-r from-reaktoria-chemistry to-reaktoria-gold border-2 border-[#2C7B91] flex items-end p-2 shadow-inner">
                            <span class="text-xs font-mono font-bold text-white">#42A9C6 / #E3B44C</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm text-[#185E73]">Chemistry &amp; Discovery</div>
                            <div class="text-xs text-reaktoria-ink-muted">Flask liquid &amp; success highlights</div>
                        </div>
                    </x-ui.card>
                </div>
            </section>

            <!-- 2. Typography Hierarchy -->
            <section class="space-y-5">
                <div class="flex items-center gap-2.5">
                    <span class="w-3 h-3 rounded-full bg-reaktoria-wood border border-reaktoria-wood-dark"></span>
                    <x-ui.heading as="h2" size="h2" color="wood">
                        2. Adventurer's Typography System
                    </x-ui.heading>
                </div>
                <p class="text-sm text-reaktoria-ink-muted -mt-2">
                    Friendly, adventurous fantasy serifs (Cinzel) paired with clean modern educational sans-serifs (Plus Jakarta Sans) and precise chemical monospace notation (JetBrains Mono).
                </p>

                <x-ui.card variant="parchment" class="space-y-6">
                    <div class="border-b border-[#E3D4B6] pb-4">
                        <span class="text-xs font-mono font-bold text-reaktoria-wood uppercase block mb-1">Display Title (Cinzel Bold)</span>
                        <x-ui.heading as="h1" size="display" color="forest">
                            Reaktoria: The Elemental Realm
                        </x-ui.heading>
                    </div>

                    <div class="border-b border-[#E3D4B6] pb-4">
                        <span class="text-xs font-mono font-bold text-reaktoria-wood uppercase block mb-1">Section Heading (Cinzel SemiBold)</span>
                        <x-ui.heading as="h2" size="h2" color="ink">
                            Synthesize Elements at the Forest Forge
                        </x-ui.heading>
                    </div>

                    <div class="border-b border-[#E3D4B6] pb-4">
                        <span class="text-xs font-mono font-bold text-reaktoria-wood uppercase block mb-1">Sub-heading (Cinzel Medium)</span>
                        <x-ui.heading as="h3" size="h3" color="wood">
                            The River Crossing &amp; Village Workshop
                        </x-ui.heading>
                    </div>

                    <div class="border-b border-[#E3D4B6] pb-4 space-y-2">
                        <span class="text-xs font-mono font-bold text-reaktoria-wood uppercase block mb-1">Body Text (Plus Jakarta Sans)</span>
                        <p class="text-reaktoria-ink text-base leading-relaxed">
                            Venture beyond the watchtowers into the clearing. Harvest natural reactants from low-poly river beds and stone formations. When two elements combine, the Expert System explains the molecular bond before forging your new adventure gear.
                        </p>
                    </div>

                    <div>
                        <span class="text-xs font-mono font-bold text-[#185E73] uppercase block mb-1">Chemical Notation &amp; Formula (JetBrains Mono)</span>
                        <div class="font-mono text-sm text-[#185E73] bg-[#EAF3F7] p-3 rounded border-2 border-reaktoria-chemistry/40">
                            Synthesis: Fe + S ➔ FeS (Iron Sulfide) &nbsp;|&nbsp; 2H₂ + O₂ ➔ 2H₂O + ΔH (Exothermic)
                        </div>
                    </div>
                </x-ui.card>
            </section>

            <!-- 3. Interactive UI & Game Buttons -->
            <section class="space-y-5">
                <div class="flex items-center gap-2.5">
                    <span class="w-3 h-3 rounded-full bg-reaktoria-chemistry border border-[#23758C]"></span>
                    <x-ui.heading as="h2" size="h2" color="chemistry">
                        3. Tactile Game Controls &amp; Buttons
                    </x-ui.heading>
                </div>
                <p class="text-sm text-reaktoria-ink-muted -mt-2">
                    Controls styled after medieval game menus, timber signs, and low-poly equipment plates.
                </p>

                <!-- Game Menu Plate from Reference -->
                <x-ui.card variant="default" class="space-y-4">
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-reaktoria-wood uppercase font-display tracking-wider">Game Menu Plate (Inspired by In-Game HUD)</span>
                        <p class="text-xs text-reaktoria-ink-muted">Faceted slate-teal button with cream border, directly mirroring the game's main menu:</p>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 p-4 bg-gradient-to-r from-reaktoria-hud via-[#24353E] to-reaktoria-hud rounded-lg border-2 border-reaktoria-hud-border">
                        <x-ui.button variant="menu" size="md" class="gap-2.5">
                            <svg class="w-4 h-4 text-reaktoria-cream" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 17.5L3 6V3h3l11.5 11.5"/><path d="M13 19l6-6"/><path d="M16 16l4 4"/><path d="M19 21l2-2"/></svg>
                            <span>Campaign Mode</span>
                        </x-ui.button>
                        <x-ui.button variant="menu" size="md" class="gap-2.5 opacity-80 hover:opacity-100">
                            <svg class="w-4 h-4 text-reaktoria-cream" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.31L4.15 19.4A2 2 0 0 0 5.85 22h12.3a2 2 0 0 0 1.7-2.6L14 9.31V2"/><path d="M8.5 2h7"/></svg>
                            <span>Creative Lab</span>
                        </x-ui.button>
                        <x-ui.button variant="menu" size="md" class="gap-2.5 opacity-80 hover:opacity-100">
                            <svg class="w-4 h-4 text-reaktoria-cream" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                            <span>Settings</span>
                        </x-ui.button>
                    </div>

                    <!-- Material Buttons -->
                    <div class="pt-4 border-t border-[#E8EEE8] space-y-3">
                        <span class="text-xs font-bold text-reaktoria-wood uppercase font-display tracking-wider">Environmental Material Buttons</span>
                        <div class="flex flex-wrap items-center gap-3">
                            <x-ui.button variant="forest" size="md">Forest Green</x-ui.button>
                            <x-ui.button variant="grass" size="md">Vibrant Grass</x-ui.button>
                            <x-ui.button variant="wood" size="md">Timber Wood</x-ui.button>
                            <x-ui.button variant="roof" size="md">Roof Red</x-ui.button>
                            <x-ui.button variant="chemistry" size="md">Chemistry Blue</x-ui.button>
                            <x-ui.button variant="gold" size="md">Chemistry Gold</x-ui.button>
                            <x-ui.button variant="cream" size="md">Parchment</x-ui.button>
                            <x-ui.button variant="ghost" size="md">Ghost Action</x-ui.button>
                        </div>
                    </div>

                    <!-- Sizing -->
                    <div class="pt-4 border-t border-[#E8EEE8] flex flex-wrap items-center gap-3">
                        <x-ui.button variant="forest" size="sm">Small Action</x-ui.button>
                        <x-ui.button variant="forest" size="md">Medium Action</x-ui.button>
                        <x-ui.button variant="forest" size="lg">Large Adventure CTA</x-ui.button>
                    </div>
                </x-ui.card>
            </section>

            <!-- 4. Element Tokens & Badges -->
            <section class="space-y-5">
                <div class="flex items-center gap-2.5">
                    <span class="w-3 h-3 rounded-full bg-reaktoria-roof border border-[#8E341E]"></span>
                    <x-ui.heading as="h2" size="h2" color="ink">
                        4. Elemental Archive &amp; Game Tokens
                    </x-ui.heading>
                </div>
                <p class="text-sm text-reaktoria-ink-muted -mt-2">
                    Chemical element badges and status indicators styled as game item collectibles.
                </p>

                <x-ui.card variant="default">
                    <div class="flex flex-wrap items-center gap-2.5">
                        <x-ui.badge variant="forest">[O] Oxygen (8)</x-ui.badge>
                        <x-ui.badge variant="grass">[H] Hydrogen (1)</x-ui.badge>
                        <x-ui.badge variant="earth">[C] Carbon (6)</x-ui.badge>
                        <x-ui.badge variant="stone">[Fe] Iron (26)</x-ui.badge>
                        <x-ui.badge variant="chemistry">[Cu] Copper (29)</x-ui.badge>
                        <x-ui.badge variant="gold">[Au] Gold (79)</x-ui.badge>
                        <x-ui.badge variant="roof">[S] Sulfur (16)</x-ui.badge>
                        <x-ui.badge variant="sky">Water River Biome</x-ui.badge>
                        <x-ui.badge variant="cream">Synthesis Reaction</x-ui.badge>
                        <x-ui.badge variant="hud">Battle Arena Spawn</x-ui.badge>
                    </div>
                </x-ui.card>
            </section>

            <!-- 5. Environmental Surface Containers -->
            <section class="space-y-5">
                <div class="flex items-center gap-2.5">
                    <span class="w-3 h-3 rounded-full bg-reaktoria-gold border border-[#BA8926]"></span>
                    <x-ui.heading as="h2" size="h2" color="wood">
                        5. Environmental Material Panels
                    </x-ui.heading>
                </div>
                <p class="text-sm text-reaktoria-ink-muted -mt-2">
                    Four distinct natural material archetypes for displaying future game content without corporate styling.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Parchment Card -->
                    <x-ui.card variant="parchment" interactive="true" class="space-y-2">
                        <x-ui.badge variant="wood" size="sm">Parchment</x-ui.badge>
                        <h4 class="font-display font-bold text-reaktoria-wood text-base">Village Ledger</h4>
                        <p class="text-xs text-reaktoria-ink leading-relaxed">
                            Warm cream paper surface for game quest notes, lore scrolls, and educational guides.
                        </p>
                    </x-ui.card>

                    <!-- Stone Card -->
                    <x-ui.card variant="stone" interactive="true" class="space-y-2">
                        <x-ui.badge variant="stone" size="sm">Mountain Stone</x-ui.badge>
                        <h4 class="font-display font-bold text-reaktoria-stone-dark text-base">Fortress Masonry</h4>
                        <p class="text-xs text-reaktoria-ink leading-relaxed">
                            Blue-gray chiseled stone block for laboratory workbenches and ancient ruins.
                        </p>
                    </x-ui.card>

                    <!-- Forest Card -->
                    <x-ui.card variant="forest" interactive="true" class="space-y-2">
                        <x-ui.badge variant="grass" size="sm">Forest Clearing</x-ui.badge>
                        <h4 class="font-display font-bold text-reaktoria-forest text-base">Woodland Clearing</h4>
                        <p class="text-xs text-reaktoria-ink leading-relaxed">
                            Lush meadow green tint for open combat arenas, pine groves, and nature explorations.
                        </p>
                    </x-ui.card>

                    <!-- HUD Slate Card -->
                    <x-ui.card variant="hud" interactive="true" class="space-y-2">
                        <x-ui.badge variant="hud" size="sm">Tactical HUD</x-ui.badge>
                        <h4 class="font-display font-bold text-reaktoria-cream text-base">Game HUD Slate</h4>
                        <p class="text-xs text-reaktoria-cream-dim leading-relaxed">
                            Tactile slate plate for gameplay controls, chemical reactions, and inventory slots.
                        </p>
                    </x-ui.card>
                </div>
            </section>

            <!-- 6. Low-Poly Asset Frame Container -->
            <section class="space-y-5">
                <div class="flex items-center gap-2.5">
                    <span class="w-3 h-3 rounded-full bg-reaktoria-sky border border-[#5AA4CB]"></span>
                    <x-ui.heading as="h2" size="h2" color="ink">
                        6. Low-Poly Asset Frames
                    </x-ui.heading>
                </div>
                <p class="text-sm text-reaktoria-ink-muted -mt-2">
                    Framing components designed to seamlessly showcase 3D Blender renders, screenshots, and game maps.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <!-- Timber Frame -->
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-reaktoria-wood uppercase font-display">Timber Wood Frame</span>
                        <x-ui.image-container frame="wood" aspect="video">
                            <div class="w-full h-full bg-gradient-to-br from-[#8BCB63]/40 via-reaktoria-cream/50 to-reaktoria-sky/40 flex flex-col items-center justify-center p-4 text-center">
                                <div class="flex items-center gap-1.5 text-reaktoria-wood mb-1">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L7 9h3l-4 7h6v4h2v-4h6l-4-7h3z"/></svg>
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                                </div>
                                <span class="font-display font-bold text-sm text-reaktoria-wood">Village Environment Frame</span>
                                <span class="text-xs text-reaktoria-ink-muted">Ready for Blender 3D blockouts</span>
                            </div>
                        </x-ui.image-container>
                    </div>

                    <!-- Stone Frame -->
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-reaktoria-stone-dark uppercase font-display">Stone Masonry Frame</span>
                        <x-ui.image-container frame="stone" aspect="video">
                            <div class="w-full h-full bg-gradient-to-br from-reaktoria-stone/20 via-[#F7FAF6] to-reaktoria-sky/30 flex flex-col items-center justify-center p-4 text-center">
                                <div class="flex items-center gap-1.5 text-reaktoria-stone-dark mb-1">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 17.5L3 6V3h3l11.5 11.5"/><path d="M13 19l6-6"/></svg>
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <span class="font-display font-bold text-sm text-reaktoria-stone-dark">Battle Arena Frame</span>
                                <span class="text-xs text-reaktoria-ink-muted">Ready for combat clearing maps</span>
                            </div>
                        </x-ui.image-container>
                    </div>

                    <!-- HUD Frame -->
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-reaktoria-hud uppercase font-display">Game HUD Frame</span>
                        <x-ui.image-container frame="hud" aspect="video">
                            <div class="w-full h-full bg-reaktoria-hud flex flex-col items-center justify-center p-4 text-center text-reaktoria-cream">
                                <div class="flex items-center gap-1.5 text-reaktoria-gold mb-1">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.31L4.15 19.4A2 2 0 0 0 5.85 22h12.3a2 2 0 0 0 1.7-2.6L14 9.31V2"/></svg>
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                                </div>
                                <span class="font-display font-bold text-sm text-reaktoria-gold">Chemical Reaction Frame</span>
                                <span class="text-xs text-reaktoria-cream-dim">Ready for flask synthesis renders</span>
                            </div>
                        </x-ui.image-container>
                    </div>
                </div>
            </section>

            <!-- Foundation Status Sign-off -->
            <footer class="border-t-2 border-[#E0D7C2] pt-6 text-center text-xs text-reaktoria-ink-muted font-mono space-y-1">
                <div class="font-bold text-reaktoria-forest">REAKTORIA: COLORFUL LOW-POLY MEDIEVAL FOUNDATION VERIFIED</div>
                <div>All base styles, tokens, and components compiled. Foundation stage complete.</div>
            </footer>

        </x-ui.container>
    </div>
</x-layouts.app>
