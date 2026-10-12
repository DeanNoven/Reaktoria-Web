<!-- Section 10: Final call to action -->
<section id="enter-realm" x-data="{ gameModalOpen: false }" @open-game-modal.window="gameModalOpen = true" class="relative py-20 sm:py-28 lg:py-36 overflow-hidden bg-[#D8E6DB] flex items-center justify-center min-h-[520px] sm:min-h-[580px] lg:min-h-[640px]">

    <!-- Anchor Aliases for Navigation (#final-cta, #enter-realm, #cta, #enter-game) -->
    <span id="final-cta" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>
    <span id="enter-game" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>
    <span id="cta" class="absolute -top-20 pointer-events-none" aria-hidden="true"></span>

    <!-- Panoramic environment background -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <img 
            src="{{ asset('images/final-cta-bg.jpg') }}" 
            alt="" 
            class="w-full h-full object-cover object-center select-none pointer-events-none"
            loading="lazy"
        />

        <div class="absolute inset-x-0 top-0 h-24 sm:h-32 bg-gradient-to-b from-[#ECE3D2] via-[#ECE3D2]/65 to-transparent"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(250,246,238,0.72)_0%,_rgba(250,246,238,0.40)_38%,_rgba(250,246,238,0.10)_60%,_transparent_80%)]"></div>
        <div class="absolute inset-x-0 bottom-0 h-20 sm:h-28 bg-gradient-to-t from-[#152228]/40 via-[#152228]/10 to-transparent"></div>
    </div>

    <div class="relative z-10 w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <div class="space-y-6 sm:space-y-8">

            <!-- Eyebrow Pill -->
            <div class="inline-flex items-center px-3.5 py-1.5 rounded-lg bg-[#FAF6EE]/92 backdrop-blur-xs border border-[#D5C6AA] shadow-xs select-none">
                <span class="text-xs font-mono font-bold tracking-widest text-[#4A2E1D] uppercase">
                    YOUR JOURNEY BEGINS
                </span>
            </div>

            <!-- Main Headline (Primary Visual Focal Point) -->
            <h2 class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08] drop-shadow-[0_2px_4px_rgba(255,255,255,0.75)]">
                ENTER THE REALM.
            </h2>

            <!-- Supporting Description -->
            <p class="text-base sm:text-lg lg:text-xl text-reaktoria-ink/90 font-body leading-relaxed max-w-xl mx-auto drop-shadow-[0_1px_2px_rgba(255,255,255,0.6)]">
                Experiment with the elements. Forge your discoveries. Shape your own adventure.
            </p>

            <!-- CTA Actions Group -->
            <div class="pt-2 sm:pt-4 flex flex-wrap items-center justify-center gap-4 sm:gap-5">
                
                <!-- Primary CTA: Enter The Realm (Triggers Accessible Modal Gateway) -->
                <x-ui.button 
                    variant="forest" 
                    size="lg" 
                    type="button"
                    @click="gameModalOpen = true"
                    class="px-7 py-3.5 sm:py-4 text-sm sm:text-base font-display font-bold tracking-wider shadow-lg hover:scale-102 transition-transform cursor-pointer">
                    <svg class="w-4 h-4 text-reaktoria-cream-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 17.5L3 6V3h3l11.5 11.5" />
                        <path d="M13 19l6-6" />
                        <path d="M16 16l4 4" />
                        <path d="M19 21l2-2" />
                    </svg>
                    <span>ENTER THE REALM</span>
                </x-ui.button>

                <!-- Secondary CTA: Back To The Top -->
                <x-ui.button 
                    variant="cream" 
                    size="lg" 
                    href="#" 
                    onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;"
                    class="px-6 py-3.5 sm:py-4 text-sm sm:text-base font-display font-bold tracking-wider shadow-md hover:scale-102 transition-transform cursor-pointer border-2 border-[#C9BCA0]">
                    <svg class="w-4 h-4 text-[#8C6211]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span>BACK TO THE TOP</span>
                </x-ui.button>

            </div>

        </div>

    </div>

    <!-- =================================================================
         MODAL: REALM ACCESS GATEWAY
         ================================================================= -->
    <div 
        x-cloak 
        x-show="gameModalOpen" 
        @keydown.escape.window="gameModalOpen = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 overflow-y-auto bg-black/75 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-headline"
    >
        <!-- Modal Backdrop Click Dismiss -->
        <div class="fixed inset-0" @click="gameModalOpen = false" aria-hidden="true"></div>

        <!-- Modal Card Dialog -->
        <div 
            x-show="gameModalOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            class="relative w-full max-w-lg bg-[#FAF5E8] rounded-2xl border-2 border-[#D5C6AA] shadow-[0_25px_50px_rgba(0,0,0,0.4)] p-6 sm:p-8 text-left z-10 overflow-hidden"
            @click.stop
        >
            <!-- Close Button -->
            <button 
                type="button" 
                @click="gameModalOpen = false"
                class="absolute top-4 right-4 text-[#8C7355] hover:text-[#4A2E1D] p-1.5 rounded-lg hover:bg-[#EFE5CD]/60 transition-colors focus:outline-none focus:ring-2 focus:ring-reaktoria-forest"
                aria-label="Close access modal"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Modal Header -->
            <div class="space-y-2 border-b border-[#E2D4B5]/60 pb-4 pr-8">
                <div class="inline-flex items-center gap-2">
                    <span class="text-[11px] font-mono font-bold tracking-widest text-[#5D462E] uppercase">
                        Access Protocol &bull; Early Playtest
                    </span>
                </div>
                <h3 id="modal-headline" class="font-display font-black text-2xl sm:text-3xl text-reaktoria-deep-forest tracking-tight uppercase">
                    Enter Reaktoria
                </h3>
                <p class="text-xs sm:text-sm text-reaktoria-ink-muted leading-relaxed font-body">
                    Choose your gateway to join the realm of alchemy, discovery, and medieval adventure.
                </p>
            </div>

            <!-- Action Options -->
            <div class="mt-5 space-y-3">
                <!-- Option 1: Steam Wishlist -->
                <a 
                    href="https://store.steampowered.com" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="group flex items-center justify-between p-3.5 sm:p-4 rounded-xl bg-white border border-[#D5C6AA] hover:border-[#1B7088] hover:bg-[#F2F8F9] transition-all shadow-xs"
                >
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-[#1B7088]/10 text-[#1B7088] flex items-center justify-center font-bold text-lg group-hover:bg-[#1B7088] group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 0 0-10 10c0 4.7 3.25 8.65 7.63 9.72l2.37-3.43a2.5 2.5 0 0 1-1.32-.48l-2.73 1.15a8.4 8.4 0 0 1-1.95-6.96 8.39 8.39 0 0 1 8.35-8 8.4 8.4 0 0 1 8.4 8.4 8.4 8.4 0 0 1-8.4 8.4l-3.32-2.31a2.5 2.5 0 1 1 2.32-3.86l3.35 2.33a5.9 5.9 0 0 0 6.05-6.06A6 6 0 0 0 12 5.9V2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm sm:text-base text-reaktoria-deep-forest group-hover:text-[#1B7088] transition-colors">
                                Wishlist on Steam
                            </div>
                            <div class="text-[11px] text-reaktoria-ink-muted">
                                Get release notifications and access exclusive playtest demos
                            </div>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-stone-400 group-hover:text-[#1B7088] group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!-- Option 2: Discord Guild -->
                <a 
                    href="https://discord.gg" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="group flex items-center justify-between p-3.5 sm:p-4 rounded-xl bg-white border border-[#D5C6AA] hover:border-[#2F6B3C] hover:bg-[#F2F7F3] transition-all shadow-xs"
                >
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-[#2F6B3C]/10 text-[#2F6B3C] flex items-center justify-center font-bold text-lg group-hover:bg-[#2F6B3C] group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994.021-.041.001-.09-.041-.106a13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.929 1.793 8.18 1.793 12.061 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.894.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.028zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm sm:text-base text-reaktoria-deep-forest group-hover:text-[#2F6B3C] transition-colors">
                                Join Discord Community
                            </div>
                            <div class="text-[11px] text-reaktoria-ink-muted">
                                Discuss alchemy recipes, craft feedback, and game development
                            </div>
                        </div>
                    </div>
                    <svg class="w-4 h-4 text-stone-400 group-hover:text-[#2F6B3C] group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Footer docket -->
            <div class="mt-6 pt-3 border-t border-[#E8DCBF] flex items-center justify-between text-[11px] font-mono text-[#6B5238]">
                <span>Status: Alpha Playtest (PC / Steam)</span>
                <button type="button" @click="gameModalOpen = false" class="hover:underline font-semibold cursor-pointer">Close</button>
            </div>
        </div>
    </div>

</section>
