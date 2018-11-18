<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;

class KnowController extends Controller
{
    
    // 게시판 보여주기 -> 페이지네이션 
    public function KnowBoardIndex()
    {
        $items = knowBoard::
        orderBy('id','desc')->paginate(10); 
        return view('knowPets.know',compact('items'));
    }

    function fetch_data(Request $request){
        if($request->ajax()){
            $items = knowBoard::
            orderBy('id','desc')->paginate(10);
            return view('knowPets.knowPageData',compact('items'))->render();
        }
    }

    // 글작성페이지로 이동
    public function KnowCreateIndex()
    {
        return view('knowPets.knowCreate');
    }

    // 글작성
    public function KnowCreateInsert(Request $request){
        $writer = Auth::user()['name'];
        $knowBoard = new knowBoard;
        $knowBoard->title = $request->title;
        $knowBoard->writer = $writer;
        $knowBoard->content = $request->content;
        $knowBoard->save();

        return redirect()->route('petKnow');
        // 세션을 넘길때는 response
    }


    // 작성한 글의 상세보기 
    public function KnowViewIndex(Request $request){
        
        $id = $request->id;
        $msg = knowBoard::find($id);
        return view('knowPets.knowView')->with('msg', $msg);
    }

    // id에 대한 댓글을 보여줘야함
    // public function KnowReplyIndex()
    // {
    //     $items = reply::
    //     orderBy('id','desc')->all();
    //     return view('knowPets.knowView',compact('items'));
    // }

    public function KnowReplyInsert(Request $request){
        $writer = Auth::user()['name'];
        $reply = new reply;
        $reply->writer = $writer;
        $reply->reContent = $request->reContent;
        $reply->save();

        return redirect()->route('petViewPage');
    }

    // 글수정페이지로 이동
    public function KnowModifyIndex(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);
        return view('knowPets.knowModify')->with('id',$id)->with('msg', $msg);
    }

    // 글수정 
    public function KnowModifyInsert(Request $request){

        $id = $request->id;
	    $title = $request->title;
	    $writer = Auth::user()['name'];
	    $content = $request->content;

        if($id && $title && $writer && $content){
            $msg = knowBoard::find($id);
            $msg->update([
                'title' => $title,
                'writer' => $writer,
                'content' => $content,
            ]);
            return redirect()->route('petKnow')->with('message',$id . '번 글이 수정되었습니다 ! ');
        }else{
            // 모든값이 입력되야한다는 오류 메시지 or 에초에 방지 required
            return "$id && $title && $writer && $content";
        }
    }

    public function knowDelete(Request $request){
        $id = $request->id;
        
        $msg = KnowBoard::find($id);
        $msg->delete();

        return redirect()->route('petKnow')->with('message',$id . '번 글이 삭제되었습니다 ! ');
    }
}
