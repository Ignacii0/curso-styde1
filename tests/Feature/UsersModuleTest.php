<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     *
     *
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $response = $this->get('/');

        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('usuarios');
    }
}
