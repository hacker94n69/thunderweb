<?php require 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Privacy Policy | DinoNode</title>
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

	<!-- Legal -->
	<div class="legal py-6">
		<div class="container">
			<h2 class="mt-2">General</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, repellendus ipsa accusantium voluptatibus velit quidem, quos, perferendis porro sint ut ducimus odio amet eum optio iure dignissimos quasi, est adipisci.</p>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt consequatur cum, cumque facere, alias voluptatibus. Sit adipisci, officia voluptas quod ipsum, dicta mollitia laborum sapiente nulla unde consequuntur autem fugiat?</p>
			<div class="my-5"></div>
			<h2 class="mt-3">Refunds and Disputes</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis magni aut consequuntur voluptatibus saepe doloremque, distinctio! Ut praesentium nam obcaecati cum eaque, minima impedit totam. Aliquam accusamus, corporis beatae nulla.</p>
			<div class="my-5"></div>
			<h2 class="mt-3">Cancellations</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ducimus, commodi? Optio nulla quasi odit quo, quod iure culpa cupiditate atque doloremque vero quae beatae deleniti provident aperiam quisquam incidunt.</p>
			<div class="my-5"></div>
			<h2 class="mt-3">Illegal Use</h2>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Facilis hic ducimus, ratione? Ab dolorem illo suscipit et quasi eligendi, iusto placeat asperiores soluta qui, sapiente reiciendis non error accusamus quas!</p>
		</div>
	</div>

	<!-- Footer -->
	<?php require 'includes/footer.php';?>
</body>
</html>