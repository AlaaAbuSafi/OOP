<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Search | GoExplore! Travel Website Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="assets/css/imports.css" media="screen">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
		
	</head>

	<body class="search">

		<div id="top"></div>

		<!-- Header -->
		<?php 
		require_once 'layouts/header.php';
		 ?>

		<!-- Hero Section -->
		<section class="hero small-hero" style="background-image:url('assets/images/board.jpg');">
			<div class="bg-overlay">
				<div class="container">
					<div class="intro-wrap">
						<h1 class="intro-title">Search Results for <em>keyword</em></h1>
					</div>
				</div>
			</div>
		</section>

		<!-- Main Content -->
		<section class="main container">
			<div class="row">

				<h3 class="hidden">Search Results</h3>

				<div class="col-sm-12 col-md-8">

					<div class="row">
						<div class="col-sm-12 home-search-field">
							<form class="big-search" role="search" method="get" action="search.html">
								<input name="s" placeholder="Search..." value="" type="text">
								<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</div>
					</div>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Search Reslut</a></h3>
						</header>
						<div class="entry-summary">
							<p>You know what you said about the structures becoming shackles. You were right and I can’t take it, the injustice. I mean, no one ever’s gonna know who saved the entire city. Gotham’s been good to our family, but the city’s been suffering. People less fortunate than us have been enduring very hard times. So we built a new, cheap, &hellip;</p>
						</div>
						<footer class="entry-meta">
							<ul class="hierarchy">
								<li class="symbol no-arrow"><i class="fa fa-map-marker"></i></li>
								<li><a href="#">Include</a></li>
								<li><a href="#">Path</a></li>
								<li><a href="#">Information</a></li>
							</ul>
						</footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Unusual Places to Consider Visiting</a></h3>
						</header>
						<div class="entry-summary">
							<p>Once you have arrived there will be plenty to keep you busy, but depending on the time of year, here are a few ways you can keep the party going. See the activities, entertainment and trips and you’ll never want to come home! It’s a worry free event holiday. All you need to do is tell us where you want &hellip;</p>
						</div>
						<footer class="entry-meta">
							<ul class="hierarchy">
								<li class="symbol no-arrow"><i class="fa fa-map-marker"></i></li>
								<li><a href="#">Finland</a></li>
								<li><a href="#">Helsinki</a></li>
							</ul>
						</footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Travel Resources</a></h3>
						</header>
						<div class="entry-summary">
							<p>Since opening, this mall has revolutionized shopping and become a leader in retail, entertainment and attractions. One of the top destinations in the country as well as one of the most recognizable brands. Earning a national reputation for entertaining guests &hellip;</p>
						</div>
						<footer class="entry-meta"></footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Living the Travel Lifestyle</a></h3>
						</header>
						<div class="entry-summary">
							<p>You’re a good guy, mon frere. That means brother in French. I don’t know how I know that. I took four years of Spanish. I figured out a way to make money while I’m working! What’s gotten into you? Have you been eating cheese? Hahahahah! Turns out he ended up getting too friendly with the teddy bear. Cinque Terre, Italy &hellip;</p>
						</div>
						<footer class="entry-meta"></footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Example Search Reslut</a></h3>
						</header>
						<div class="entry-summary">
							<p>Quick Tips Banks – Open Monday to Friday 9am to 2pm. Some banks are closed for lunch. Emergencies – For police, dial a local phone number; for ambulance call a hospital. Internet Access – Wifi is standard in most hotels and free in many coffee shops. Mail – Buy stamps at the Post Office. Convenient post offices are located all &hellip;</p>
						</div>
						<footer class="entry-meta">
							<ul class="hierarchy">
								<li class="symbol no-arrow"><i class="fa fa-map-marker"></i></li>
								<li><a href="#">United States</a></li>
								<li><a href="#">Arizona</a></li>
								<li><a href="#">Phoenix</a></li>
							</ul>
						</footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Choosing Your Next Vacation Destination</a></h3>
						</header>
						<div class="entry-summary">
							<p>You know what you said about the structures becoming shackles. You were right and I can’t take it, the injustice. I mean, no one ever’s gonna know who saved the entire city. Gotham’s been good to our family, but the city’s been suffering. People less fortunate than us have been enduring very hard times. So we built a new, cheap, &hellip;</p>
						</div>
						<footer class="entry-meta"></footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Travel Resources</a></h3>
						</header>
						<div class="entry-summary">
							<p>Once you have arrived there will be plenty to keep you busy, but depending on the time of year, here are a few ways you can keep the party going. See the activities, entertainment and trips and you’ll never want to come home! It’s a worry free event holiday. All you need to do is tell us where you want &hellip;</p>
						</div>
						<footer class="entry-meta"></footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Unusual Places to Consider Visiting</a></h3>
						</header>
						<div class="entry-summary">
							<p>Since opening, this mall has revolutionized shopping and become a leader in retail, entertainment and attractions. One of the top destinations in the country as well as one of the most recognizable brands. Earning a national reputation for entertaining guests &hellip;</p>
						</div>
						<footer class="entry-meta">
							<ul class="hierarchy">
								<li class="symbol no-arrow"><i class="fa fa-map-marker"></i></li>
								<li><a href="#">Europe</a></li>
								<li><a href="#">Italy</a></li>
								<li><a href="#">Rome</a></li>
							</ul>
						</footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Living the Travel Lifestyle</a></h3>
						</header>
						<div class="entry-summary">
							<p>You’re a good guy, mon frere. That means brother in French. I don’t know how I know that. I took four years of Spanish. I figured out a way to make money while I’m working! What’s gotten into you? Have you been eating cheese? Hahahahah! Turns out he ended up getting too friendly with the teddy bear. Cinque Terre, Italy &hellip;</p>
						</div>
						<footer class="entry-meta"></footer>
					</article>

					<article class="search-result">
						<header class="search-header">
							<h3 class="search-title"><a href="#">Travel Resources</a></h3>
						</header>
						<div class="entry-summary">
							<p>Quick Tips Banks – Open Monday to Friday 9am to 2pm. Some banks are closed for lunch. Emergencies – For police, dial a local phone number; for ambulance call a hospital. Internet Access – Wifi is standard in most hotels and free in many coffee shops. Mail – Buy stamps at the Post Office. Convenient post offices are located all &hellip;</p>
						</div>
						<footer class="entry-meta">
							<ul class="hierarchy">
								<li class="symbol no-arrow"><i class="fa fa-map-marker"></i></li>
								<li><a href="#">Europe</a></li>
							</ul>
						</footer>
					</article>

					<div class="paging clearfix">
						<ul class="pagination">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next-post"><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>

			</div>
			<div class="col-sm-12 col-md-4 col-lg-3 col-lg-offset-1">
				<div class="sidebar-padder">

					<aside class="widget widget_nav_menu">
						<h3 class="widget-title">Top Destinations</h3>
						<div class="menu-top-destinations-container">
							<ul id="menu-top-destinations" class="menu">
								<li class="menu-item"><a href="#">London, England</a></li>
								<li class="menu-item"><a href="#">Sydney, Australia</a></li>
								<li class="menu-item"><a href="#">Chicago, USA</a></li>
								<li class="menu-item"><a href="#">San Francisco, USA</a></li>
								<li class="menu-item"><a href="#">Toronto, Canada</a></li>
								<li class="menu-item"><a href="#">Buenos Aires, Argentina</a></li>
								<li class="menu-item"><a href="#">Queenstown, New Zealand</a></li>
								<li class="menu-item"><a href="#">Santorini, Greece</a></li>
							</ul>
						</div>
					</aside>

					<aside id="categories-3" class="widget widget_categories">
						<h3 class="widget-title">Topics</h3>
							<ul>
								<li class="cat-item">
									<a href="#">Destinations</a>
									<ul class="children">
										<li class="cat-item"><a href="#">Europe</a></li>
										<li class="cat-item"><a href="#">North America</a></li>
										<li class="cat-item"><a href="#">Oceania</a></li>
										<li class="cat-item"><a href="#">South America</a></li>
									</ul>
								</li>
								<li class="cat-item"><a href="">Family Travel</a></li>
								<li class="cat-item"><a href="#">Travel News</a></li>
								<li class="cat-item"><a href="#">Travel Planning</a></li>
								<li class="cat-item"><a href="#">Travel Tips</a></li>
							</ul>
						</aside>
					</div>

				</div>
			</div>
		</section>

		<!-- Contact Us -->
		<?php 
		require_once 'layouts/contact.php';
		 ?>

        <!-- Footer -->
		<?php 
		require_once 'layouts/footer.php';
		 ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/custom.js"></script>
	</body>
</html>