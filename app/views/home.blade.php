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
	<section id="logo-name">
		<h1>
			Welcome <span>Earthlings</span>
		</h1>
		<img src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x">
	</section>

	<section class="links">
		<a href="/menu">
			<img src="/img/icon-menu.png" srcset="/img/icon-menu.png 1x, /img/icon-menu@2x.png 2x">
			<span>MENU</span>
		</a>
		<a href="/contact">
			<img src="/img/icon-contact.png" srcset="/img/icon-contact.png 1x, /img/icon-contact@2x.png 2x">
			<span>CONTACT</span>
		</a>
		<a href="/grocery">
			<img src="/img/icon-grocery.png" srcset="/img/icon-grocery.png 1x, /img/icon-grocery@2x.png 2x">
			<span>GROCERY</span>
		</a>

	</section>
@stop

@section('scripts')
	@parent
@stop