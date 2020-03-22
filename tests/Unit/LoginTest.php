<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Support\Facades\Auth;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response = $this->post('login', [
            'email'    => 'hoge@gmail.com',
            'password' => 'hogepass'
        ]);
        $this->assertTrue(Auth::check());

    }
}
