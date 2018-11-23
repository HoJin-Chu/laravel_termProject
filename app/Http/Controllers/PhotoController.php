<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;
use App\reply;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PhotoBoardIndex(Request $request)
    {
        $boardType = $request->boardType;
        $items = knowBoard::where('boardType','=',$boardType)->
        orderBy('id','desc')->paginate(10); 
        return view('PhotoPets.Photo',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PhotoCreateIndex()
    {
        return view('PhotoPets.photoCreate');
    }

    public function PhotoCreateInsert(Request $request){
        $writer = Auth::user()['name'];
        $knowBoard = new knowBoard;
        $knowBoard->title = $request->title;
        $knowBoard->writer = $writer;
        $knowBoard->content = $request->content;
        $knowBoard->BoardType = $request->BoardType;
        $knowBoard->save();
        return redirect()->route('petPhoto',[2]);
    }

    public function PhotoViewIndex(Request $request){
        
        $id = $request->id;
        $msg = knowBoard::find($id);
		$msg->hits += 1;
        $items = reply::where('boardId','=',$id)->orderBy('boardId','desc')->get();
        $msg->save();
        return view('PhotoPets.photoView')->with('msg', $msg)->with('items',$items);
    }

    public function PhotoReplyInsert(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);

        $writer = Auth::user()['name'];
        $reply = new reply;
        $reply->boardId = $id;
        $reply->writer = $writer;
        $reply->reContent = $request->reContent;
        $reply->save();
        $items = reply::where('boardId','=',$id)->orderBy('reNo','desc')->get();
        return view('PhotoPets.photoView')->with('msg', $msg)->with('items',$items);
    }


    // 글수정페이지로 이동
    public function PhotoModifyIndex(Request $request){
        $id = $request->id;
        $msg = knowBoard::find($id);
        return view('PhotoPets.PhotoModify')->with('id',$id)->with('msg', $msg);
    }

    // 글수정 
    public function PhotoModifyInsert(Request $request){

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
            return redirect()->route('petPhoto',[2])->with('message',$id . '번 글이 수정되었습니다 ! ');
        }else{
            // 모든값이 입력되야한다는 오류 메시지 or 에초에 방지 required
            return "$id && $title && $writer && $content";
        }
    }
    public function PhotoDelete(Request $request){
        $id = $request->id;
        
        $msg = KnowBoard::find($id);
        $msg->delete();

        return redirect()->route('petPhoto',[2])->with('message',$id . '번 글이 삭제되었습니다 ! ');
    }
}
