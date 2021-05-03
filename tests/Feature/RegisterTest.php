<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    //テストのたびにデータをリフレッシュする
    use RefreshDatabase;

    /** @test */
    public function ユーザー登録画面のURLにアクセスしてユーザー登録画面が表示される()
    {
        $response = $this->get(route('register'));
        $response->assertViewIs('auth.register');
    }

    /** @test */
    public function ユーザー登録に成功した後はメイン画面が表示される()
    {
        $response = $this->post(route('register'), [
            'name' => 'testUser',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123'
        ]);
        $response->assertRedirect('/main');
    }
}
