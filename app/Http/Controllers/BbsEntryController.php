<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BbsEntry;

class BbsEntryController extends Controller
{
    function index(){
		//@TODO 投稿一覧画面を表示
        $item_list = BbsEntry::orderBy("id", "desc")->get();
		return view("bbs_entry_list", [
			"item_list" => $item_list
		]);
	}
	function create(Request $request){
		//@TODO 投稿処理を行う
        $input = $request->only('author', 'title', 'first_rank', 'first_suit', 'second_rank', 'second_suit', 'position', 'stack', 'action_at_preflop', 'flop', 'action_at_flop', 'turn', 'action_at_turn', 'river', 'action_at_river', 'hand_of_opponent', 'result', 'body');
		
        $entry = new BbsEntry();
	    $entry->author = $input["author"];
	    $entry->title = $input["title"];
        $entry->first_rank = $input["first_rank"];
        $entry->first_suit = $input["first_suit"];
        $entry->second_rank = $input["second_rank"];
        $entry->second_suit = $input["second_suit"];
        $entry->position = $input["position"];
        $entry->stack = $input["stack"];
        $entry->action_at_preflop = $input["action_at_preflop"];
        $entry->flop = $input["flop"];
        $entry->action_at_flop = $input["action_at_flop"];
        $entry->turn = $input["turn"];
        $entry->action_at_turn = $input["action_at_turn"];
        $entry->river = $input["river"];
        $entry->action_at_river = $input["action_at_river"];
        $entry->hand_of_opponent = $input["hand_of_opponent"];
        $entry->result = $input["result"];
	    $entry->body = $input["body"];
	    $entry->save();

	    return redirect('/');
	}
}