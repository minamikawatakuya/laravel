<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->assertSee('TOP');
        });

        $this->browse( function (Browser $browser) {
            $browser
                ->visit('/login')
                ->pause(1000)
                ->type('email', 'hoge@gmail.com')
                ->pause(1000)
                ->type('password', 'hogepass')
                ->pause(1000)
                ->press('Login')
                ->pause(1000)
                ->assertPathIs('/home');
        });

    }
}
