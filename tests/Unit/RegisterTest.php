<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    //テストのたびにデータをリフレッシュする
    use RefreshDatabase;
    
    /** @test */
    public function 名前を入力しないで登録しようとするとエラーメッセージが表示される()
    {
        $response = $this->post(route('register'), [
            'name'  => '',
            'email'    => 'test@example.com',
            'password'  => 'password123'
        ]);
        $errorMessage = 'ユーザー名は必ず指定してください';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function 名前がかぶっていると登録できない()
    {
        $user = factory(\App\User::class)->create(
            [
                'name'  => 'test',
            ]);
        $response = $this->post(route('register'), [
            'name'  => 'test',
            'email'    => 'test@example.com',
            'password'  => 'password123'
        ]);
        $errorMessage = 'そのユーザー名は既に存在しています。';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function 名前は3文字以上じゃないと登録できない()
    {
        $response = $this->post(route('register'), [
            'name'  => 'あ',
            'email'    => 'test@example.com',
            'password'  => 'password123'
        ]);
        $errorMessage = 'ユーザー名は、3文字以上で指定してください。';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function 名前は16文字以下じゃないと登録できない()
    {
        $response = $this->post(route('register'), [
            'name'  => str_repeat('a', 17),
            'email'    => 'test@example.com',
            'password'  => 'password123'
        ]);
        $errorMessage = 'ユーザー名は、16文字以下で指定してください。';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function メールアドレスを入力しないで登録しようとするとエラーメッセージが表示される()
    {
        $response = $this->post(route('register'), [
            'name'  => 'testUser',
            'email'    => '',
            'password'  => 'password123'
        ]);
        $errorMessage = 'メールアドレスは必ず指定してください';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function メールアドレスはメールアドレス形式じゃないと登録できない()
    {
        $response = $this->post(route('register'), [
            'name'  => 'testUser',
            'email'    => 'example',
            'password'  => 'password123'
        ]);
        $errorMessage = 'メールアドレスには、有効なメールアドレスを指定してください。';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function メールアドレスは255文字以下じゃないと登録できない()
    {
        $response = $this->post(route('register'), [
            'name'  => 'testUser',
            'email'    => str_repeat('a', 256),
            'password'  => 'password123'
        ]);
        $errorMessage = 'メールアドレスは、255文字以下で指定してください。';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function パスワードを入力しないで登録しようとするとエラーメッセージが表示される()
    {
        $response = $this->post(route('register'), [
            'name'  => 'testuser',
            'email'    => 'test@example.com',
            'password'  => ''
        ]);
        $errorMessage = 'パスワードは必ず指定してください';
        $this->get(route('register'))->assertSee($errorMessage);
    }

    /** @test */
    public function パスワードの8文字以上じゃないと登録できない()
    {
        $response = $this->post(route('register'), [
            'name'  => 'testuser',
            'email'    => 'test@example.com',
            'password'  => 'test'
        ]);
        $errorMessage = 'パスワードは、8文字以上で指定してください。';
        $this->get(route('register'))->assertSee($errorMessage);
    }
    
    /** @test */
    public function パスワードは半角英数字でないと登録できない()
    {
        $response = $this->post(route('register'), [
            'name'  => 'testuser',
            'email'    => 'test@example.com',
            'password'  => 'ああああああああ'
        ]);
        $errorMessage = 'パスワードに正しい形式を指定してください。';
        $this->get(route('register'))->assertSee($errorMessage);
    }
}
