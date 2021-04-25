<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandrangeController extends Controller
{
<<<<<<< Updated upstream
    //各種対応ページの表示
=======
    //それぞれのレンジ表を表示
>>>>>>> Stashed changes
    public function situation(){
        return view('handranges.handrange');
    }

    public function openrange(){
        return view('handranges.openrange');
    }

    public function openutg(){
        return view('handranges.openrange.utg');
    }

    public function openhj(){
        return view('handranges.openrange.hj');
    }
    
    public function openco(){
        return view('handranges.openrange.co');
    }
    
    public function openbtn(){
        return view('handranges.openrange.btn');
    }

    public function opensb(){
        return view('handranges.openrange.sb');
    }

    public function commingsoon(){
        return view('handranges.commingsoon');
    }

}