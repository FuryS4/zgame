@extends('layouts.master')

@section('includings')
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@stop

@section('topnavcontent')
    <form method="POST" action="/auth/login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="text" name="email" placeholder="E-Mail Adresse" class="textbox" />
        <input type="password" name="password" placeholder="Passwort" class="textbox" />
        <input type="submit" value="Einloggen" class="button" />
    </form>
    <p>
        Noch kein Account? <a href="register" style='color: #3f75bc;'>Registrieren!</a>
    </p>
@stop

@section('content')
    <div id="main_right">
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
        </div>
@stop

