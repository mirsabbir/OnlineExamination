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
                            <li><a href="/profile/{{Auth::user()->userid}}">Profile</a></li>
                            <li class="is-active"><a href="/settings">Settings</a></li>
                        </ul>
                    </div> <!-- tabs -->
                    <form action="{{ route('settings.store') }}" method= "post" enctype="multipart/form-data">
                        @csrf
                        <div class="field">
                            <div class="label">Name: </div>
                            <input placeholder="Name" type="text" class="input {{ \Session::has('msg')? 'is-danger':'' }}" name="name">
                        </div>
                        @if(\Session::has('msg'))
                        <p class="help is-danger">Name must be at-least 3 characters long</p>
                        @endif
                        <div class="label">Change profile picture:</div>
                        <div class="field">
                            <div id="file">
                                <file></file>
                            </div>
                        </div>
                        <br>
                        @if(\Session::has('saved'))
                        <article class="message is-primary">
                            <div class="message-header">
                                <p>Info</p>
                            </div>
                            <div class="message-body">
                                Settings saved
                            </div>
                        </article>
                        @endif
                        <br>
                        <br>
                        <input type="submit" value="Update" class="button is-fullwidth is-link">
                    </form>
                </div>
                <div class="column">
                    <img src="{{asset('uploads/avatar/'.Auth::user()->avatar)}}" alt="" style="border-radius:50%;">
                </div>
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>
       
@endsection
