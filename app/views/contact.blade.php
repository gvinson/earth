@extends('layouts.master')
@section('title')
	@parent Contact
@stop
	@section('stylesheets')
	<? echo "<style>"; ?>
		@include('contact-criticalcss')
	<? echo "</style>"; ?>
	@parent
	<link rel="stylesheet" href="/js/vendor/js-webshim/minified/shims/styles/shim.css">
@stop

@section('content')
	
	<section id="rwd-wrapper">
		<h1>CONTACTING THE EARTH.</h1>
		<img class="underline" src="/img/underline.svg" alt="">
		<br><br><br>
		<a href="https://www.google.com/maps/place/309+S+Flood+Ave,+Norman,+OK+73069/@35.2155706,-97.4527882,17z/data=!3m1!4b1!4m2!3m1!1s0x87b269cda0e91c5d:0xf3d15bedd702bc55" target="_blank" style="display:block; text-align:center;">
			<img src="/img/map.jpg" alt="The Earth Map" style="width: 100%;">
		</a>
		<br><br><br>

		<div class="grid">
			<div class="col-8">
				<div class="vert-align">
					<div class="icon-wrapper">
						<img src="/img/icon-phone.png" srcset="/img/icon-phone.png 1x, /img/icon-phone@2x.png 2x" alt="Call us!">
					</div>
					<p>405.364.3551</p>
				</div>
				<div class="vert-align">
					<div class="icon-wrapper">
						<img src="/img/icon-world.png" srcset="/img/icon-world.png 1x, /img/icon-world@2x.png 2x" alt="Come see us!">
					</div>
					<p>309 S Flood Ave,<br>Norman, OK 73069</p>
				</div>
				<div class="vert-align">
					<div class="icon-wrapper">
						<img src="/img/icon-open.png" srcset="/img/icon-open.png 1x, /img/icon-open@2x.png 2x" alt="Come see us!">
					</div>
					<p>Store Hours<br>
					Mon - Fri  |  8am - 8pm<br>
					Sat  |  9am - 8pm<br>
					Sun  |  10am - 5pm
					</p>
				</div>
			</div>
			<div class="col-8">
				<form class="ajax" action="/contact" method="post" id="contact-form">
					<input type="text" name="honeypot" id="honeypot" style="position: absolute; left: -100000%;">
					<input type="text" name="name" placeholder="NAME" required>
					<br>
					<input type="email" name="email" placeholder="EMAIL" required>
					<br>
					<textarea name="question" id="question" required placeholder="MESSAGE" cols="30" rows="6"></textarea>
					<br>
					<input type="submit" value="SUBMIT">
				</form>
			</div>
		</div>
	</section>
	
@stop

@section('scripts')
	@parent
	<script src="/js/vendor/js-webshim/minified/polyfiller.js"></script>
@stop
