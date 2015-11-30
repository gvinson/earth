@extends('layouts.master')
@section('title')
	@parent Menu
@stop
	@section('stylesheets')
	<? echo "<style>"; ?>
		@include('menu-criticalcss')
	<? echo "</style>"; ?>
	@parent
@stop

@section('content')
	
	<section id="rwd-wrapper">
		<h1>TASTY TREATS</h1>
		<img class="underline" src="/img/underline.svg" alt="">

		<h2 class="menu-title breakfast">
			<img src="/img/icon-breakfast.png" alt="Breakfast">
			BREAKFAST
		</h2>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes breakfast">
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
				<ul class="menu-dishes breakfast">
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
				<p>Toast (honey whole wheat, german rye, daily special) 1.25, Side of organic potatoes 2.50, Side of organic Jam 0.50, One local egg or tofu 1.99</p>
			</div>
		</div> <? # End Breakfast ?>


		<h2 class="menu-title quiche">
			<img src="/img/icon-soup.png" alt="Quiche and Soup">
			QUICHE &amp; SOUP
		</h2>
		<p class="subtitle">
			in our homemade whole wheat crust. Prepared with local free range eggs and our bakers choice of cheeses, veggies and other special ingredients.
		</p>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes quiche">
					<li>
						<span class="dish">
							Quiche Solo
						</span>
						<span class="dish-details">
							a new quiche baked daily 5.99
						</span>
					</li>
					<li>
						<span class="dish">
							Quiche lunch 
						</span>
						<span class="dish-details">
							small side salad and a cup of veggie chili or soup of the day 8.99
						</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes quiche">
					<li>
						<span class="dish">
							Soup of the day
						</span>
						<span class="dish-details">
							changes daily based on seasonal veggies Cup 4.50 Bowl 6.50
						</span>
					</li>
					<li>
						<span class="dish">
							Half sandwich and soup
						</span>
						<span class="dish-details">
							cup of veggie chili or soup of the day served with any half sandwich 7.99
						</span>
					</li>
				</ul>
			</div>
		</div> <? # End Quiche ?>

		<br>

		<h2 class="menu-title nachos">
			<img src="/img/menu/nachos.png">
			NACHOS
		</h2>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes nachos">
					<li style="margin-bottom: 0;">
						<span class="dish" style="width: 64%;">
							Organic blue corn tortillas chips and cheese
						</span>
						<span class="dish-details" style="width: 16%;text-align: right;">
							4.99
						</span>
					</li>
				</ul>
				<hr>
				<p>Add chili 1.99, add jalapenos 0.75, add sour cream 0.99, add avocado 0.99, add onions 0.25, add salsa 0.99, add mixed greens 0.75</p>
			</div>
			<div class="col-8">
				<ul class="menu-dishes nachos">
					<li>
						<span class="dish">
							Loaded
						</span>
						<span class="dish-details">
							with everything 9.99
						</span>
					</li>
					<li>
						<span class="dish">
							Tempeh tacos
						</span>
						<span class="dish-details">
							tempeh, farmers cheese, mixed greens, tomatoes, onions and carrots<br>
							7.99
						</span>
					</li>
				</ul>
			</div>
		</div> <? # End Nachos ?>



		<h2 class="menu-title salads">
			<img src="/img/menu/salad.png">
			SALADS
		</h2>
		<p class="subtitle">All served on organic mixed greens and with one side of dressing vegan ranch, thousand island, honey mustard, toasted sesame ginger vinaigrette, roasted red pepper vinaigrette and olive oil and balsamic vinegar</p>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes salads">
					<li>
						<span class="dish">Small Earth Salad</span>
						<span class="dish-details">5.29</span>
						<span class="long-dish-details">organic mixed greens, carrots, sprouts and tomatoes</span>
					</li>
					<li>
						<span class="dish">Benevolent Earth Salad</span>
						<span class="dish-details">8.50</span>
						<span class="long-dish-details">organic mixed greens, carrots, black olives, sprouts, tomatoes, pumpkin seeds and cheese</span>
					</li>
					 <li>
						<span class="dish">Jim’s Salad </span>
						<span class="dish-details">8.99</span>
						<span class="long-dish-details">organic mixed greens, carrots, black olives, sprouts, tomatoes, portabello mushrooms, red onion, walnuts and cheese</span>
					</li>
					 <li>
						<span class="dish">Southwest Salad</span>
						<span class="dish-details">8.99</span>
						<span class="long-dish-details">veggie chili on a bed of organic mixed greens, avocado, tomatoes, red onions, carrots, cheese and tortilla chips</span>
					</li>
					<li>
						<span class="long-dish">Mediterranean Plate</span>
						<span class="dish-details">8.99</span>
						<span class="long-dish-details">homemade hummus on a bed of organic mixed greens served with tabouli, carrots and tortilla chips</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes salads">
					<li style="margin-bottom: 0;">
						<span class="dish">Create your own</span>
						<span class="dish-details">7.25</span>
						<span class="long-dish-details">Served on mixed greens</span>
					</li>
				</ul>
				<hr>
				<p>Pick one: Chili, Salsa, Portobello, Fool your mom, Taco Tempeh, Tuna Salad, Turkey
					each additional: 0.99<br>
				Pick one: Avocado, Hummus, Tabouli, Farmers Cheese, Swiss Cheese, Soy Cheese, Walnuts, Fakin, each additional: 0.75<br>
				Pick one: Red onion, Red pepper, Jalapenos, Olives, Tomatoes, Sprouts, Pumpkin Seeds, Carrot Shreds
				each additional: 0.30</p>
			</div>
		</div>

		 
		 
		
		<h2 class="menu-title sandwiches">
			<img src="/img/menu/sandwiches.png">
			Sandwiches
		</h2>
		<p class="subtitle">Served on honey whole wheat, german rye or gluten free bread choose a side carrots, tortilla chips or greens</p>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes sandwiches">
					<li><p class="column-title">COLD</p></li>
					<li>
						<span class="dish">Fool your mom </span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">homemade plant based chicken salad, mixed greens, tomatoes and stone ground mustard</span>
					</li>
					<li>
						<span class="dish">Veggie and cheese</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">farmers cheese, avocados, black olives, carrots, red onion, sprouts, tomatoes, mixed greens, vegan mayo and stone ground mustard</span>
					</li>
					 <li>
						<span class="dish">Turkey and cheese</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">antibiotic and hormone free turkey, farmers cheese, carrots, red onion, sprouts, tomatoes, mixed greens, vegan mayo and stone ground mustard</span>
					</li>
					 <li>
						<span class="dish">Tuna</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">wild caught tuna salad, mixed greens, tomatoes, red onion, vegan mayo and stone ground mustard</span>
					</li>
					<li>
						<span class="long-dish">Hummus</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">homemade hummus, carrots, black olives, red onions, sprouts, tomatoes, mixed greens, vegan mayo and stone ground mustard.</span>
					</li>
					<li>
						<span class="long-dish">Peanut butter and jelly/honey</span>
						<span class="dish-details">4.99</span>
						<span class="long-dish-details">Homemade organic peanut butter and either strawberry jelly, local honey or both</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes sandwiches">
					<li><p class="column-title">HOT</p></li>
					<li>
						<span class="dish">Grilled Cheese</span>
						<span class="dish-details">5.75</span>
						<span class="long-dish-details">delicious melted farmers cheese </span>
					</li>
					<li>
						<span class="dish">moonmaiden grilled cheese</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">farmers cheese, avocado, sprouts and tomatoes</span>
					</li>
					<li>
						<span class="dish">Flats</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">tempeh “facon”, lettuce, tomatoes, avocado and sprouts with vegan mayo and stone ground mustard</span>
					</li>
					<li>
						<span class="dish">Reuben</span>
						<span class="dish-details">7.99</span>
						<span class="long-dish-details">tempeh “facon”, swiss cheese, thousand island and sauerkraut on german rye</span>
					</li>
					<li>
						<span class="dish">The port</span>
						<span class="dish-details">8.25</span>
						<span class="long-dish-details"> Swiss cheese, mixed greens, tomatoes, onions, marinated portobello, vegan mayo and stone ground mustard </span>
					</li>
				</ul>
			</div>
		</div>

		<h2 class="menu-title sides">
			<img src="/img/menu/sides.png">
			Sides
		</h2>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes sides">
					<li>
						<span class="dish">Avocado</span>
						<span class="dish-details">0.99</span>
					</li>
					<li>
						<span class="dish">Jalapenos</span>
						<span class="dish-details">0.50</span>
					</li>
					<li>
						<span class="dish">Cheese (daiya, farmers, swiss)</span>
						<span class="dish-details">0.75</span>
					</li>
					<li>
						<span class="dish">Side of chili</span>
						<span class="dish-details">1.99</span>
					</li>
					<li>
						<span class="dish">Tuna/chicken salad</span>
						<span class="dish-details">1.99</span>
					</li>
					<li>
						<span class="dish">Turkey/facon</span>
						<span class="dish-details">1.49</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes sides">
					<li>
						<span class="dish">Salsa</span>
						<span class="dish-details">0.99</span>
					</li>
					<li>
						<span class="dish">Cup hummus/tabouli</span>
						<span class="dish-details">2.99</span>
					</li>
					<li>
						<span class="dish">Side hummus/tabouli</span>
						<span class="dish-details">0.99</span>
					</li>
					<li>
						<span class="dish">Dresssing</span>
						<span class="dish-details">0.75</span>
					</li>
					<li>
						<span class="dish">Extra chips/carrots</span>
						<span class="dish-details">0.50</span>
					</li>
				</ul>
			</div>
		</div>
		 
		<h2 class="menu-title smoothies">
			<img src="/img/menu/smoothiesjuices.png">
			Organic Smoothies & Juices
		</h2>
		<p class="subtitle">
			Made with 100%: Apple juice, orange juice, whole milk, skim milk, soy milk or almond milk (+0.99)
			<br>
			Add to any smoothie for 0.99: kale, spinach, peanut butter, flaxmeal, whey protein, hemp protein, spirulina
		</p>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes smoothies">
					<li>
						<span class="dish">Smoothies</span>
						<span class="dish-details">5.99 - 16 oz</span>
						<span class="long-dish-details">
							1. Blueberry + banana + PB<br>
							2. Blueberry + peach + strawberry<br>
							3. Banana + mango + peach<br>
							4. Banana + mango + blueberry<br>
							5. Banana + strawberry<br>
							6. Mango + strawberry<br>
							7. Blueberry + mango<br>
							8. Banana + cocoa + PB<br>
							9. Banana + Kale
						</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes smoothies">
					<li>
						<span class="dish">Juice</span>
						<span class="dish-details">
							3.99 - 8 oz<br>
							5.99 - 16 oz
						</span>
						<span class="long-dish-details">
							1. Carrot<br>
							2. Carrot + ginger + orange <br>
							3. Apple + orange + pear<br>
							4. Beet + carrot + celery + garlic + ginger<br>
							5. Beet + carrot + ginger + lemon<br>
							6. Apple + cabbage + carrot + spinach<br>
							7. Cucumber + lemon + ginger<br>
							8. Orange
						</span>
					</li>
					<li>
						<span class="dish">Dragon Slayer</span>
						<span class="dish-details">2.99</span>
						<span class="long-dish-details">
							Garlic, lemon, ginger and habanero powder
						</span>
					</li>
					<li>
						<span class="dish">Wheatgrass</span>
						<span class="dish-details">
							2.99 - single<br>
							5.50 - double
						</span>
					</li>
				</ul>
			</div>
		</div>


	
		<h2 class="menu-title coffee">
			<img src="/img/menu/coffee.png">
			Coffee & Tea
		</h2>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes coffee">
					<li>
						<span class="dish">Cold brew</span>
						<span class="dish-details">3.99</span>
					</li>
					<li>
						<span class="dish">Iced Chai</span>
						<span class="dish-details">3.99</span>
					</li>
					<li>
						<span class="dish">Drip Coffee</span>
						<span class="dish-details">2.75</span>
					</li>
					<li>
						<span class="dish">Shot of Espresso</span>
						<span class="dish-details">2.50</span>
					</li>
					<li>
						<span class="dish">Latte</span>
						<span class="dish-details">
							3.99 - 8 oz<br>
							4.50 - 16 oz
						</span>
					</li>
					<li>
						<span class="dish">Cappuccino</span>
						<span class="dish-details">
							3.99 - 8 oz<br>
							4.50 - 16 oz
						</span>
					</li>
					<li>
						<span class="dish">Breve</span>
						<span class="dish-details">
							4.50 - 8 oz<br>
							4.99 - 16 oz
						</span>
					</li>
				</ul>
			</div>
			<div class="col-8">
				<ul class="menu-dishes coffee">
					<li>
						<span class="dish">Chai Latte</span>
						<span class="dish-details">
							3.99 - 8 oz<br>
							4.50 - 16 oz
						</span>
					</li>
					<li>
						<span class="dish">Dirty Chai</span>
						<span class="dish-details">add 2.50</span>
					</li>
					<li>
						<span class="dish">Shot in the dark</span>
						<span class="dish-details">3.99</span>
					</li>
					<li>
						<span class="dish">Mate Latte</span>
						<span class="dish-details">
							3.99 - 8 oz<br>
							4.50 - 16 oz
						</span>
					</li>
					<li>
						<span class="dish">Hot Tea</span>
						<span class="dish-details">2.25</span>
					</li>
					<li>
						<span class="dish">Milk</span>
						<span class="dish-details">2.50</span>
					</li>
				</ul>
			</div>
		</div>


		
		<h2 class="menu-title bakedgoods">
			<img src="/img/menu/bakedgoods.png">
			Baked Goods
		</h2>
		<div class="grid">
			<div class="col-8">
				<ul class="menu-dishes bakedgoods">
					<li>
						<span class="dish">Cookies</span>
						<span class="dish-details">2.25</span>
					</li>
					<li>
						<span class="dish">Scones</span>
						<span class="dish-details">2.75</span>
					</li>
					<li>
						<span class="dish">Cake & Pie</span>
						<span class="dish-details">3.75 per slice</span>
					</li>
				</ul>
			</div>
		</div>

		<p style="text-align:center;">*To go orders - the cost of the container will be passed on to the customer</p>


	</section>
	
@stop

@section('scripts')
	@parent
@stop