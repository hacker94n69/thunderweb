<?php require'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>THUNDER NODES</title>
	<link rel="icon" href="assets/images/logo.webp" type="image/svg+xml">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
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

	<!-- Hero -->
    <div class="hero_section pb-5">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
				<!-- Hero Slider -->
                <?php foreach ($swiper_slides as $swiper_slide) : ?>
                <div class="swiper-slide" style="background: url('<?= $swiper_slide['image'] ?>');">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-start align-items-center h-100">
                            <div class="col-lg-8 d-flex">
                                <div class="hero_content">
                                    <h2 class="mb-0">THUNDER NODES</h2>
									<div class="row">
										<div class="col-lg-7">
											<p class="mb-4"><b>"THUNDER NODES</b> - The cheapest and best hosting solution for gamers. Fast, reliable, and affordable game servers with top-notch performance. Start your server today!"</p>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
				<!-- End Hero Slider -->
            </div>
        </div>
        <div class="container-fluid">
			<!-- Hero Dots -->

			<!-- End Hero Dots-->
        </div>
    </div>
    <!-- End Hero -->

<!-- Include AOS CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    /* Animated Border */
    @keyframes glowing-border {
        0% { border-color: #ff4a4a; }
        25% { border-color: #ffcc00; }
        50% { border-color: #00ff99; }
        75% { border-color: #0099ff; }
        100% { border-color: #ff4a4a; }
    }

    .features-box {
        position: relative;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        border: 3px solid transparent;
    }

    .features-box:hover {
        transform: scale(1.05);
        box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.3);
        border: 3px solid;
        animation: glowing-border 2s infinite linear;
    }

    /* Floating Animation */
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .features-box:hover h2,
    .features-box:hover p {
        animation: floating 2s infinite ease-in-out;
    }
</style>

<!-- Features Section -->
<div class="features py-6">
    <div class="container">
        <div class="title text-center mb-5">
            <h4 class="mb-0 text-2xl font-bold text-white">🔥 The Features You Deserve 🔥</h4>
            <p class="text-gray-400">🚀 Enjoy powerful hosting with exclusive benefits.</p>
        </div>

        <div class="row flex flex-wrap justify-center">
            <?php foreach ($features_boxes as $feature_box) : ?>
                <div 
                    class="col-lg-4 col-md-6 mb-4"
                    data-aos="fade-up" 
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div class="features-box p-6 rounded-lg shadow-lg <?= $feature_box['box-color'] ?>">
                        <?= $feature_box['icon'] ?>
                        <h2 class="mb-2 text-xl font-semibold text-white"><?= $feature_box['title'] ?></h2>
                        <p class="text-gray-300"><?= $feature_box['paragraph'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Include AOS JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- manual code by demon king -->

	<!-- Game Selector -->
	<div class="game-selector position-relative py-6">
		<div class="container">
			<div class="title text-center mb-5">
				<h4 class="mb-0">PAID AREA</h4>
				<p>Check-out Plans and details</p>
			</div>
			<div id="services" class="step-container active">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Budget Server -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    
                    <div class="card-img">
                        <img src="assets/images/bs.png" class="card-img-top" alt="Budget Server">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">Budget Server</h4>
                        <p class="mb-0">Starting at <b>₹100</b></p>
                        <a href="budgetplan.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Premium Server -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="assets/images/ps.png" class="card-img-top" alt="Premium Server">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">Premium Server</h4>
                        <p class="mb-0">High Performance Servers</p>
                        <a href="premium.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Rent Server -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="assets/images/rs.png" class="card-img-top" alt="Rent Server">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">Rent Server</h4>
                        <p class="mb-0">Flexible Monthly Plans</p>
                        <a href="rent.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- VPS Plan -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="assets/images/vps.png" class="card-img-top" alt="VPS Plan">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">VPS Plan</h4>
                        <p class="mb-0">Starting at <b>₹900</b></p>
                        <a href="vps.php" class="btn btn-primary">View Plans</a>
                    </div>
                </div>
            </div>

            <!-- Hosting Plan -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="assets/images//host.png" class="card-img-top" alt="Hosting Plan">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">Hosting Plan</h4>
                        <p class="mb-0">Starting at <b>₹2500</b></p>
                        <a href="hosting.php" class="btn btn-primary">View Plans</a>
                    </div>
                </div>
            </div>

            <!-- VDS Plan -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="assets/images/vds.png" class="card-img-top" alt="VDS Plans">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">VDS Plans</h4>
                        <p class="mb-0">Starting at <b>₹3,799</b></p>
                        <a href="vds.php" class="btn btn-primary">View Plans</a>
                    </div>
                </div>
            </div>

            <!-- Domains -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="https://www.shutterstock.com/image-vector/internet-http-address-icon-isolated-600nw-414569608.jpg" class="card-img-top" alt="Domains">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">Domains</h4>
                        <p class="mb-0">Get Your Own .com, .net, .xyz</p>
                        <a href="domain.php" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- DDoS Protection -->
            <div class="swiper-slide">
                <div class="card mb-4">
                    <div class="card-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOuvhYdVconWo8q6oU6sO31YyPA5NJ1uZRKg&s" class="card-img-top" alt="DDoS Protection">
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0">DDoS Protection</h4>
                        <p class="mb-0">Starting at <b>₹800</b></p>
                        <a href="ddos.php" class="btn btn-primary">Protect Now</a>
                    </div>

							</div>
						</div>
					</div>
				</div>
				<div class="drag position-relative text-center">
					<svg class="moving-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M9.57139 3.14994C7.97372 3.14994 6.67856 4.42593 6.67856 5.99994C6.67856 7.57395 7.97372 8.84994 9.57139 8.84994V10.7499C6.90861 10.7499 4.75 8.62329 4.75 5.99994C4.75 3.37659 6.90861 1.24994 9.57139 1.24994C11.9039 1.24994 13.8496 2.88181 14.2963 5.04994H17.0583L16.2938 4.29669L17.6575 2.95319L20.75 5.99994L17.6575 9.04669L16.2938 7.70319L17.0583 6.94994H12.4642V5.99994C12.4642 4.42593 11.1691 3.14994 9.57139 3.14994Z" fill="#fff"/>
						<path d="M5.58308 14.1248C5.00675 13.5651 4.05584 13.6169 3.54767 14.2338C3.16062 14.7037 3.15005 15.3669 3.52163 15.848L3.53423 15.8643L7.79344 22.75H17.0995C18.5777 22.75 19.75 21.6183 19.75 20.2531V13.9824C19.75 13.4164 19.2614 12.9326 18.6267 12.9326H17.4108V14.4394H16.6031V13.0177C16.6031 12.8961 16.5812 12.78 16.541 12.6721C16.3905 12.2687 15.9777 11.9678 15.4798 11.9678L14.264 11.9698V13.9062H13.4563V12.053C13.4563 11.9314 13.4343 11.8153 13.3941 11.7074C13.2436 11.304 12.8309 11.0031 12.333 11.0031H11.1171V12.9415H10.3094V5.50806C10.3094 4.81329 9.74621 4.25006 9.05144 4.25006C8.35667 4.25006 7.79344 4.81329 7.79344 5.50806V16.4432L5.58308 14.1248Z" fill="#fff"/>
					</svg>
				</div>
			</div>
			<div id="location" class="step-container">
				<div class="row d-flex justify-content-center"></div>
				<div class="text-center">
					<button id="back" class="btn btn-primary">Back</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End Game Selector -->

	<!-- World Map -->
	<div class="map pt-5">
		<div class="container">
			<div class="title text-center mb-5">
				<h4 class="mb-0">Global low latency network</h4>
				<p>Chose one of our Location with low ping and fast download an network</p>
			</div>
			<div class="position-relative">
				<?= $world_map ?>
			</div>
			<div class="badge map_box germany">
				<img src="assets/images/country/germany.svg" alt="Germany"> Germany, Regensburg
			</div>
			<div class="badge map_box finland">
				<img src="assets/images/country/finland.svg" alt="Finland"> Finland, Helsinki
			</div>
			<div class="badge map_box usa">
				<img src="assets/images/country/unitedstates.svg" alt="USA"> United States, Los Angeles
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
										<img class="img-fluid rounded-3" src="assets/images/panel_game/pic.png" width="620" height="400" alt="Dashboard">
									</div>
									<div class="carousel-item">
										<img class="img-fluid rounded-3" src="assets/images/panel_game/pic.png" width="620" height="400" alt="Plugins">
									</div>
									<div class="carousel-item ">
										<img class="img-fluid rounded-3" src="assets/images/panel_game/pic.png" width="620" height="400" alt="Mods">
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

	<!-- Review -->
	<div class="review py-6">
		<div class="container">
			<div class="title text-center mb-5">
				<h4 class="mb-0">TrustPilot Reviews</h4>
				<p>You can post or see us customers reviews</p>
			</div>
			<div class="swiper reviewSwiper">
				<div class="swiper-wrapper">
					<!-- Testimonials Cards -->
					<?php
$testimonials = [
    [
        'name' => 'User 1',
        'title' => 'Solid Performance!',
        'description' => 'Thunder Nodes has been fantastic—fast, reliable, and very easy to use. Highly recommend!',
        'stars' => 5
    ],
    [
        'name' => 'User 2',
        'title' => 'Top-Notch Service!',
        'description' => 'Great hosting service with minimal downtime and excellent customer support. Thunder Nodes delivers!',
        'stars' => 5
    ],
    [
        'name' => 'User 3',
        'title' => 'Perfect for Growth!',
        'description' => 'Scalable, user-friendly, and fast. Thunder Nodes has everything you need for growing your business.',
        'stars' => 5
    ],
    [
        'name' => 'User 4',
        'title' => 'Impressive Speed!',
        'description' => 'I’m amazed by the speed and reliability. Thunder Nodes makes hosting simple and efficient.',
        'stars' => 5
    ],
    [
        'name' => 'User 5',
        'title' => 'Great Value for Money!',
        'description' => 'Affordable plans with excellent performance. Thunder Nodes is a great choice for any business.',
        'stars' => 4
    ]
];
?>


					<?php foreach ($testimonials as $client) : ?>
				  	<div class="swiper-slide">
						<div class="card">
					  		<div class="card-body">
								<h3><?= $client['title'] ?></h3>
								<p><?= $client['description'] ?></p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="stars">
										<?= generateStars($client['stars']) ?>
									</div>
									<p class="mb-0">
										<?= $user_icon ?>
										<?= $client['name'] ?>
									</p>
								</div>
					  		</div>
						</div>
				  	</div>
					<?php endforeach; ?>
					<!-- End Testimonials Cards -->
				</div>
			</div>
            <div class="reviews_footer text-center">
                 <div class="mt-4">
                    <h3 class="mb-1">All reviews verified by</h3>
                    <a href="https://www.trustpilot.com/review/razorcloud.host">
						<?= $trustpilot_icon ?>
                    </a>
                </div>
            </div>
		</div>
	</div>
	<!-- End Review -->

	<!-- Footer -->
	<?php require 'includes/footer.php';?>

    <script src="assets/js/swiper-bundle.min.js"></script> 
    <script src="assets/js/slider.js"></script>
	<script src="assets/js/game-selector.js"></script>
	<script src="assets/js/reviews.js"></script>
</body>
</html>