@extends('layouts.master')
@section('title')
	@parent Contact
@stop
	@section('stylesheets')
	<? echo "<style>"; ?>
		
	<? echo "</style>"; ?>
	@parent
@stop

@section('content')
	
	<section id="rwd-wrapper">
		<h1>CONTACTING THE EARTH</h1>
		<img class="underline" src="/img/underline.svg" alt="">
		<br><br><br>
		<a href="#" style="display:block; text-align:center;">
			<img src="/img/map.jpg" alt="The Earth Map">
		</a>
		<br><br><br>

		<div class="grid">
			<div class="col-8">
				<img src="/img/icon-phone.png" srcset="/img/icon-phone.png 1x, /img/icon-phone@2x.png 2x" alt="Call us!">
				<p>405.364.3551</p>
				<br>
				<img src="/img/icon-world.png" srcset="/img/icon-world.png 1x, /img/icon-world@2x.png 2x" alt="Come see us!">
				<p>309 S Flood Ave, Norman, OK 73069</p>
				<br>
				<img src="/img/icon-open.png" srcset="/img/icon-open.png 1x, /img/icon-open@2x.png 2x" alt="Come see us!">
				<p>
				Store Hours<br>
				Mon - Fri  |  8am - 8pm<br>
				Sat  |  9am - 8pm<br>
				Sun  |  10am - 5pm
				</p>
			</div>
			<div class="col-8">
				<form action="#" method="post" id="contact-form">
					<input type="text" name="name" placeholder="NAME" required>
					<br>
					<input type="email" name="email" placeholder="EMAIL" required>
					<br>
					<textarea name="question" id="question" required placeholder="MESSAGE" cols="30" rows="10"></textarea>
				</form>
			</div>
		</div>
	</section>
	
@stop

@section('scripts')
	@parent
@stop