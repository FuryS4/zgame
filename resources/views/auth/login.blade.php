@extends('layouts.master')

@section('includings')
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@stop

@section('charinfo')
    <div class="inner_charinfo">
            <p>
                    <form method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="textbox" placeholder="E-Mail Adresse" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control textbox" placeholder="Passwort" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Login merken
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary button">
                            <i class="fa fa-btn fa-sign-in"></i>Login
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Passwort vergessen?</a><br>

                        <a href="{{ url('/register') }}">Noch nicht registriert?</a><br>
                    </form>
            </p>
            
    </div>
@endsection

@section('content')
    <div id="header">
        <div class="inner_header">

        </div>
    </div>
    <div id="content">
        <div class="inner_content">
            Herzlich Willkommen, auf <b>ZGAME.de</b><br>
            Du m&ouml;chtest ein Abenteuer in der Welt von Browsergame.de erleben und mit deinen Freunden
            eine atemberaubende Reise bestreiten?<br><br>

            Dann registriere dich jetzt und mit etwas Gl&uuml;ck erh&auml;st du auch einen<br>
            Beta-Zugang um so fr&uuml;h wie m&ouml;glich mit dem Abenteuer zu beginnen!<br>
        </div>
    </div>
@stop
