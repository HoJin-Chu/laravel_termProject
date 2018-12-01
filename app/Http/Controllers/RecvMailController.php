<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\recv_note;

class RecvMailController extends Controller
{
    public function RecvMailBoardIndex()
    {
        $writer = Auth::user()['name'];
        $recv = recv_note::where('recv_id','=',$writer)->orderBy('id','desc')->get();
        return view('userMail.recvMail')->with('recv',$recv);
    }
}
