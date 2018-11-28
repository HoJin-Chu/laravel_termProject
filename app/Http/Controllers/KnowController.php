<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;
use App\reply;

class KnowController extends Controller
{
    
    // 게시판 보여주기 -> 페이지네이션 
    public function KnowBoardIndex(Request $request)
    {
        // 여기서 오늘 작업해야하는것이 어느게시판인지 구분해서 
        // 해당 게시글만 해당게시판에 뿌려준다
        $boardType = $request->boardType;
        $items = knowBoard::where('boardType','=',$boardType)->
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
        $knowBoard->BoardType = $request->BoardType;
        $knowBoard->save();
        return redirect()->route('petKnow',[1]);
        // 세션을 넘길때는 response
    }


    // 작성한 글의 상세보기 
    // 댓글을 그 해당 게시글의 번호에맞는 댓글을 보여주어야함
    public function KnowViewIndex(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);
        $msg->hits += 1;
        $getter = reply::where('boardId',$id)->get();
        $items = reply::where('boardId','=',$id)->orderBy('boardId','desc')->get();
        $msg->save();
        return view('knowPets.knowView')->with('msg', $msg)->with('items',$items)->with('getter',$getter);
    }

    public function KnowReplyInsert(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);

        $writer = Auth::user()['name'];
        $reply = new reply;
        $reply->boardId = $id;
        $reply->writer = $writer;
        $reply->reContent = $request->reContent;
        $reply->save();
        $getter = reply::where('boardId',$id)->get();
        $items = reply::where('boardId','=',$id)->orderBy('reNo','desc')->get();
        return view('knowPets.knowView')->with('msg', $msg)->with('items',$items)->with('getter',$getter);
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
            return redirect()->route('petKnow',[1])->with('message',$id . '번 글이 수정되었습니다 ! ');
        }else{
            // 모든값이 입력되야한다는 오류 메시지 or 에초에 방지 required
            return "$id && $title && $writer && $content";
        }
    }

    public function knowDelete(Request $request){
        $id = $request->id;
        
        $msg = KnowBoard::find($id);
        $msg->delete();

        return redirect()->route('petKnow',[1])->with('message',$id . '번 글이 삭제되었습니다 ! ');
    }
}
