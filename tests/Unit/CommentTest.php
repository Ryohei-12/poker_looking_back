<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function コメントを新規作成する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $article = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $data = [
            'body'=>'コメントテスト',
            'article_id' => $article->id,
        ];
        //コメント投稿処理
        $response = $this->post(route('comments.store'), $data);
        $this->assertDatabaseHas('comments', [
            'body'=>'コメントテスト'
        ]);
    }

    /** @test */
    public function コメント投稿フォームに何も投稿しなかった場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $article = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $data = [
            'body'=> null,
            'article_id' => $article->id,
        ];
        //コメント投稿処理
        $response = $this->post(route('comments.store'), $data);
        $validation = 'コメントは必ず指定してください';
        $this->get(route('articles.show', $article->id))->assertSee($validation);
    }

    /** @test */
    public function コメントの文字数をオーバーした場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $article = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $data = [
            'body'=> str_repeat('a', 201),
            'article_id' => $article->id,
        ];
        //コメント投稿処理
        $response = $this->post(route('comments.store'), $data);
        $validation = 'コメントは、200文字以下で指定してください。';
        $this->get(route('articles.show', $article->id))->assertSee($validation);
    }
}
