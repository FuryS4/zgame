@extends('layouts.master')

@section('includings')
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/reg.css') }}">
@stop

@section('navigation')
	<div class="inner_navigation">
		<div class="inner_navigation_highlight"><a href="/home"><img src="{{ asset('assets/images/home-icon.png') }}" class="nav_icon"> Zur&uuml;ck zur Startseite</a></div>
	</div>
@stop

@section('content')
<div id="header">
    <div class="inner_header">
	
    </div>
</div>

<div id="content">
    <div class="inner_content">
        <div id="register_content">
            <img src="{{ asset('assets/images/logo.png') }}">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input type="text" class="textbox" name="name" placeholder="Benutzername" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input type="email" class="textbox" name="email" placeholder="E-Mail Adresse" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input type="password" class="textbox" name="password" placeholder="Passwort">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                <input type="password" class="textbox" name="password_confirmation" placeholder="Passwort wiederholen" >

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <button type="submit" class="btn btn-primary button">
                            <i class="fa fa-btn fa-user"></i>Registrieren
                        </button>
                    </form>
    </div>
    </div>
</div>
@endsection
