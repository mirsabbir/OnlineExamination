@extends('layouts.app')

@section('content')

<div class="columns">
<div class="column"></div>
    <div class="column is-5">
        <div class="formbody">
            <form method = "post" action="/login">
            @csrf
                <div class="field" style="text-align:center;;">
                    <label class="label" style="font-family:raleway;font-size: 20px">Login</label>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="email" value="{{old('email')}}" class="input" type="email" placeholder="e.g. name@example.com">
                            <span class="icon is-small is-left">
                            <i class="fa fa-envelope primary"></i>
                            </span>
                            <span class="icon is-small is-right">
                            </span>
                        </div>
                    @if($errors->has('email'))
                    <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label">Password</label>
                        <div class="control has-icons-left">
                            <input name="password" class="input" type="password" placeholder="********">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock info"></i>
                            </span>
                        </div>
                    @if($errors->has('password'))
                    <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>

                <div id="ckbox">
                    <checkbox></checkbox>
                </div>

                <br/>

                <div class="field is-grouped">
                    <button class="button is-primary is-fullwidth">Login</button>
                </div> 
            </form>
            <br/>
            <div class="field control">
                <a href="{{route('password.request')}}"><button class="button is-danger">Forgot my password</button></a>
            </div>  
                 
        </div>
    </div>
<div class="column"></div>
</div>

@endsection
