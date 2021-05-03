<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    //テストのたびにデータをリフレッシュする
    use RefreshDatabase;

    /** @test */
   public function 登録したのと違うメールアドレスでログインしようとしてもログインできない()
   {
       //登録処理
       $user = factory(\App\User::class)->create(
        [
            'email' => 'test@example.com',
            'password'  => bcrypt('password123')
        ]);
       // ログイン処理
       $response = $this->post(route('login'), [
           'email'    => 'test@exae.com',
           'password'  => 'password123'
       ]);
       $this->assertGuest();
   }

   /** @test */
   public function 登録したのと違うパスワードでログインしようとしてもログインできない()
   {
       //登録処理
       $user = factory(\App\User::class)->create(
        [
            'email' => 'test@example.com',
            'password'  => bcrypt('password123')
        ]);
       // ログイン処理
       $response = $this->post(route('login'), [
           'email'    => 'test@example.com',
           'password'  => 'password111'
       ]);
       $this->assertGuest();
   }

   /** @test */
   public function 異なるアドレスでログインしようとするとエラーメッセージが表示される()
   {
        //登録処理
        $user = factory(\App\User::class)->create(
            [
                'email' => 'test@example.com',
                'password'  => bcrypt('password123')
            ]);
        // ログイン処理
        $response = $this->post(route('login'), [
            'email'    => 'test@exae.com',
            'password'  => 'password123'
        ]);
        $errorMessage = 'ログイン情報が登録されていません。';
        $this->get(route('login'))->assertSee($errorMessage);
    }

    /** @test */
    public function 異なるパスワードでログインしようとするとエラーメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create(
            [
                'email' => 'test@example.com',
                'password'  => bcrypt('password123')
            ]);
        // ログイン処理
        $response = $this->post(route('login'), [
            'email'    => 'test@example.com',
            'password'  => 'password111'
        ]);
        $errorMessage = 'ログイン情報が登録されていません。';
        $this->get(route('login'))->assertSee($errorMessage);
    }
}
