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
        $input = $request->only('author', 'title', 'body');
		
        $entry = new BbsEntry();
	    $entry->author = $input["author"];
	    $entry->title = $input["title"];
	    $entry->body = $input["body"];
	    $entry->save();

	    return redirect('/');
	}
}