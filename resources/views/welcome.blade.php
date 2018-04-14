<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Examination</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:100|Raleway|Source+Sans+Pro|Ubuntu:300" rel="stylesheet">

       
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        
    </head>
    <body>

        <nav class="navbar is-fixed-top">
            <div class="navbar-brand">
            <div class="navbar-item">Online Examination</div>
            
            </div>
            <div class="navbar-menu navbar-end">
            @if (Route::has('login'))
                @auth
                    <a class="navbar-item" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="navbar-item" href="{{ route('login') }}">Login</a>
                    <a class="navbar-item" href="{{ route('register') }}">Register</a>
                @endauth
            @endif
            </div>
        </nav>
        <section class="hero is-primary is-medium">
        <div class="tile is-ancestor">
            <div class="hero-body">
                <div class="tile is-parent">
                <div class="tile is-vertical is-7">
                <h1 class="title" style="font-family:'IBM Plex Mono';">
                    Learn Practice Improve </br> Improve your skill
                </h1>
                <h2 class="subtitle"style="font-family: 'Ubuntu';">
                    </br>Practice regular contests 
                    </br>Win prizes
                    </br>Share your thoughts
                </h2>
                </div>
                <div class="tile is-vertical is-4" >
                <img  src="logos/maca.png" height="500" width="520">
                </div>
                </div>
            </div>
        </div>
        </section>
        
        

        
    </body>
</html>
