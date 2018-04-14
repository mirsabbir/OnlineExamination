<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_test;

class ContestsController extends Controller
{
    //

    public function index(){
        return view('contests')->with(['contests'=>Model_test::all()]);
    }


}
