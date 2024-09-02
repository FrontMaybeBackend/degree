<?php

namespace Tests\Unit;


use Tests\TestCase;

class RegisterRequestTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_request_validation_for_register(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->call('POST','/register',[
            'name'=>'test',
            'password' => '222',
            'email' => 'test1332w@test.com',
        ]);

        $response->assertRedirect('/register');
    }
}
