<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;

class MyPageController extends Controller
{
    public function MyBoardIndex()
    {
        $writer = Auth::user()['name'];
        $items = knowBoard::where('writer','=',$writer)->
        orderBy('id','desc')->paginate(5);
        return view('myPage.myWrited',compact('items'));
    }

    function fetch_data(Request $request){
        $writer = Auth::user()['name'];
        if($request->ajax()){
            $items = knowBoard::where('writer','=',$writer)->
            orderBy('id','desc')->paginate(5);
            return view('myPage.noneLoading',compact('items'))->render();
        }
    }
}
