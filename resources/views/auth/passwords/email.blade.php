@extends('layouts.app')

@section('content')



<div class="columns">
<div class="column"></div>
    <div class="column is-5">
        <div class="formbody">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input name="email" value="{{ old('email') }}" class="input" type="email" placeholder="e.g. name@example.com" required>
                        <span class="icon is-small is-left">
                        <i class="fa fa-envelope primary"></i>
                        </span>
                    </div>
                    @if ($errors->has('email'))
                        <p class="help is-danger"> {{ $errors->first('email') }}</p>     
                    @endif
                </div>
                <div class="field is-grouped">
                    <button class="button is-danger is-fullwidth">Send Password reset link</button>
                </div> 
            </form>
        </div>
    </div>
<div class="column"></div>
</div>
@endsection
