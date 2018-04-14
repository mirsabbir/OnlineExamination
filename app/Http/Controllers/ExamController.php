<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_test;
use App\Question;

class ExamController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }
    public function index($contestName){
        
        $model = Model_test::where('model_name',$contestName)->get();
        $date = new \DateTime();
        
        $dbtime = strtotime($model[0]['date']);
        $servertime = $date->getTimestamp();
       // dd($dbtime, $servertime);
        if($servertime<=$dbtime+3600 && $servertime>=$dbtime){
            $model_id = $model[0]['id'];
            $all = Question::where('model_id',$model_id)->get();
            $rem = $dbtime+3600 - $servertime;
            return view('contest')->with(['all' => $all,'model_name'=>$contestName,'stime'=>$servertime, 'rem'=>$rem]);
        }
        



       // dd(gmdate("Y-m-d H:i:s", $servertime));
       // dd(gmdate("Y-m-d H:i:s", $servertime));

        return redirect('/contests');
    }


}
