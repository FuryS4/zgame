@extends('layouts.master')

@section('includings')
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@stop

@section('charinfo')
<div class="inner_charinfo">
	Herzlich Willkommen,</b><br><br>
	
	<img src="{{ asset('assets/images/zeni-icon.png') }}" class="inner_charinfo_icon"><b> Zeni:</b> 10.000 <i>Z</i><br>
	<img src="{{ asset('assets/images/exp-icon.png') }}" class="inner_charinfo_icon"><b> Erfahrung:</b> 0/500<br>
	<img src="{{ asset('assets/images/stufe-icon.png') }}" class="inner_charinfo_icon"><b> Stufe:</b> 1<br>
	<img src="{{ asset('assets/images/stufe-icon.png') }}" class="inner_charinfo_icon"><b> Power Lv.:</b> 9000<br>
	<img src="{{ asset('assets/images/stufe-icon.png') }}" class="inner_charinfo_icon"><b> Standort:</b> T&uuml;rkiye
</div>
@stop

@section('content')
<div id="header">
	<div class="inner_header">
	</div>
</div>

<div id="content">
	<div class="inner_content">
		Herzlich Willkommen, </b>.<br><br>
		
			<div id="dailyquest">
				<div class="title"><img src="{{ asset('assets/images/db_ball.png') }}" class="ball"><b>Tagesaufgabe</b><br></div>
					<div class="inner_dailyquest">
						<div class="progress">
							<div class="progress-bar" style="width:80%">
								80%
							</div>
						</div>
						<img src="{{ asset('assets/images/info-icon.png') }}" height="2%" align="top"> Finden Sie <b>Sergej Dukart</b> auf dem Planeten <b>Namek</b>.<br>
						<b>Belohnung:</b> 1x Dildo.
					</div>
			</div>
		
	</div>
</div>
@endsection
