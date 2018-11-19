<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        $socialUser = \App\User::whereEmail($request->input('email'))
        ->whereNull('password')->first();
        
        if($socialUser){
            return $this->updateSocialAccount($request,$socialUser);
        }

        return $this->createNativeAccount($request);
    }

    protected function updateSocialAccount(Request $request, \App\User $user){
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
        ]);

        auth()->login($user);
        return $this->respondCreated($user->name . '님 환영합니다');
    }

    public function createNativeAccount(Request $request){}
    

}
