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
	
	<section id="rwd-wrapper">
		<h1>TASTY TREATS</h1>
		<img class="underline" src="/img/underline.svg" alt="">

		<h2 class="menu-title purple">
			<img src="/img/icon-breakfast.png" srcset="/img/icon-breakfast.png 1x, /img/icon-breakfast@2x.png 2x" alt="Breakfast">
			BREAKFAST
		</h2>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes purple" style="float:left;">
					<li>
						<span class="dish">
							Breakfast Tacos
						</span>
						<span class="dish-details">
							with tofu or eggs  7.99
						</span>
					</li>
					<li>
						<span class="dish">
							Scramble Mountain
						</span>
						<span class="dish-details">
							with tofu or eggs 8.50
						</span>
					</li>
					<li>
						<span class="dish">
							Piece of Quiche
						</span>
						<span class="dish-details">
							quiche of the day  5.99
						</span>
					</li>
					<li>
						<span class="dish">
							Quiche Breakfast
						</span>
						<span class="dish-details">
							with potatoes  7.50
						</span>
					</li>
					<li>
						<span class="dish">
							Biscuits and gravy
						</span>
						<span class="dish-details">
							whole order  5.99
						</span>
					</li>
					<li>
						<span class="dish">
							Biscuits and gravy
						</span>
						<span class="dish-details">
							half order  3.99
						</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes purple" style="float:right;">
					<li>
						<span class="dish">
							Biscuits and jam
						</span>
						<span class="dish-details">
							organic strawberry jam 3.25
						</span>
					</li>
					<li>
						<span class="dish">
							Big sky granola
						</span>
						<span class="dish-details">
							with yogurt with fruit  5.99
						</span>
					</li>
				</ul>
				<hr>
				<p>Toast (honey whole wheat, german rye, daily special) 1.25, Side of organic potatoes $2.50, Side of organic Jam $0.50, One local egg or tofu $1.99</p>
			</div>
		</div>


	</section>
	
@stop

@section('scripts')
	@parent
@stop