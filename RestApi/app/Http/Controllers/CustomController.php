<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class CustomController extends Controller
{
    public function registration(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required|unique:users,email',
           'password'=>'required',
           'confirm_password'=>'required|same:password'
        ]);
        $row = User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password)
        ]);
        $success['token'] = $row->createToken('MyApp')-> accessToken;
        return response()->json(['success'=>$success],200);
    }
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            return response()->json(['success' => $success], 200);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
}
