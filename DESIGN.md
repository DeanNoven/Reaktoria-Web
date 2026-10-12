# Reaktoria Design System & Canonical Direction

> **Design Read:** Indie PC game website for gamers and science enthusiasts, in a medieval fantasy low-poly alchemy aesthetic, dial **ENERGY 2 / RHYTHM 2 / MOTION 1**.

---

## 1. Dials & Liveliness Settings

| Dial | Level | Implementation in Reaktoria |
|---|---|---|
| **ENERGY** | **2 (Balanced)** | Atmospheric and physically grounded. Warm parchment textures, low-poly environmental art, vibrant natural foliage, and electric elemental reactions without aggressive hype or generic SaaS neon glow. |
| **RHYTHM** | **2 (Balanced)** | Progressive narrative rhythm. Sections transition naturally: cinematic nature hero &rarr; unboxed world journey &rarr; warm alchemist folio ledger &rarr; tactile blacksmith forge &rarr; editorial asymmetrical features &rarr; dark specimen vault &rarr; curated art gallery &rarr; golden-hour gateway. |
| **MOTION** | **1 (Calm)** | Restrained and responsive. 150-300ms hover lift transitions, smooth anchor scrolling, modal dialog with fade/scale transitions, and subtle elemental pulse accents. No distracting auto-carousels, tickers, or floating particles. |

---

## 2. Typography System

| Role | Font Family | Fallbacks | Weight / Styling | Purpose & Usage |
|---|---|---|---|---|
| **Display** | **Cinzel** | Georgia, serif | 700 / 800 / 900, Uppercase, letter-spacing +0.02em | Section titles, hero headlines, modal headings, and primary CTA buttons. Evokes classical medieval stone-carved inscription authority. |
| **Body** | **Plus Jakarta Sans** | ui-sans-serif, system-ui | 400 / 500 / 600, Normal case | Editorial descriptions, gameplay narratives, and reading paragraphs. High legibility and modern clarity. |
| **Monospace / Docket** | **JetBrains Mono** | ui-monospace, monospace | 500 / 600 / 700, Uppercase / Tabular | Chemical formulas, folio headers, step indicators (`01.`, `02.`), specimen telemetry, and archival dockets. |

---

## 3. Color Tokens & Semantic Roles

### 3.1 Primary Realm Palette
- **Deep Forest (`#19452C`):** Primary text color for major headings, authoritative frame borders.
- **Forest Green (`#2F6B3C`):** Primary action button background, organic foliage accents, nature milestone nodes.
- **Grass Green (`#63A84E`):** Secondary success accents, alive badges, pulse indicators.

### 3.2 Elemental & Reaction Palette
- **Chemistry Cyan (`#42A9C6`, `#1B7088`):** Alchemical reaction headers, chemical step highlights, fluid accents.
- **Light Cyan / Telemetry (`#9CD5E6`, `#B6D8E2`):** Specimen chamber coordinate stamps, optical axis overlays over `#162025`.
- **Flame / Forging (`#C85A3D`, `#B84E1F`):** Blacksmith ledger accents, weapon synthesis highlights, tactical action steps.
- **Alchemist Gold (`#E3B44C`, `#8C6211`):** Milestone badges, key chemical discoverable highlights, warm medieval gilded details.

### 3.3 Physical Parchment & Folio Palette
- **Parchment Surface Base:** `#FAF5E8`, `#FAF6EE`, `#F7F1DF` (warm, tactile, non-sterile light background).
- **Parchment Border:** `#D5C6AA`, `#D6C6A5` (grounded, warm earthen frames).
- **Folio & Field Metadata Text:** `#5D462E` (header labels, $\ge 6.8:1$ contrast) and `#6B5238` (footnotes, $\ge 4.9:1$ contrast), fully compliant with WCAG AA standard.

### 3.4 Specimen Chamber Dark Vault
- **Chamber Background:** `#162025`, `#12191C` (deep archival slate).
- **Chamber Border:** `#2D3C43` (technical enclosure frame).
- **Specimen Telemetry Text:** `#9CD5E6`, `#B6D8E2` (crisp scientific readouts with high contrast over dark slate).

---

## 4. Visual Motifs & Layout Rules

1. **Physical Parchment Folios:**
   - Cards and containers represent physical alchemist folios or blacksmith craft ledgers with tactile borders and clean ruled manuscript lines.
   - Surfaces use subtle warm parchment gradients instead of flat corporate white `#FFFFFF`.

2. **Unboxed Progression Over Generic Cards:**
   - Multi-step explanations (Chemistry, Forging, Journey) use vertical or horizontal unboxed progress lines with colored step nodes (`01.`, `02.`, `03.`).
   - Ban generic 3-card SaaS pricing/feature templates (R-05).

3. **Grounded Low-Poly 3D Art:**
   - Custom low-poly 3D environmental artwork is framed with tactile borders, soft archival shadows, and physical bevels.
   - Every illustration and render connects directly to in-game locations (Castle, River Valley, Alchemist Bench, Blacksmith Anvil, Specimen Tray).

4. **Intentional Transitions:**
   - Transitions between light parchment, green meadows, and dark archival rooms use subtle organic gradients, maintaining unbroken atmospheric continuity.

---

## 5. Anti-Slop Governance & Quality Locks

- **R-02 (Em Dash Ban):** Strictly avoid em dashes (`—` and `&mdash;`) in all UI copy, alt text, and template comments. Use colons, periods, or bullet points (`•`).
- **R-24 & R-26 (Authentic Action & Navigation):** No circular or dead anchor links. Primary CTAs provide a functional path forward (such as the early access modal gateway). Section IDs must never collide.
- **R-25 (Contrast Standards):** All body and metadata text must maintain a minimum contrast ratio of 4.5:1 against its background.
- **R-38 (Honest Content):** Game modes, elements, and gameplay loops represent actual game features. Placeholders must be explicitly labeled.
