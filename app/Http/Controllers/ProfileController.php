<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function __construct(){
        
    }
    public function index($id){
        if(!User::where('userid','=',$id)->exists()){
            return redirect('/');
        }
        $data = User::where('userid','=',$id)->get();
        
        return view('profile',[
            'name' => $data[0]->name,
            'email' => $data[0]->email,
            'userid' => $data[0]->userid,
            'sex' => $data[0]->sex,
            'avatar' => $data[0]->avatar,
        ]);
    }

}
