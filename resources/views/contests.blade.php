@extends('layouts.app')

@section('content')

    
    <div class="container" >
    <div class="notification">
        <div class="tabs">
        <ul>
            <li><a href="home" style="text-decoration:none;">Users</a></li>
            <li class="is-active"><a href="contests" style="text-decoration:none;">Contests</a></li>
            
        </ul>
        </div>
            <table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            
            <th>
                Name
            </th>
            <th>
                Action
            </th>
            <th>
                Date
            </th>
            
            @foreach( $contests as $contest)
            <tr>
                
                    <td>
                    <div>{{$contest->model_name}} </div>
                    </td>

                    <td>
                    <span class="button is-primary" ><a target="_blank" href="{{'/contest/'.$contest->model_name}}" style="text-decoration:none;">Enter</a></span>
                    </td>
                
                <td>{{$contest->date}}</td>

            </tr>
            @endforeach 
            </table>
    </div>
    </div>



@endsection
