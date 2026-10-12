<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('reaktoria-logo.png');
        // Hero (Untouched)
        $response->assertSee('ENTER THE REALM');
        $response->assertSee('Low-Poly Medieval World');
        $response->assertSee('Real Chemical Reactions');
        $response->assertSee('Elemental Adventure');

        // Section 2 (Untouched)
        $response->assertSee('THE ELEMENTAL REALM');
        $response->assertSee('WHERE CHEMISTRY');
        $response->assertSee('MEETS ADVENTURE');
        $response->assertSee('EXPLORE');
        $response->assertSee('EXPERIMENT');
        $response->assertSee('Wolfhaven Settlement');

        // Section 3 (Untouched)
        $response->assertSee('THE ART OF REACTION');
        $response->assertSee('DISCOVER THE');
        $response->assertSee('ELEMENTS');
        $response->assertSee('SELECT');
        $response->assertSee('REACT');
        $response->assertSee('Alchemist&apos;s Field Folio', false);
        $response->assertSee('chemistry-bg.jpg');

        // Section 4 (Untouched)
        $response->assertSee('THE ART OF FORGING');
        $response->assertSee('TURN DISCOVERY');
        $response->assertSee('INTO POWER');
        $response->assertSee('Every successful reaction can become more than a discovery');
        $response->assertSee('DISCOVER');
        $response->assertSee('Understand the result of a successful chemical reaction');
        $response->assertSee('FORGE');
        $response->assertSee('Transform the discovery into a unique weapon or item');
        $response->assertSee('WIELD');
        $response->assertSee('Bring your creation into the adventure and use its power in battle');
        $response->assertSee('forged-showcase.jpg');
        $response->assertSee('forge-bg.jpg');
        $response->assertSee('id="adventure"', false);
        $response->assertSee('id="forge"', false);

        // Pilar 3: Field Battle & Game Modes (Combat Telemetry & Game Modes)
        $response->assertSee('THE ADVENTURE');
        $response->assertSee('DISCOVER. REACT.');
        $response->assertSee('BATTLE.');
        $response->assertSee('Explore the Elemental Realm, experiment with real chemistry');
        $response->assertSee('[ QUEST ]');
        $response->assertSee('FOREST PATH');
        $response->assertSee('[ WEAPON ]');
        $response->assertSee('PYROS BLADE');
        $response->assertSee('Fe + S &rarr; FeS', false);
        $response->assertSee('[ ENCOUNTER ]');
        $response->assertSee('WILDLING SCOUTS');
        $response->assertSee('gameplay-adventure.jpg');
        $response->assertSee('gameplay-bg.jpg');
        $response->assertSee('feature-battle.jpg');
        $response->assertSee('Field Combat Dossier');
        $response->assertSee('Pyros Infusion vs. Wildling Scouts');
        $response->assertSee('id="gameplay"', false);
        $response->assertSee('id="battle"', false);

        // Pilar 3 Part B: Game Modes (Play Your Way)
        $response->assertSee('GAME MODES');
        $response->assertSee('PLAY YOUR WAY.');
        $response->assertSee('Master the challenge. Or experiment without limits.');
        $response->assertSee('01 &bull; CAMPAIGN', false);
        $response->assertSee('PROGRESS THROUGH THE REALM.');
        $response->assertSee('Take on a series of elemental challenges, solve each level through experimentation, and unlock new discoveries as you progress.');
        $response->assertSee('02 &bull; CREATIVE', false);
        $response->assertSee('EXPERIMENT WITHOUT LIMITS.');
        $response->assertSee('Enter a space built for experimentation. Combine elements, test reactions, and forge unexpected creations with no fixed objective.');
        $response->assertSee('section7-campaign.jpg');
        $response->assertSee('section7-creative.jpg');
        $response->assertSee('id="game-modes"', false);
        $response->assertSee('id="features"', false);
        $response->assertSee('id="modes"', false);
        $response->assertSee('Progression Mode');
        $response->assertSee('Free Experimentation');
        $response->assertDontSee('Sandbox Mode');

        // Section 8 (Elemental Archive — Know What You're Mixing)
        $response->assertSee('ELEMENTAL ARCHIVE');
        $response->assertSee("KNOW WHAT YOU'RE MIXING.", false);
        $response->assertSee('Every discovery begins with an element. Study their properties, understand their behavior, and uncover what happens when they react.');
        $response->assertSee('FIELD ARCHIVE');
        $response->assertSee('REAKTORIA RESEARCH');
        $response->assertSee('ELEMENT 01 / FIELD SPECIMEN');
        $response->assertSee('26');
        $response->assertSee('Fe');
        $response->assertSee('IRON');
        $response->assertSee('TRANSITION METAL');
        $response->assertSee('ATOMIC NUMBER');
        $response->assertSee('CATEGORY');
        $response->assertSee('Metal');
        $response->assertSee('SYMBOL');
        $response->assertSee('ROLE');
        $response->assertSee('Forging Material');
        $response->assertSee('REACTION PROFILE');
        $response->assertSee('COMMONLY REACTS WITH');
        $response->assertSee('S');
        $response->assertSee('O₂');
        $response->assertSee('DISCOVERIES');
        $response->assertSee('FeS');
        $response->assertSee('Fe₂O₃');
        $response->assertSee('FIELD NOTE');
        $response->assertSee('Iron forms the foundation of many forged discoveries throughout the realm.');
        $response->assertSee('01 FE');
        $response->assertSee('02 H');
        $response->assertSee('03 O');
        $response->assertSee('04 S');
        $response->assertSee('05 NA');
        $response->assertSee('06 CL');
        $response->assertSee('iron-specimen.jpg');
        $response->assertSee('hydrogen-specimen.jpg');
        $response->assertSee('oxygen-specimen.jpg');
        $response->assertSee('sulfur-specimen.jpg');
        $response->assertSee('sodium-specimen.jpg');
        $response->assertSee('chlorine-specimen.jpg');
        $response->assertSee('archive-bg.jpg');
        $response->assertSee('id="archive"', false);
        $response->assertSee('id="elemental-archive"', false);

        // Section 9 (Gallery — Visual Archive: A World Worth Discovering)
        $response->assertSee('VISUAL ARCHIVE');
        $response->assertSee('A WORLD WORTH DISCOVERING.');
        $response->assertSee('Explore the places, experiments, and creations that shape the Elemental Realm.');
        $response->assertSee('01');
        $response->assertSee('THE REALM');
        $response->assertSee('WORLD ENVIRONMENT');
        $response->assertSee('02');
        $response->assertSee('THE EXPERIMENT');
        $response->assertSee('ALCHEMY WORKSPACE');
        $response->assertSee('03');
        $response->assertSee('THE FORGE');
        $response->assertSee('BLACKSMITH WORKSHOP');
        $response->assertSee('04');
        $response->assertSee('THE ADVENTURE');
        $response->assertSee('FIELD EXPLORATION');
        $response->assertSee('gallery-realm.jpg');
        $response->assertSee('gallery-experiment.jpg');
        $response->assertSee('gallery-forge.jpg');
        $response->assertSee('gallery-adventure.jpg');
        $response->assertSee('alchemist-workshop.jpg');
        $response->assertSee('forged-showcase.jpg');
        $response->assertSee('gameplay-adventure.jpg');
        $response->assertSee('id="gallery"', false);
        $response->assertSee('id="visual-archive"', false);

        // Section 10 (Final CTA — Your Journey Begins: Enter The Realm)
        $response->assertSee('YOUR JOURNEY BEGINS');
        $response->assertSee('ENTER THE REALM.');
        $response->assertSee('Experiment with the elements. Forge your discoveries. Shape your own adventure.');
        $response->assertSee('ENTER THE REALM');
        $response->assertSee('BACK TO THE TOP');
        $response->assertSee('final-cta-bg.jpg');
        $response->assertSee('href="#enter-game"', false);
        $response->assertSee('id="final-cta"', false);
        $response->assertSee('id="enter-realm"', false);

        // Website Footer (Directly after Section 10)
        $response->assertSee('THE ELEMENTAL REALM');
        $response->assertSee('Discover the elements. Forge your own adventure.');
        $response->assertSee('EXPLORE');
        $response->assertSee('href="#world"', false);
        $response->assertSee('href="#chemistry"', false);
        $response->assertSee('href="#gameplay"', false);
        $response->assertSee('DISCOVER');
        $response->assertSee('href="#features"', false);
        $response->assertSee('href="#game-modes"', false);
        $response->assertSee('href="#archive"', false);
        $response->assertSee('href="#gallery"', false);
        $response->assertSee('&copy; 2026 REAKTORIA', false);
        $response->assertSee('A world shaped by discovery.');
        $response->assertSee('Back to Top');
    }
}
