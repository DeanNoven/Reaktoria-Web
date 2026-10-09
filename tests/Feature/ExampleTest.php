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

        // Section 5 (Untouched)
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
        $response->assertSee('id="gameplay"', false);
        $response->assertSee('id="battle"', false);

        // Section 6 (Refined Pass 1: Game Features)
        $response->assertSee('GAME FEATURES');
        $response->assertSee('BUILT TO EXPERIMENT.');
        $response->assertSee('BUILT TO EXPLORE.');
        $response->assertSee('Discover elements, experiment with reactions, forge your discoveries into weapons');
        $response->assertSee('CHEMISTRY SYSTEM');
        $response->assertSee('Combine real elements, trigger reactions, and discover what happens when chemistry becomes part of the adventure.');
        $response->assertSee('WEAPON FORGING');
        $response->assertSee('Transform successful discoveries into weapons, tools, and items built for the adventure.');
        $response->assertSee('WORLD EXPLORATION');
        $response->assertSee('Explore forests, villages, rivers, ruins, and battlefields across the Elemental Realm.');
        $response->assertSee('BATTLE &amp; DISCOVERY', false);
        $response->assertSee('Bring your creations into the field and discover new ways to face hostile encounters.');
        $response->assertSee('chemistry-workbench.jpg');
        $response->assertSee('feature-forging.jpg');
        $response->assertSee('feature-battle.jpg');
        $response->assertSee('realm-landscape.jpg');
        $response->assertSee('features-bg.jpg');
        $response->assertSee('id="modes"', false);
        $response->assertSee('id="features"', false);

        // Section 7 (Game Modes — Play Your Way)
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
    }
}
