<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class processController extends Controller
{
    
    public function firstLinkPet()
    {
        $test = DB::table('board')->paginate(5); 
        return view('knowPets.know',['items'=>$test]);
    }

    public function secondLinkPet()
    {
        $test = DB::table('board')->paginate(6);
        return view('DogPets.dog',['items'=>$test]);
    }

    public function create(){}

    
    public function store(Request $request)
    {
        // 네임값을 키값으로 벨류값을 입력한값으로 
        $writer = Auth::user()['name'];
        DB::insert('insert into board (title,writer,content,hits,likes) values (?,?,?,?,?)',[
            $request->title,$writer,$request->content,3,3
        ]);

        $pet1Route = DB::table('board')->paginate(5);
        return view('knowPets.know',['items'=>$pet1Route]);
    }

    public function show($id){}

    public function edit($id){}

    public function update(Request $request, $id){}
   
    public function destroy($id){}
}
