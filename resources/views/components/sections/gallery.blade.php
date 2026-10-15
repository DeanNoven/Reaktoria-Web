@php
    $galleryCards = [
        [
            'num' => '01',
            'title' => 'THE REALM',
            'category' => 'WORLD ENVIRONMENT',
            'desc' => 'Sprawling river valleys and fortified citadels.',
            'image' => 'images/gallery-realm.jpg',
            'alt' => 'Reaktoria Panoramic Landscape: Castle, River Valley, and Distant Mountains',
        ],
        [
            'num' => '02',
            'title' => 'THE EXPERIMENT',
            'category' => 'ALCHEMY WORKSPACE',
            'desc' => 'Botanical conservatory with bubbling reagent flasks.',
            'image' => 'images/gallery-experiment.jpg',
            'alt' => 'Medieval Alchemy Botanical Conservatory with Iridescent Reagents',
        ],
        [
            'num' => '03',
            'title' => 'THE FORGE',
            'category' => 'BLACKSMITH WORKSHOP',
            'desc' => 'High-heat thermal anvils shaping infused armaments.',
            'image' => 'images/gallery-forge.jpg',
            'alt' => 'Fortress Armory Forge with Handcrafted Elemental Weapons',
        ],
        [
            'num' => '04',
            'title' => 'THE ADVENTURE',
            'category' => 'FIELD EXPLORATION',
            'desc' => 'Ancient aqueducts spanning misty waterfall chasms.',
            'image' => 'images/gallery-adventure.jpg',
            'alt' => 'Expedition Across Ancient Arch Bridge and Waterfall Canyon',
        ],
        [
            'num' => '05',
            'title' => 'THE OUTPOST',
            'category' => 'MEDIEVAL SETTLEMENT',
            'desc' => 'Rustic trading hamlets nestled under hand-carved timber.',
            'image' => 'images/village-intro.jpg',
            'alt' => 'Low-Poly Medieval Village with Timber Architecture and Mountain Backdrop',
        ],
        [
            'num' => '06',
            'title' => 'THE HIGHLANDS',
            'category' => 'ALPINE BASTION',
            'desc' => 'Sunlit castle ramparts rising high above cloud valleys.',
            'image' => 'images/hero-environment.jpg',
            'alt' => 'Alpine Castle Bastion Above Rolling Clouds and Pine Forests',
        ],
        [
            'num' => '07',
            'title' => 'ELEMENTAL CLASH',
            'category' => 'FIELD COMBAT',
            'desc' => 'Dynamic tactical encounters driven by chemical catalysts.',
            'image' => 'images/feature-battle.jpg',
            'alt' => 'Field Combat Encounter with Fire and Chemical Elemental Spells',
        ],
        [
            'num' => '08',
            'title' => 'APOTHECARY LAB',
            'category' => 'RESEARCH CHAMBER',
            'desc' => 'Study desks lined with mortar pestles, scrolls, and mineral vials.',
            'image' => 'images/alchemist-workshop.jpg',
            'alt' => 'Medieval Alchemist Chamber Filled with Botanical Specimens and Jars',
        ],
    ];
@endphp

