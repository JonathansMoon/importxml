<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShiporderTest extends TestCase
{
    /** @test */
    public function only_logged_in_users_can_see_api_shiporder()
    {
        $response = $this->get('/api/shiporder');

        $response->assertStatus(401);
    }

}
