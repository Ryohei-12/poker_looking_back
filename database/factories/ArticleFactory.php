<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => 'タイトル',
        'first_rank' => '2',
        'first_suit' => 's',
        'second_rank' => '2',
        'second_suit' => 'd',
        'position' => 'BB',
        'stack' => '100',
        'action_at_preflop' => 'オールイン',
        'flop_1_rank' => 'A',
        'flop_1_suit' => 's',
        'flop_2_rank' => 'A',
        'flop_2_suit' => 's',
        'flop_3_rank' => 'A',
        'flop_3_suit' => 's',
        'action_at_flop' => 'テスト',
        'turn_rank' => 'A',
        'turn_suit' => 's',
        'action_at_turn' => 'テスト',
        'river_rank' => 'A',
        'river_suit' => 's',
        'action_at_river' => 'テスト',
        'opponent_first_rank' => 'A',
        'opponent_first_suit' => 's',
        'opponent_second_rank' => 'A',
        'opponent_second_suit' => 's',
        'result' => '1.5',
        'body' => 'テスト',
    ];
});
