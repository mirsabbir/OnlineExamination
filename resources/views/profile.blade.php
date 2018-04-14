@extends('layouts.app')

@section('content')



<div class="columns">
    <div class="column"></div>
    <div class="column is-8">
        <div class="formbody">
            <div class="columns">
                <div class="column">
                    <div class="tabs is-toggle">
                        <ul>
                            <li class="is-active"><a>Profile</a></li>
                            @if(Auth::check())
                            @if(Auth::user()->userid==$userid)
                            <li><a href="/settings">Settings</a></li>
                            @endif
                            @endif
                        </ul>
                    </div> <!-- tabs -->
                    <strong> Name: </strong> {{$name}} <br/>
                    @if(Auth::check())
                    @if(Auth::user()->userid==$userid)
                    <strong>E-mail:</strong> {{$email}} <br>
                    @endif
                    @endif
                    <strong>Username: </strong>{{$userid}} <br>
                    <strong>Sex: </strong>{{$sex}} <br>
                </div>
                <div class="column">
                    <img src="{{asset('uploads/avatar/'.$avatar)}}" alt="" style="border-radius:50%;" width="400" height="400">
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>
       
@endsection
