<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CheckController extends Controller
{
    //

    public function index(Request $request){
        if(User::where('userid','=',$request->unus)->exists()){
            return ['status' => 0];
        }
        return ['status' => 1];
    }


}
