<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   function test_Example()
    {
        $this->get('/usuarios')
         ->assertStatus(200)
         ->assertSee('Listados de Usuarios')
         ->assertSee('joel')
         ->assertSee('ellie')
         ->assertSee('tess');
    }

    function test_ExampleDetalle()
    {
        $this->get('/usuarios/5')
         ->assertStatus(200)
         ->assertSee('mostrando detalles del usuario: 5');
    }

    function test_ExampleUsuarioNuevo()
    {
        $this->get('/usuarios/nuevo')
         ->assertStatus(200)
         ->assertSee('Crear usuario nuevo');
    }
}
