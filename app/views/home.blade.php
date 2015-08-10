@extends('layouts.master')
@section('title')
	@parent Home
@stop
	@section('stylesheets')
	<? echo "<style>"; ?>
		
	<? echo "</style>"; ?>
	@parent
@stop

@section('content')

	<section id="rwd-wrapper">
		<div id="title-wrapper">
			<h1>
				Welcome <span>Earthlings</span>
			</h1>
			<img class="welcome-logo" src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x">
		</div>

		<div class="links">
			<a href="/menu">
				<img src="/img/icon-menu.png" srcset="/img/icon-menu.png 1x, /img/icon-menu@2x.png 2x">
				<span>
					<img src="/img/icon-hover.png" alt="">
					MENU
				</span>
			</a>
			<a href="/contact">
				<img src="/img/icon-contact.png" srcset="/img/icon-contact.png 1x, /img/icon-contact@2x.png 2x">
				<span>
					<img src="/img/icon-hover.png" alt="">
					CONTACT
				</span>
			</a>
			<a href="/grocery">
				<img src="/img/icon-grocery.png" srcset="/img/icon-grocery.png 1x, /img/icon-grocery@2x.png 2x">
				<span>
					<img src="/img/icon-hover.png" alt="">
					GROCERY
				</span>
			</a>
		</div>

	</section>
	
@stop

@section('scripts')
	@parent
@stop