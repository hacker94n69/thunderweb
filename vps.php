<?php 
	require 'includes/config.php';
	$selectedLocation = isset($_GET['location']) ? $_GET['location'] : 'usa';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>THUNDER NODES</title>
	  <link rel="icon" href="assets/images/logo.webp" type="image/svg+xml">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
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
                    <h1>VPS PLAN</h2>
                    
                </div>
            </div>
        </div>
    </div>

	<!-- Plans -->
	<div class="plans mc-plans py-5">
		<div class="container">
			<div class="row mb-4">
				<div class="col-md-12">
					<div class="d-flex justify-content-end gap-2 ms-auto">
					</div>
				</div>
			</div>

			<div class="row" id="plansContainer">
			<div class="row" id="plansContainer">
    <?php 
    $minecraft_plans = [
        ['name' => 'Starter VPS', 'cpu' => '4 vCores', 'ram' => '16GB DDR4', 'storage' => '100GB NVMe SSD', 'price' => '900'],
        ['name' => 'Power VPS', 'cpu' => '6 vCores', 'ram' => '32GB DDR4', 'storage' => '210GB NVMe SSD', 'price' => '1500'],
        ['name' => 'Ultra VPS', 'cpu' => '9 vCores', 'ram' => '64GB DDR4', 'storage' => '310GB NVMe SSD', 'price' => '2500']
    ];

    foreach ($minecraft_plans as $plan) : ?>
        <div class="col-lg-4 col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h2><?= $plan['name'] ?></h2>
                    <ul>
                        <li> <?= $plan['cpu'] ?> </li>
                        <li> <?= $plan['ram'] ?> </li>
                        <li> <?= $plan['storage'] ?> </li>
                        <li> AMD epyc 7k62</li>
                        <li> NVMe SSD Storage </li>
                        <li> L3 DDoS Protection for Security</li>
                        <li> Full Root Access</li>
                        <li> Price: ₹<?= $plan['price'] ?>/m</li>
                    </ul>
                    <a href="paymnet.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

		</div>
	</div>

	<!-- Server Types -->
	<div class="servertype py-6">
		<div class="container">
			<div class="title text-center mb-5">
				<h4 class="mb-0">Server Types</h4>
				<p>Choose your Minecraft Plugin for server</p>
			</div>
			<div class="swiper mcTypes">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/bungeecord.png" alt="bungeecord" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/curse.png" alt="curse" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/fabric.png" alt="fabric" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/forge.png" alt="forge" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/ftb.png" alt="ftb" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/modrinth.png" alt="modrinth" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/papermc.png" alt="papermc" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/spigot.png" alt="spigot" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/sponge.png" alt="sponge" class="img-fluid mx-auto d-block">
					</div>
					<div class="swiper-slide">
						<img src="assets/images/minecraft/mods/tekkit.png" alt="tekkit" class="img-fluid mx-auto d-block">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Server Types -->
	

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
	<!-- End Panel -->

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
	<script src="assets/js/swiper-bundle.min.js"></script> 
	<script src="assets/js/blinker.js"></script>
	<script src="assets/js/minecraft.js"></script>
	<script src="assets/js/servermods.js"></script>
</body>
</html>