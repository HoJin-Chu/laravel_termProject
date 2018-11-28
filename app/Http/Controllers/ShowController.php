<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;
use App\reply;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowBoardIndex(Request $request)
    {
        $boardType = $request->boardType;
        $items = knowBoard::where('boardType','=',$boardType)->
        orderBy('id','desc')->paginate(5); 
        return view('showPets.show',compact('items'));
    }

    public function ShowCreateIndex()
    {
        return view('showPets.showCreate');
    }

    public function ShowCreateInsert(Request $request){
        $writer = Auth::user()['name'];
        $file=$request->file('imgPath');
        $path='img';
        $file->move($path,$file->getClientOriginalName());

        $knowBoard = new knowBoard;
        $knowBoard->title = $request->title;
        $knowBoard->writer = $writer;
        $knowBoard->content = $request->content;
        $knowBoard->imgPath = $request->file('imgPath')->getClientOriginalName();
        $knowBoard->BoardType = $request->BoardType;
        $knowBoard->save();
        return redirect()->route('petShow',[3]);
    }

    public function ShowViewIndex(Request $request){
        
        $id = $request->id;
        $msg = knowBoard::find($id);
		$msg->hits += 1;
        $items = reply::where('boardId','=',$id)->orderBy('boardId','desc')->get();
        $msg->save();
        return view('ShowPets.showView')->with('msg', $msg)->with('items',$items);
    }

    public function ShowReplyInsert(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);

        $writer = Auth::user()['name'];
        $reply = new reply;
        $reply->boardId = $id;
        $reply->writer = $writer;
        $reply->reContent = $request->reContent;
        $reply->save();
        $items = reply::where('boardId','=',$id)->orderBy('reNo','desc')->get();
        return view('showPets.showView')->with('msg', $msg)->with('items',$items);
    }


    // 글수정페이지로 이동
    public function ShowModifyIndex(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);
        return view('showPets.showModify')->with('id',$id)->with('msg', $msg);
    }

    // 글수정 
    public function ShowModifyInsert(Request $request){

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
            return redirect()->route('petShow',[3])->with('message',$id . '번 글이 수정되었습니다 ! ');
        }else{
            // 모든값이 입력되야한다는 오류 메시지 or 에초에 방지 required
            return "$id && $title && $writer && $content";
        }
    }
    public function ShowDelete(Request $request){
        $id = $request->id;
        
        $msg = KnowBoard::find($id);
        $msg->delete();

        return redirect()->route('petShow',[3])->with('message',$id . '번 글이 삭제되었습니다 ! ');
    }
}
