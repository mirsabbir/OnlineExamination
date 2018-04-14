<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SettingsController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('settings')->with(['msg'=>0]);
    }
    public function store(Request $request){
       if(strlen($request->name)<3 && strlen($request->name)>0){
            
            if(!($request->pic==null)){
                // pic is provided

            }
            \Session::flash('msg', 1);
            return \Redirect::back();
       }

       if(!(strlen($request->name)==0)){
           // name is provided
            $user = \Auth::user();
            $user->name = $request->name;
            $user->save();
       }
       if($request->hasFile('pic')){
           // pic is provided
            $avatar = $request->file('pic');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            $request->pic->storeAs('uploads/avatar', $filename,'public');
            $user = \Auth::user();
            $user->avatar = $filename;
            $user->save();
           
       }
       \Session::flash('saved', 1);
       return \Redirect::back();  
    }
}
