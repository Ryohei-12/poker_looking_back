<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

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
    public function タイトルが空欄の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => null,
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
        $validation = 'タイトルは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function first_rankが空欄の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => null,
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
        $validation = 'スターティングハンドは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function first_suitが空欄の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => null,
            'second_rank' => '2',
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'スターティングハンドは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function second_rankが空欄の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => 's',
            'second_rank' => null,
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'スターティングハンドは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function second_suitが空欄の場合はバリデーションメッセージが表示される()
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
            'second_suit' => null,
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'スターティングハンドは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function ポジションが空欄の場合はバリデーションメッセージが表示される()
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
            'position' => null,
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'ポジションは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function スタックが空欄の場合はバリデーションメッセージが表示される()
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
            'stack' => null,
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'スタックは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function プリフロップのアクションが空欄の場合はバリデーションメッセージが表示される()
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
            'action_at_preflop' => null,
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'プリフロップのアクションは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function コメントが空欄の場合はバリデーションメッセージが表示される()
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
            'body' => null,
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'コメントは必ず指定してください';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function タイトルが文字数オーバーの場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => str_repeat('a', 51),
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
        $validation = 'タイトルは、50文字以下で指定してください。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function コメントが文字数オーバーの場合はバリデーションメッセージが表示される()
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
            'body' => str_repeat('a', 501),
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'コメントは、500文字以下で指定してください。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function スタックが数値以外の場合はバリデーションメッセージが表示される()
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
            'stack' => 'テスト',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = 'スタックには、数字を指定してください。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function 収支が数値以外の場合はバリデーションメッセージが表示される()
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
            'result' => 'テスト',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = '収支には、数字を指定してください。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function first_rankが選択肢以外の値の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => 'あ',
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
        $validation = '選択されたスターティングハンドは正しくありません。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function first_suitが選択肢以外の値の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => 'あ',
            'second_rank' => '2',
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = '選択されたスターティングハンドは正しくありません。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function second_rankが選択肢以外の値の場合はバリデーションメッセージが表示される()
    {
        //登録処理
        $user = factory(\App\User::class)->create();
        //ログイン処理
        $this->actingAs($user);
        $data = [
            'title' => 'タイトル',
            'first_rank' => '2',
            'first_suit' => 's',
            'second_rank' => 'あ',
            'second_suit' => 'd',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = '選択されたスターティングハンドは正しくありません。';
        $this->get(route('articles.create'))->assertSee($validation);
    }

    /** @test */
    public function second_suitが選択肢以外の値の場合はバリデーションメッセージが表示される()
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
            'second_suit' => 'あ',
            'position' => 'BB',
            'stack' => '100',
            'action_at_preflop' => 'オールイン',
            'result' => '1.5',
            'body' => 'テスト',
        ];
        $response = $this->post(route('articles.store'), $data);
        $validation = '選択されたスターティングハンドは正しくありません。';
        $this->get(route('articles.create'))->assertSee($validation);
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
}
