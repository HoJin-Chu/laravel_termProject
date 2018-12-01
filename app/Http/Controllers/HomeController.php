<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\knowBoard;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $days = knowBoard::
    orderBy('created_at','desc')->paginate(5);
    $hitsBoards = knowBoard::
    orderBy('hits','desc')->paginate(5);
    return view('index')->with('days',$days)->with('hitsBoards',$hitsBoards);
        return view('index')->with('days')->with('hitsBoards');
    }
}
