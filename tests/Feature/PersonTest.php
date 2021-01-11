<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{
    /** @test */
    public function only_logged_in_users_can_see_api_person()
    {
        $response = $this->get('/api/person');

        $response->assertStatus(401);
    }
}
