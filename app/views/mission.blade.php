@extends('layouts.master')
@section('title')
	@parent Mission
@stop
	@section('stylesheets')
	<? echo "<style>"; ?>
		
	<? echo "</style>"; ?>
	@parent
@stop

@section('content')
	
	<img src="/img/subpage-bg.png" class="mission-bg">

	<section id="rwd-wrapper">
		<h1>
			OUR MISSION
			<svg class="underline green"><use xlink:href="#underline" /></svg>
		</h1>
		<p class="mission-statement">
			Is to serve our community and our planet to the best of our ability 
			by offering clean food, minimal waste, and a home away from home for folks to gather while nourishing their bodies and souls.
		</p>
		<br><br>
		<div class="grid">
			<div class="col-4">
				<img src="/img/mission1.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission2.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission3.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission4.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission1.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission2.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission3.jpg" alt="Mission">
			</div>
			<div class="col-4">
				<img src="/img/mission4.jpg" alt="Mission">
			</div>
		</div>
	</section>
	
@stop

@section('scripts')
	@parent
@stop