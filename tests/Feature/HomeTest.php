<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_get_home(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Lista de Caronas'); 
        $response->assertViewIs('home');
    }

    public function test_can_get_show(): void
    {
        $response = $this->get('/carona/1');

        $response->assertStatus(200);
        $response->assertSee('Detalhes da Carona');
        $response->assertViewIs('show');
    }
}
