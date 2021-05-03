<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function 投稿一覧のURLにアクセスして画面が表示される※ログイン不要()
    {
        $response = $this->get(action('ArticleController@index'));
        $response->assertStatus(200);
    }

    /** @test */
    public function 投稿一覧のURLにアクセスして投稿一覧画面が表示される※ログイン不要()
    {
        $response = $this->get(action('ArticleController@index'));
        $response->assertViewIs('articles.index');
    }

//以下ログイン必要

    /** @test */
    public function 投稿作成のURLにアクセスして画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $response = $this->get(route('articles.create'));
        $response->assertStatus(200);
    }

    /** @test */
    public function 投稿作成のURLにアクセスして投稿作成画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $response = $this->get(action('ArticleController@create'));
        $response->assertViewIs('articles.create');
    }

    /** @test */
    public function 必須項目が入っていれば新規投稿できる()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => 's',
            'second_rank' => '2',
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ]; 
        $response = $this->post(route('articles.store'), $data);
        $this->assertDatabaseHas('articles', [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => 's',
            'second_rank' => '2',
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ]);
    }

    /** @test */
    public function 保存処理完了後は投稿一覧画面に遷移する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => 's',
            'second_rank' => '2',
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $response->assertRedirect(action('ArticleController@index'));
    }

    /** @test */
    public function 詳細画面のURLにアクセスして画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //直前の投稿の詳細画面に遷移
        $response = $this->get(route('articles.show', $item->id));
        $response->assertStatus(200);
    }

    /** @test */
    public function 詳細画面のURLにアクセスして投稿の詳細画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //直前の投稿の詳細画面に遷移
        $response = $this->get(route('articles.show', $item->id));
        $response->assertViewIs('articles.show');
    }

    /** @test */
    public function 存在しない投稿の詳細を表示させようとするとエラー画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //直前の投稿の詳細画面に遷移
        $response = $this->get(route('articles.show', 1010));
        $response->assertStatus(404);
    }

    public function 詳細画面には特定の投稿が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //直前の投稿の詳細画面に遷移
        $response = $this->get(route('articles.show', $item->id));
        $response->assertViewHas('item', $item);
    }

    /** @test */
    public function 詳細画面で投稿に紐付く投稿者名が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $UserName = $user->name;
        $item = \App\Article::find($item->id);
        //直前の投稿の詳細画面に遷移
        $response = $this->get(route('articles.show', $item->id));
        $response->assertSee($UserName);
    }

    /** @test */
    public function 投稿を削除する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿一覧ページからスタート
        $response = $this
            ->from('articles/index');
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        //投稿削除処理
        $this->delete(route('articles.destroy', $item->id));
        $this->assertDeleted('articles', [
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
        //投稿一覧ページからスタート
        $response = $this
            ->from('articles/index');
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $response = $this->delete(route('articles.destroy', $item->id));
        $response->assertRedirect(action('ArticleController@index'));
    }

    /** @test */
    public function 編集画面のURLにアクセスして画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $response = $this->get(route('articles.edit', $item->id));
        $response->assertStatus(200);
    }
    
    /** @test */
    public function 編集画面のURLにアクセスして投稿編集画面が表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $response = $this->get(route('articles.edit', $item->id));
        $response->assertViewIs('articles.edit');
    }

    /** @test */
    public function データを更新した後は投稿の一覧画面に遷移する()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        //投稿一覧ページからスタート
        $response = $this
            ->from('articles/index');
        //投稿処理
        $item = factory(\App\Article::class)->create([
            'user_id' => $user->id,
        ]);
        $data = ['body'=>'編集テスト'];
        $response = $this->PATCH(route('articles.update', $item->id), $data);
        $response->assertRedirect(action('ArticleController@index'));
    }
    

}
