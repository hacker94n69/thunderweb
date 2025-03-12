<?php require 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Terraria | DinoNode</title>
	<link rel="icon" href="assets/images/logo.svg" type="image/svg+xml">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<style>.header{background:url("<?php echo $background; ?>") no-repeat center center;}</style>
	<!-- SEO -->
    <meta name="theme-color" content="#141627">
    <meta name="author" content="Nikola Radišić [rade023.com]">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="" rel="canonical">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="en-US">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:alt" content="">
</head>
<body>
	
	<!-- Navbar -->
	<?php require 'includes/navbar.php';?>

	<!-- Header -->
	<div class="header">
        <div class="container h-100">
            <div class="row d-flex justify-content-start align-items-center h-100">
                <div class="col-lg-12 mt-5">
                    <h1><?php echo $title; ?></h2>
                    <p><?php echo $paragraph; ?></p>
                </div>
            </div>
        </div>
    </div>

	<!-- Plans -->
	<div class="plans py-5">
		<div class="container">
			<div class="row d-flex justify-content-end mb-5">
				<div class="col-lg-5">
					<ul class="nav nav-pills nav-fill" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="showUSA" data-bs-toggle="tab" data-bs-target="#nav-usa" type="button" role="tab" aria-controls="nav-usa" aria-selected="false">United States</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="showGermany" data-bs-toggle="tab" data-bs-target="#nav-germany" type="button" role="tab" aria-controls="nav-germany" aria-selected="false">Germany</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="showFrance" data-bs-toggle="tab" data-bs-target="#nav-france" type="button" role="tab" aria-controls="nav-france" aria-selected="false">France</button>
						</li>
					</ul>
				</div>
			</div>
		
			<div class="tab-content">
				<div class="tab-pane fade" id="nav-usa" role="tabpanel" aria-labelledby="showUSA">
					<!-- Plans for USA -->
					<div class="container">
						<div class="row">
							<!-- First Plan -->
							<div class="col-lg-4 col-md-6">
								<div class="card mb-4 text-center">
									<div class="card-body">
										<div class="card-icon mb-4">
											<?= $terraria_icon ?>
										</div>
										<h2 class="plan-title mb-1">USA Plan 1</h2>
										<h4 class="plan-desc mb-4">12 Slots</h4>
										<ul class="list-unstyled mb-4">
											<li><?= $check_icon ?> 16GB NVMe</li>
											<li><?= $check_icon ?> 4GB RAM</li>
											<li><?= $check_icon ?> Support</li>
										</ul>
										<h2 class="price mb-4">&dollar;2.4 <span>/ monthly</span></h2>
										<a href="" class="btn btn-primary">Order Now</a>
									</div>
								</div>
							</div>
							<!-- Second Plan -->
							<div class="col-lg-4 col-md-6">
								<div class="card mb-4 text-center">
									<div class="card-body">
										<div class="card-icon mb-4">
											<?= $terraria_icon ?>
										</div>
										<h2 class="plan-title mb-1">USA Plan 2</h2>
										<h4 class="plan-desc mb-4">16 Slots</h4>
										<ul class="list-unstyled mb-4">
											<li><?= $check_icon ?> 24GB NVMe</li>
											<li><?= $check_icon ?> 12GB RAM</li>
											<li><?= $check_icon ?> Support</li>
										</ul>
										<h2 class="price mb-4">&dollar;2.4 <span>/ monthly</span></h2>
										<a href="" class="btn btn-primary">Order Now</a>
									</div>
								</div>
							</div>
							<!-- Third Plan -->
							<div class="col-lg-4 col-md-6">
								<div class="card mb-4 text-center">
									<div class="card-body">
										<div class="card-icon mb-4">
											<?= $terraria_icon ?>
										</div>
										<h2 class="plan-title mb-1">USA Plan 3</h2>
										<h4 class="plan-desc mb-4">32 Slots</h4>
										<ul class="list-unstyled mb-4">
											<li><?= $check_icon ?> 32GB NVMe</li>
											<li><?= $check_icon ?> 16GB RAM</li>
											<li><?= $check_icon ?> Support</li>
										</ul>
										<h2 class="price mb-4">&dollar;2.4 <span>/ monthly</span></h2>
										<a href="" class="btn btn-primary">Order Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-germany" role="tabpanel" aria-labelledby="showGermany">
					<!-- Plans for Germany -->
					<div class="container">
						<div class="row">
							<!-- First Plan -->
							<div class="col-lg-4 col-md-6">
								<div class="card mb-4 text-center">
									<div class="card-body">
										<div class="card-icon mb-4">
											<?= $terraria_icon ?>
										</div>
										<h2 class="plan-title mb-1">Germany Plan 1</h2>
										<h4 class="plan-desc mb-4">12 Slots</h4>
										<ul class="list-unstyled mb-4">
											<li><?= $check_icon ?> 16GB NVMe</li>
											<li><?= $check_icon ?> 4GB RAM</li>
											<li><?= $check_icon ?> Support</li>
										</ul>
										<h2 class="price mb-4">&dollar;2.4 <span>/ monthly</span></h2>
										<a href="" class="btn btn-primary">Order Now</a>
									</div>
								</div>
							</div>
							<!-- Second Plan -->
							<div class="col-lg-4 col-md-6">
								<div class="card mb-4 text-center">
									<div class="card-body">
										<div class="card-icon mb-4">
											<?= $terraria_icon ?>
										</div>
										<h2 class="plan-title mb-1">Germany Plan 2</h2>
										<h4 class="plan-desc mb-4">16 Slots</h4>
										<ul class="list-unstyled mb-4">
											<li><?= $check_icon ?> 24GB NVMe</li>
											<li><?= $check_icon ?> 12GB RAM</li>
											<li><?= $check_icon ?> Support</li>
										</ul>
										<h2 class="price mb-4">&dollar;2.4 <span>/ monthly</span></h2>
										<a href="" class="btn btn-primary">Order Now</a>
									</div>
								</div>
							</div>
							<!-- Third Plan -->
							<div class="col-lg-4 col-md-6">
								<div class="card mb-4 text-center">
									<div class="card-body">
										<div class="card-icon mb-4">
											<?= $terraria_icon ?>
										</div>
										<h2 class="plan-title mb-1">Germany Plan 3</h2>
										<h4 class="plan-desc mb-4">32 Slots</h4>
										<ul class="list-unstyled mb-4">
											<li><?= $check_icon ?> 32GB NVMe</li>
											<li><?= $check_icon ?> 16GB RAM</li>
											<li><?= $check_icon ?> Support</li>
										</ul>
										<h2 class="price mb-4">&dollar;2.4 <span>/ monthly</span></h2>
										<a href="" class="btn btn-primary">Order Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-france" role="tabpanel" aria-labelledby="showFrance">
					<!-- Plans for France -->
					<div class="container">
						<div class="row">
							<div class="card px-4 py-4 text-center">
								<p class="mb-0">We currently do not have this location</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Panel -->
	<div class="panel py-6">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-md-7 d-flex align-items-center">
					<div class="panel_content">
						<h2>Powerful Control Panel</h2>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut vero molestias explicabo, id maxime laboriosam, ab, rem, debitis est voluptatibus facilis? Hic aperiam dolorum ab tempora corrupti, beatae architecto voluptatem!</p>
						<ul>
							<li><?= $check_icon ?> Easy To Use</li>
							<li><?= $check_icon ?> Fast And Secured big anti ddos </li>
							<li><?= $check_icon ?> Pre installed Plugins and auto setup</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="laptop px-4">
						<div class="laptop__screen">
							<div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="img-fluid rounded-3" src="assets/images/panel_game/picture.svg" width="620" height="400" alt="Dashboard">
									</div>
									<div class="carousel-item">
										<img class="img-fluid rounded-3" src="assets/images/panel_game/picture.svg" width="620" height="400" alt="Plugins">
									</div>
									<div class="carousel-item ">
										<img class="img-fluid rounded-3" src="assets/images/panel_game/picture.svg" width="620" height="400" alt="Mods">
									</div>
								</div>
							</div>
						</div>
						<div class="laptop__bottom">
							<div class="laptop__under"></div>
						</div>
						<div class="laptop__shadow"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Panel -->

	<!-- DDoS -->
	<div class="ddos py-6">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 d-flex justify-content-center">
					<?= $ddos_icon ?>
				</div>
				<div class="col-lg-6">
					<div class="ddos_content">
						<h2>Anti-DDoS</h2>
						<p>Our premium dedicated game servers are protected by always-on 12Tbps DDoS protection highly suited to games such as Minecraft, RUST, ARK, CS:GO, FiveM and others.</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. In qui ipsa vel saepe repellat mollitia natus fugit repudiandae assumenda voluptatum consectetur nam nemo ducimus temporibus voluptatem, error molestias amet est?</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End DDoS -->

	<!-- Footer -->
	<?php require 'includes/footer.php';?>
	<script src="assets/js/blinker.js"></script>
	<script src="assets/js/tabSelector.js"></script>
</body>
</html>