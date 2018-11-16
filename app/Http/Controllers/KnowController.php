<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\knowBoard;

class KnowController extends Controller
{
    
    public function KnowBoardIndex()
    {
        $items = knowBoard::
        orderBy('id','desc')->paginate(5); 
        return view('knowPets.know',compact('items'));
    }

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

    public function create(){}

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}
   
    public function destroy($id){}
}