<!-- Section 9: Visual Archive (Billboard 3D Orbit Carousel - Always Frontal) -->
<section id="gallery" class="relative py-16 sm:py-20 lg:py-28 overflow-hidden bg-gradient-to-b from-[#E9DFC9] via-[#F5EEDF] via-[#FAF6EE] to-[#ECE3D2]" aria-labelledby="gallery-heading">

    <!-- Anchor Aliases for Global Navigation (#gallery, #visual-archive) -->
    <span id="visual-archive" class="absolute -top-24 pointer-events-none" aria-hidden="true"></span>

    <!-- Environmental ambient illumination layer -->
    <div class="absolute inset-0 z-0 pointer-events-none select-none" aria-hidden="true">
        <div class="absolute inset-x-0 top-0 h-28 sm:h-32 bg-gradient-to-b from-[#E9DFC9] to-transparent"></div>
        <div class="absolute top-1/4 left-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(227,180,76,0.05)_0%,_transparent_70%)]"></div>
        <div class="absolute bottom-1/4 right-1/12 w-96 h-96 rounded-full bg-[radial-gradient(circle,_rgba(66,169,198,0.05)_0%,_transparent_70%)]"></div>
        <div class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-t from-[#ECE3D2] to-transparent"></div>
    </div>

    <!-- Section Header Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-3.5">
            <span class="text-xs font-bold font-display uppercase tracking-widest text-[#2F6B3C]">
                VISUAL ARCHIVE
            </span>

            <h2 id="gallery-heading" class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-reaktoria-deep-forest tracking-tight uppercase leading-[1.08]">
                A WORLD WORTH DISCOVERING.
            </h2>

            <p class="text-sm sm:text-base lg:text-lg text-reaktoria-ink/80 leading-relaxed font-body">
                Explore the places, experiments, and creations that shape the Elemental Realm.
            </p>

            <!-- Interactive guidance badge -->
            <div class="pt-1 flex items-center gap-2 text-xs font-semibold text-[#6E553B]">
                <svg class="w-4 h-4 text-[#8C6211] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                </svg>
                <span>Drag horizontally to orbit &bull; Hover card to inspect</span>
            </div>
        </div>
    </div>

    <!-- Frontal Billboard Orbit Carousel Stage (No Vignette, No RotateY Slant) -->
    <div 
        x-data="{
            currentAngle: 0,
            autoSpeed: 14.0,
            isDragging: false,
            isCardHovered: false,
            hoveredIndex: null,
            hoverProgress: [],
            startX: 0,
            startAngle: 0,
            dragDistance: 0,
            containerWidth: 0,
            radiusX: 450,
            animFrameId: null,

            updateDimensions() {
                const stage = this.$el;
                if (!stage) return;
                this.containerWidth = stage.clientWidth || window.innerWidth;
                if (this.containerWidth <= 0) {
                    this.containerWidth = window.innerWidth;
                }

                if (window.innerWidth < 640) {
                    this.radiusX = Math.min(210, this.containerWidth * 0.35);
                    stage.style.setProperty('--card-w', '230px');
                    stage.style.setProperty('--card-h', '320px');
                } else if (window.innerWidth < 1024) {
                    this.radiusX = Math.min(330, this.containerWidth * 0.38);
                    stage.style.setProperty('--card-w', '280px');
                    stage.style.setProperty('--card-h', '375px');
                } else {
                    this.radiusX = Math.min(460, this.containerWidth * 0.38);
                    stage.style.setProperty('--card-w', '320px');
                    stage.style.setProperty('--card-h', '420px');
                }
            },

            renderOrbit() {
                const stage = this.$el;
                if (!stage) return;
                const cards = stage.querySelectorAll('.billboard-card');
                const totalCards = cards.length;
                if (totalCards === 0) return;

                // Ensure hover progress array matches card count
                if (!this.hoverProgress || this.hoverProgress.length !== totalCards) {
                    this.hoverProgress = new Array(totalCards).fill(0);
                }

                // Dynamic angle interval based on actual total number of cards
                const angleStep = 360 / totalCards;
                const rx = this.radiusX;

                for (let i = 0; i < totalCards; i++) {
                    const card = cards[i];
                    // Continuous orbit angle: card i starts at i * angleStep
                    const cardDeg = ((i * angleStep - this.currentAngle) % 360 + 360) % 360;
                    const rad = (cardDeg * Math.PI) / 180;

                    const sin = Math.sin(rad);
                    const cos = Math.cos(rad);

                    // Horizontal position on elliptical orbit (rx is fixed by container width)
                    const x = rx * sin;

                    // Smooth fade window at the lateral horizon:
                    // Full opacity (1.0) when cos >= 0.30.
                    // Fades smoothly from 1.0 down to 0.0 as cos goes from 0.30 to -0.05.
                    // Completely hidden (opacity 0) when cos <= -0.05.
                    const fadeFull = 0.30;
                    const fadeZero = -0.05;
                    const fadeProgress = Math.max(0, Math.min(1, (cos - fadeZero) / (fadeFull - fadeZero)));
                    const smoothOpacity = fadeProgress * fadeProgress * (3 - 2 * fadeProgress);

                    // If completely invisible in the rear, demote to zIndex 1 and hide
                    if (smoothOpacity <= 0.005) {
                        card.style.opacity = '0';
                        card.style.visibility = 'hidden';
                        card.style.pointerEvents = 'none';
                        card.style.zIndex = '1';
                        card.style.transform = `translate3d(${x.toFixed(1)}px, 0px, 0) scale(0.68)`;
                        continue;
                    }

                    // True 3D depth from 0.0 (rear) to 1.0 (front center)
                    const trueDepth = (cos + 1) / 2;

                    // Continuous mathematical Z-index based strictly on true 3D depth.
                    let zIndex = Math.round(10 + 80 * trueDepth);

                    // Perspective scale strictly based on true 3D depth
                    let scale = 0.68 + 0.34 * Math.pow(trueDepth, 1.1);

                    // Vertical elevation: slight natural lift as card approaches front center
                    let y = -14 * (1 - trueDepth);

                    // Brightness: 0.85 at side edges to 1.00 at front
                    let brightness = 0.85 + 0.15 * trueDepth;

                    // Smooth hover zoom and lift (spring-like fluid transition)
                    const hoverBoost = this.hoverProgress[i] || 0;
                    scale *= (1 + 0.08 * hoverBoost);
                    y -= (10 * hoverBoost);
                    brightness = Math.min(1.08, brightness + 0.06 * hoverBoost);

                    if (hoverBoost > 0.02) {
                        zIndex = 100; // Floating smoothly on top
                    }

                    if (this.isCardHovered && this.hoveredIndex === i) {
                        card.style.borderColor = '#19452C';
                        card.style.boxShadow = '0 24px 38px -8px rgba(25, 69, 44, 0.25), 0 10px 18px -4px rgba(40, 30, 15, 0.14)';
                    } else {
                        card.style.borderColor = '#D5C6AA';
                        card.style.boxShadow = '0 10px 24px -4px rgba(40, 30, 15, 0.10), 0 4px 8px -2px rgba(40, 30, 15, 0.05)';
                    }

                    card.style.visibility = 'visible';
                    card.style.pointerEvents = 'auto';
                    card.style.opacity = smoothOpacity.toFixed(3);
                    card.style.transform = `translate3d(${x.toFixed(1)}px, ${y.toFixed(1)}px, 0) scale(${scale.toFixed(3)})`;
                    card.style.filter = `brightness(${brightness.toFixed(2)})`;
                    card.style.zIndex = zIndex.toString();
                }
            },

            handlePointerDown(e) {
                if (e.button !== undefined && e.button !== 0) return;
                this.isDragging = true;
                this.startX = e.clientX;
                this.startAngle = this.currentAngle;
                this.dragDistance = 0;
                try {
                    e.currentTarget.setPointerCapture(e.pointerId);
                } catch (err) {}
            },

            handlePointerMove(e) {
                if (!this.isDragging) return;
                const dx = e.clientX - this.startX;
                this.dragDistance = Math.abs(dx);
                // Move orbit angle proportionally with horizontal drag
                const angleDelta = (dx / (this.containerWidth || window.innerWidth)) * 220;
                this.currentAngle = this.startAngle - angleDelta;
                this.renderOrbit();
            },

            handlePointerUp(e) {
                if (!this.isDragging) return;
                this.isDragging = false;
                try {
                    if (e.currentTarget.hasPointerCapture(e.pointerId)) {
                        e.currentTarget.releasePointerCapture(e.pointerId);
                    }
                } catch (err) {}
                this.currentAngle = ((this.currentAngle % 360) + 360) % 360;
            },

            handleCardEnter(index) {
                if (this.isDragging) return;
                this.isCardHovered = true;
                this.hoveredIndex = index;
            },

            handleCardLeave() {
                this.isCardHovered = false;
                this.hoveredIndex = null;
            },

            init() {
                this.updateDimensions();
                this.renderOrbit();

                let lastTime = performance.now();

                const step = (now) => {
                    const dt = Math.min((now - lastTime) / 1000, 0.1);
                    lastTime = now;

                    // Advance orbit angle only when not dragging and no card is hovered
                    if (!this.isDragging && !this.isCardHovered) {
                        this.currentAngle = (this.currentAngle + this.autoSpeed * dt) % 360;
                    }

                    // Smoothly interpolate hover scaling for all cards (fluid 250ms ease-out)
                    let hasActiveHoverTransition = false;
                    if (this.hoverProgress && this.hoverProgress.length > 0) {
                        for (let i = 0; i < this.hoverProgress.length; i++) {
                            const target = (this.isCardHovered && this.hoveredIndex === i) ? 1.0 : 0.0;
                            const diff = target - this.hoverProgress[i];
                            if (Math.abs(diff) > 0.003) {
                                this.hoverProgress[i] += diff * Math.min(1, 10 * dt);
                                hasActiveHoverTransition = true;
                            } else {
                                this.hoverProgress[i] = target;
                            }
                        }
                    }

                    // Re-render when orbiting OR when a card is actively easing in/out its hover scale
                    if (!this.isDragging && (!this.isCardHovered || hasActiveHoverTransition)) {
                        this.renderOrbit();
                    }

                    this.animFrameId = requestAnimationFrame(step);
                };

                this.animFrameId = requestAnimationFrame(step);

                window.addEventListener('resize', () => {
                    this.updateDimensions();
                    this.renderOrbit();
                });
            },

            destroy() {
                if (this.animFrameId) {
                    cancelAnimationFrame(this.animFrameId);
                }
            }
        }"
        @pointerdown="handlePointerDown($event)"
        @pointermove="handlePointerMove($event)"
        @pointerup="handlePointerUp($event)"
        @pointercancel="handlePointerUp($event)"
        @mouseleave="handleCardLeave()"
        class="relative w-full overflow-hidden mt-8 sm:mt-12 select-none flex items-center justify-center cursor-grab active:cursor-grabbing touch-pan-y h-[420px] sm:h-[480px] lg:h-[540px]"
    >
        <!-- Center Origin Anchor Point for Symmetrical Orbiting -->
        <div class="relative w-0 h-0 flex items-center justify-center pointer-events-none">
            @foreach ($galleryCards as $index => $card)
                <article 
                    tabindex="0"
                    @mouseenter="handleCardEnter({{ $index }})"
                    @mouseleave="handleCardLeave()"
                    @focus="hoveredIndex = {{ $index }}; renderOrbit()"
                    @blur="hoveredIndex = null; renderOrbit()"
                    aria-label="{{ $card['title'] }}"
                    class="billboard-card absolute pointer-events-auto rounded-xl overflow-hidden border-2 border-[#D5C6AA] bg-[#FAF6EE] shadow-[0_10px_24px_-4px_rgba(40,30,15,0.10)] will-change-transform flex flex-col justify-between transition-[border-color,box-shadow] duration-300 ease-out focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-reaktoria-forest"
                    style="width: var(--card-w, 320px); height: var(--card-h, 420px); left: calc(var(--card-w, 320px) * -0.5); top: calc(var(--card-h, 420px) * -0.5); transform-origin: center center;"
                >
                    <!-- Artwork Viewport (Dominant Visual Presentation) -->
                    <div class="relative overflow-hidden w-full flex-1 bg-[#141E22]">
                        <img 
                            src="{{ asset($card['image']) }}" 
                            alt="{{ $card['alt'] }}" 
                            class="w-full h-full object-cover select-none pointer-events-none"
                            loading="lazy"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-40 pointer-events-none"></div>
                    </div>

                    <!-- Archival Title Bar (Title Only, No Description) -->
                    <div class="px-4 py-3 sm:py-3.5 bg-[#FAF6EE] border-t border-[#E5DAC6] shrink-0 flex items-center justify-between gap-2 select-none">
                        <div class="flex items-center gap-2 truncate">
                            <span class="font-mono text-xs font-bold text-[#8C6211] tracking-wider shrink-0">
                                {{ $card['num'] }}
                            </span>
                            <span class="text-[#D5C6AA] shrink-0">&bull;</span>
                            <h3 class="font-display font-bold text-sm sm:text-base text-reaktoria-deep-forest tracking-wider uppercase truncate">
                                {{ $card['title'] }}
                            </h3>
                        </div>

                        <span class="text-[9px] font-mono font-semibold uppercase tracking-wider text-[#5D462E] shrink-0 bg-[#F4EBD9] border border-[#D5C6AA]/70 px-2 py-0.5 rounded-sm">
                            {{ $card['category'] }}
                        </span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

</section>
