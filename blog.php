
<?php 
    require 'includes/config.php';
    $blogs = json_decode(file_get_contents('admin/blogs.json'), true) ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blogs | DinoNode</title>
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
    <div class="blog py-6">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-banner">
                                <img src="admin/uploads/<?php echo $blog['image']; ?>" class="card-img-top" alt="<?php echo $blog['title']; ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $blog['title']; ?></h5>
                                <p class="card-text"><?php echo $blog['short_description']; ?></p>
                                <a href="<?php echo $blog['slug']; ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php require 'includes/footer.php';?>
</body>
</html>