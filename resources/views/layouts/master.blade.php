<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZGame</title>

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('includings')
</head>
<body>
    <div class="container">
        <div id="main_left">
            <div id="logo">
                <div class="inner_logo">
                    <a href="index.php"><img src="{{ asset('assets/images/logo2.png') }}" class="img_logo"></a>
                </div>
            </div>

            <div id="charinfo">
                @yield('charinfo')
            </div>

            <div id="navigation">
                @if (Auth::guest())
                @else
                    <div class="inner_navigation">
        				<div class="inner_navigation_highlight"><a href="/home"><img src="{{ asset('assets/images/home-icon.png') }}" class="nav_icon"> Startseite<br></div>
        				<div class="inner_navigation_normal"><a href="/home/charakter"><img src="{{ asset('assets/images/person-icon.png') }}" class="nav_icon"> Charakter</a></div>
        				<div class="inner_navigation_normal"><a href="/home/inventar"><img src="{{ asset('assets/images/inventory-icon.png') }}" class="nav_icon"> Inventar</a></div>
        				<div class="inner_navigation_normal"><a href="/home/marktplatz"><img src="{{ asset('assets/images/market-icon.png') }}" class="nav_icon"> Marktplatz</a></div>
        				<div class="inner_navigation_normal"><a href="/home/training"><img src="{{ asset('assets/images/training-icon.png') }}" class="nav_icon"> Training</a></div>
        				<div class="inner_navigation_normal"><a href="/home/reisen"><img src="{{ asset('assets/images/reisen-icon.png') }}" class="nav_icon"> Reisen</a></div>
        				<div class="inner_navigation_normal"><a href="/home/crew"><img src="{{ asset('assets/images/crew-icon.png') }}" class="nav_icon"> Crew</a></div>
        				<div class="inner_navigation_normal"><a href="/home/einstellungen"><img src="{{ asset('assets/images/settings-icon.png') }}" class="nav_icon"> Einstellungen</a></div>
        				<div class="inner_navigation_normal"><a href="{{ url('/logout') }}"><img src="{{ asset('assets/images/logout-icon.png') }}" class="nav_icon"> Abmelden</a></div>
			        </div>
                @endif
            </div>

            <div id="footer">
                <div class="inner_footer">
                    Support<br>
                    Entwicklerteam<br>
                    Datenschutzerkl&auml;rung
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="main_right">
            @yield('content')
        </div>
    </div>
    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
