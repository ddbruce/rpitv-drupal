<!doctype html>
<html>
<head>
	<title>Index</title>
	<?php echo file_get_contents('partials/head.html'); ?>
</head>
<body class="grey darken-4">
	<nav role="navigation" class="black">
		<div class="nav-wrapper container">
			<a href="#" class="brand-logo"><img src="resources/img/rpitv_logo.min.svg" alt="rpitv_logo" class=navbar-logo></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a class="waves-effect waves-light" href="productions">Productions</a></li>
				<li><a class="waves-effect waves-light" href="news-updates">News Updates</a></li>
				<li><a class="waves-effect waves-light" href="services">Services</a></li>
				<li><a class="waves-effect waves-light" href="about">About</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="productions">Productions</a></li>
				<li><a href="news-updates">News Updates</a></li>
				<li><a href="services">Services</a></li>
				<li><a href="about">About</a></li>
			</ul>
		</div>
	</nav>
	<div class="parallax-container">
		<div class="section no-pad-bot">
			<div class="row parallax-content center">
				<h1 class="header white-text">Big Red Freakout!</h1>
				<h5 class="header white-text">The 40th Annual - RPI vs. Quinnipiac</h5>
				<br>
				<a class="waves-effect btn-large red darken-4" href="/productions/1200-hockey-vs-quinnipiac-big-red-freakout">Watch live now!</a>
			</div>
		</div>
		<div class="parallax">
			<img src="http://rpitv.org/sys_i/original/1002.jpg" alt="brf_image">
		</div>
	</div>
	<div class="container section">
		<div class="row">
			<div class="col s12">
				<h4 class="white-text">Featured productions</h4>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6">
				<div class="card featured-production">
					<div class="card-image">
						<img src="http://rpitv.org/sys_i/wide/538.png">
						<span class="card-title">Sheer Idiocy - December 2016</span>
					</div>
					<div class="card-content">
						<p class="truncate">RPI's only improv troupe performs in Mother's for the annual winter show.</p>
					</div>
					<div class="card-action">
						<a href="/productions/1191-sheer-idiocy-december-2016"><i class="material-icons">videocam</i> Watch live</a>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card featured-production">
					<div class="card-image">
						<img src="http://rpitv.org/sys_i/wide/822.jpg">
						<span class="card-title">ACHA Hockey vs. UMass Amherst</span>
					</div>
					<div class="card-content">
						<p class=truncate>The ACHA-league RPI Engineers take on the UMass Amherst something-or-others at the Houston Field House.</p>
					</div>
					<div class="card-action">
						<a class="on-demand" href="/productions/1190-acha-hockey-vs-umass-amherst">Watch on-demand</a>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card featured-production">
					<div class="card-image">
						<img src="http://rpitv.org/sys_i/original/1007.jpg">
						<span class="card-title">Women's Hockey vs. Quinnipiac</span>
					</div>
					<div class="card-content">
						<p class=truncate>The ACHA-league RPI Engineers take on the UMass Amherst something-or-others at the Houston Field House.</p>
					</div>
					<div class="card-action">
						<a class="on-demand" href="/productions/1190-acha-hockey-vs-umass-amherst">Watch on-demand</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo file_get_contents('partials/footer.html'); ?>
</div>
<?php echo file_get_contents('partials/bottom_scripts.html'); ?>
</body>
</html>
