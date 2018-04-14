@extends('layouts.app')

@section('content')

    
    <div class="container" >
    <div class="notification">
        <div class="tabs">
        <ul>
            <li class="is-active"><a style="text-decoration:none;">Users</a></li>
            <li><a href="contests" style="text-decoration:none;">Contests</a></li>
            
        </ul>
        </div>
            <table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            
            <th>
                Name
            </th>
            <th>
                Username
            </th>
            
            @foreach( $users as $user)
            <tr>
                
                    <td>
                     <a target="_blank" href="{{'/profile/'.$user->userid}}" style="text-decoration:none;"> <img src="{{asset('uploads/avatar/'.$user->avatar)}}" alt=""height="40" width="40" style="border-radius:50%;">
                     {{$user->name}} </a>
                    </td>
                
                <td>{{$user->userid}}</td>

            </tr>
            @endforeach 
            </table>
    </div>
    </div>



@endsection
