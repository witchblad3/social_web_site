<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * Тест, проверяющий регистрацию
     * @return void
     */
    public function testResgistration()
    {
        //  todo: наделать тут тесткейсов побольше и научиться работать с тестами
        $data = [
            'email' => 'test_email@test.com',
            'first_name' => 'test_name',
            'last_name' => 'test_name',
            'login' => 'test_login',
            'password' => '12345678',
            'password_confirm' => "123456782"
        ];
        $response = $this->post(route('sign_up'), $data);

        $response->assertStatus(200);
    }
}
