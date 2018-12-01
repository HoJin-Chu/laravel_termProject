<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\send_note;
use App\recv_note;

class SendMailController extends Controller
{
    public function SendMailBoardIndex()
    {
        $writer = Auth::user()['name'];
        $send = send_note::where('send_id','=',$writer)->orderBy('id','desc')->get();
        return view('userMail.sendMail')->with('send',$send);

    }

    public function SendMailInsert(Request $request){
        $writer = Auth::user()['name'];

        $sendNote = new send_note;
        $sendNote->recv_id = $request->recv_id;
        $sendNote->send_id = $writer;
        $sendNote->title = $request->title;
        $sendNote->content = $request->content;
        $sendNote->recv_chk = 0;
        $sendNote->save();

        $recvNote = new recv_note;
        $recvNote->recv_id = $request->recv_id;
        $recvNote->send_id = $writer;
        $recvNote->title = $request->title;
        $recvNote->content = $request->content;
        $recvNote->save();

        return redirect()->route('sendMail')->with('success','쪽지를 성공적으로 전송했습니다 !');

    }

    public function SendMailView(Request $request){
        $id = $request->id;
        $sendView = send_note::find($id);
        return view('userMail.readMail')->with('sendView',$sendView);
    }
}
