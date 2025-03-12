<?php require 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>RAZOR CLOUD</title>
	  <link rel="icon" href="assets/images/logo.webp" type="image/svg+xml">
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
                </div>
            </div>
        </div>
    </div>

	<!-- Plans -->
	<div class="plans discord py-6">
		<div class="container">
			<div class="row">
				<!-- First Plan -->
    			<div class="col-lg-4 col-md-6">
    				<div class="card card-discord mb-4 text-center">
    					<div class="card-body px-4 py-4">
							<h4 class="mb-0">Discord Bot</h4>
							<h3 class="mb-4">256MB</h3>
							<ul class="list-unstyled mb-4">
								<li><?= $check_icon ?> 5GB NVMe SSD</li>
								<li><?= $check_icon ?> Unmetered Bandwith</li>
								<li><?= $check_icon ?> MySQL Database</li>
								<li><?= $check_icon ?> Global Location</li>
								<li><?= $check_icon ?> Instant Setup</li>
							</ul>
							<h2 class="mb-4"><span>OUT OF STOCK</span></h2>
							<a href="" class="btn btn-discord">COMING SOON</a>
						</div>
    				</div>
    			</div>
				<!-- Secound Plan -->
    			<div class="col-lg-4 col-md-6">
    				<div class="card card-discord card-discord-popular mb-4 text-center">
						<div class="ribbon"><span>Most Popular</span></div>
    					<div class="card-body px-4 py-4">
							<h4 class="mb-0">Discord Bot</h4>
							<h3 class="mb-4">512MB</h3>
							<ul class="list-unstyled mb-4">
								<li><?= $check_icon ?> 5GB NVMe SSD</li>
								<li><?= $check_icon ?> Unmetered Bandwith</li>
								<li><?= $check_icon ?> MySQL Database</li>
								<li><?= $check_icon ?> Global Location</li>
								<li><?= $check_icon ?> Instant Setup</li>
							</ul>
							<h2 class="mb-4"><span>OUT OF STOCK</span></h2>
							<a href="" class="btn btn-discord">COMING SOON</a>
						</div>
    				</div>
    			</div>
				<!-- Third Plan -->
    			<div class="col-lg-4 col-md-6">
    				<div class="card card-discord mb-4 text-center">
    					<div class="card-body px-4 py-4">
							<h4 class="mb-0">Discord Bot</h4>
							<h3 class="mb-4">1GB</h3>
							<ul class="list-unstyled mb-4">
								<li><?= $check_icon ?> 5GB NVMe SSD</li>
								<li><?= $check_icon ?> Unmetered Bandwith</li>
								<li><?= $check_icon ?> MySQL Database</li>
								<li><?= $check_icon ?> Global Location</li>
								<li><?= $check_icon ?> Instant Setup</li>
							</ul>
							<h2 class="mb-4"><span>OUT OF STOCK</span></h2>
							<a href="" class="btn btn-discord">COMING SOON</a>
						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

	<div class="discord-section py-6">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-3">
					<img src="assets/images/discord.svg" class="img-fluid pb-4" alt="Disocrd Wumpus">
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4">
							<div class="card mb-4">
								<div class="card-body text-center">
									<h3 class="mb-0">
										<?= $code_icon ?>
										Supports Java and Python
									</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4">
								<div class="card-body text-center">
									<h3 class="mb-0">
										<?= $folder_icon ?>
										Full FTP File Access
									</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4">
								<div class="card-body text-center">
									<h3 class="mb-0">
										<?= $cog_icon ?>
										Git Management
									</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4">
								<div class="card-body text-center">
									<h3 class="mb-0">
										<?= $calendar_icon ?>
										Automatic 7 Day Backups
									</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4">
								<div class="card-body text-center">
									<h3 class="mb-0">
										<?= $signal_icon ?>
										Detailed usage statistics
									</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card mb-4">
								<div class="card-body text-center">
									<h3 class="mb-0">
										<?= $discord_icon ?>
										Discord Support
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php require 'includes/footer.php';?>
</body>
</html>