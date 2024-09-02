<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class LoginRequestTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_route_login(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->call('GET', '/login');

        $response->assertStatus(200);
    }


}
