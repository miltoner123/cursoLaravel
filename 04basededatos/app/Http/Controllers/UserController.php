<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
 function index(){
    return User::all();
 }
 function store(){
    $user = new User();
    $user->name = request('name');
    $user->email =request('email');
    $user->password = bcrypt(request('password'));
    $user->save();
    return $user;
 }
 function update($id,Request $request){
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    if($request->input('password')){
        $user->password = bcrypt($request->input('password'));
    }
    $user->save();
    return $user;
 }
 function destroy($id){
    $user = User::find($id);
    if(!$user){
        $user->delete();
        return response()->json(['mensaje'=>'User delete Successfully'],200);   ;
    }
    return response()->json(['mensaje'=>'User Not Found'],404);
 }
}
