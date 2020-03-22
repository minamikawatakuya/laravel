<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Support\Facades\Auth;

class LoginAdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response = $this->post('admin/login', [
            'email'    => 'test@example.com',
            'password' => 'password123'
        ]);
        $this->assertTrue( Auth::guard('admin')->check() );

    }
}
