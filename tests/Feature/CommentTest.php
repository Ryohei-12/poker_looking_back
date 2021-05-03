<?php

namespace Tests\Feature;

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
    public function コメント保存処理完了後はコメントした投稿詳細画面に遷移する()
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
        //コメントした投稿の詳細画面に遷移
        $response = $this->get(route('articles.show', $article->id));
        $response->assertStatus(200);
    }

    /** @test */
    public function コメントを削除する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $article = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //コメント投稿処理
        $item = factory(\App\Comment::class)->create([
            'user_id' => $user->id,
            'article_id' => $article->id,
        ]);
        //コメント削除処理
        $this->delete(route('comments.destroy', $item->id));
        $this->assertDeleted('comments', [
            'id' => $item->id,
        ]);
    }

    /** @test */
    public function 投稿の削除処理完了後は投稿一覧画面に遷移する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $article = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //投稿詳細ページからスタート
        $response = $this
            ->from('articles/index');
        //コメント投稿処理
        $item = factory(\App\Comment::class)->create([
            'user_id' => $user->id,
            'article_id' => $article->id,
        ]);
        //コメント削除処理
        $response = $this->delete(route('comments.destroy', $item->id));
        $response->assertRedirect(action('ArticleController@show', $article->id));
    }
}
