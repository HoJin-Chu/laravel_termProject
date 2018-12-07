<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;
use app\User;
class MyPageController extends Controller
{
    public function index(){
        $writer = Auth::user()['name'];
        $items = knowBoard::where('writer','=',$writer)->get();
        return view('myPage.myPage')->with('items',$items);
    }

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

    function userUpdate(Request $request){
        $writer = Auth::user()['name'];
        $name = $request->name;
        if($name){
            $writer->update([
                'name' => $name
            ]);
        }
        return redirect()->route('myPage')->with('message','정보가 수정되었습니다 ! ');
    }
}
