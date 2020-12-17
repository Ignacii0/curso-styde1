<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function it_welcomes_users_with_nickname()
    {
        
       $this->get('saludo/Juan/Calamardo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Juan, tu apodo es Calamardo');
       
    }
}      /**
     
     *
     * @test
     */
     function it_welcomes_users_without_nickname()
     {
        $this->get('saludo/Juan/')
            ->assertStatus(200)
            ->assertSee('Bienvenido Juan');
     }
