<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testWelcome_users_with_nickname()
    {
        $this->get('saludo/WILLIAM/WILLIAM2005')
            ->assertStatus(200)
            ->assertSee('HOLA WILLIAM TU NICKNAME ES WILLIAM2005');
    }

    function testWelcome_users_without_nickname()
    {
        $this->get('saludo/WILLIAM')
        ->assertStatus(200)
        ->assertSee('HOLA WILLIAM NO TIENES NICK');
    }
}
