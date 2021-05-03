<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    //テストのたびにデータをリフレッシュする
    use RefreshDatabase;

   /** @test */
   public function ログイン画面のURLにアクセスして画面が表示される()
   {
       $response = $this->get(route('login'));
       $response->assertStatus(200);
   }

   /** @test */
   public function 登録しておいたemailアドレスとパスワードでログインできる()
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
           'password'  => 'password123'
       ]);
       $this->assertAuthenticatedAs($user);
   }

   /** @test */
   public function ログインに成功した後はメイン画面が表示される()
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
           'password'  => 'password123'
       ]);
       $response->assertRedirect('/main');
   }

    /** @test */
    public function ログアウトすると認証状態が解除される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        // ログアウトリクエスト
        $response = $this->post(route('logout'));
        // ユーザーが認証されていない
        $this->assertGuest();
    }

    /** @test */
    public function ログアウトをするとトップ画面に遷移する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        // ログアウトリクエスト
        $response = $this->post(route('logout'));
        $response->assertRedirect('/');
    }
}
