<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/barberos')
        	 ->assertStatus(200)
        	 ->assertSee('seccion barberos');
    }

    public function test_id_barbero()
    {
        $this->get('/detalle_barbero/2')
        	 ->assertStatus(200)
        	 ->assertSee('barbero con id : 2');
    }

    
}
