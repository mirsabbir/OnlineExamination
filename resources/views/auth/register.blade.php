@extends('layouts.app')

@section('content')


<div class="columns">
    <div class="column"></div>
        <div class="column is-5">
            <div class="formbody">
                <div class="field" style="text-align:center;;">
                    <label class="label" style="font-family:raleway;font-size: 20px">Sign up</label>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                     <p class="help is-danger">{{ $error }}</p>
                    @endforeach
                @endif 
                <form method="post" action="/register">
                @csrf
                
                <div class="field">
                    <label class="label">Name</label>
                        <div class="control">
                            <input id="jname" class="input" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                        </div>
                    <p id="pname" class="help is-danger"></p>
                </div>
                <div class="field" id="chkuser">
                    <label class="label">Username</label>
                        <div  class="control has-icons-left has-icons-right">
                            
                            <input value="{{ old('username') }}" name="username" v-model="inputusername" id="jusername" class="input " type="text" placeholder="Username">
                            <span class="icon is-small is-left">
                            <i class="fa fa-user success"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i id="chkorcross" class="fa "></i>
                            </span>
                        </div>
                    <p id="pusername" class="help is-danger" v-text="msg"></p>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="email" id="jemail" class="input " type="email" placeholder="e.g. name@example.com" value="{{ old('email') }}">
                            <span class="icon is-small is-left">
                            <i class="fa fa-envelope primary"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fa "></i>
                            </span>
                        </div>
                    <p id="pemail" class="help is-danger"></p>
                </div>
                <div class="field">
                    <label class="label">Password</label>
                        <div class="control has-icons-left">
                            <input name="password" id="jpass" class="input" type="password" placeholder="********">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock info"></i>
                            </span>
                        </div>
                    <p id="ppass" class="help is-danger"></p>
                </div>
                <div class="field">
                    <label class="label">Confirm Password</label>
                        <div class="control has-icons-left">
                            <input name="password_confirmation" id="jcpass" class="input" type="password" placeholder="********">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock info"></i>
                            </span>
                        </div>
                    <p id="pcpass" class="help is-danger"></p>
                </div>
                <label class="label">Sex</label>
                <div id="radio">
                    <radio></radio>
                </div>
                <br>
                <div class="field is-grouped">
                    <input type="submit" class="button is-success is-fullwidth" value="Sign up"></input>
                </div>
            </form>
            </div>
        </div>
    <div class="column"></div>
</div>
@endsection
