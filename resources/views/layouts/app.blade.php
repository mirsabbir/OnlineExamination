<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar is-primary has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{config('app.url')}}">
            <img src="{{asset('logos/oelogo.png')}}" alt="Online Examination" width="270" height="28">
            </a>
            <div class="navbar-burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-end">
            @if(!Auth::check())
                <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link"></a>
                    <div class="navbar-dropdown is-right">
                        <a href="/profile/{{Auth::user()->userid}}" class="navbar-item">
                           <i class="fa fa-user"> </i> &nbsp  Profile
                        </a>
                        <a class="navbar-item">
                        <i class="fa fa-sign-out"> </i> &nbsp 
                        <form method="post" action="/logout">
                            @csrf
                           <input type="submit" value="Log out"style="background:none;border:none;cursor:pointer;display:block;"> 
                        </form>
                        </a>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </nav>


    @yield('content')



<!--footer -->

<footer class="footer">
    <div class="container">
    <div class="columns">
    <i class="column fa fa-2x fa-facebook-square"> </i>
    <div class=" columncontent has-text-centered">
        Online Examination<br/> with  <i class="fa fa-heart"></i> by sabbir
    </div>
    </div>
  </div>
</footer>

</body>

<script>
    
</script>

</html>
