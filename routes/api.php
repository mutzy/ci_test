<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/user', function (Request $request) {
    
    // $user = new User();
    $user = User::whereId(1)->first();
    if($user->exists())
    {
    $msg = $user->test_action();
    return response()->json(['user'=>$user,'message'=> $msg]);
    }
    dd(Example);
    return response()->json([
        'error'=>'failed successfully'
    ],422);
});
