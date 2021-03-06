<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class WelcomeTest extends DuskTestCase
{
    /** @test */
    function basic_test()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
}
