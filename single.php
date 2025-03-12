<?php
require 'includes/config.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

$blogs = json_decode(file_get_contents('admin/blogs.json'), true) ?? [];
$blog = null;

foreach ($blogs as $b) {
    if ($b['slug'] == $slug) {
        $blog = $b;
        break;
    }
}

if (!$blog) {
    header("Location: 404");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $blog['title']; ?> | DinoNode</title>
    <meta name="keywords" content="<?php echo $blog['keywords']; ?>">
    <meta name="description" content="<?php echo $blog['description']; ?>">
	<link rel="icon" href="assets/images/logo.svg" type="image/svg+xml">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>
	
	<!-- Navbar -->
	<?php require 'includes/navbar.php';?>

	<!-- Header -->
	<div class="header" style="background:url('admin/uploads/<?php echo $blog['image']; ?>') no-repeat center center; background-size: cover;">

        <div class="container h-100">
            <div class="row d-flex justify-content-start align-items-center h-100">
                <div class="col-lg-12 mt-5">
                    <h1><?php echo $blog['title']; ?></h2>
                    <p><?php echo $blog['short_description']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="blog-content px-4 py-4">
            <img src="admin/uploads/<?php echo $blog['image']; ?>" class="img-fluid rounded mb-3" alt="<?php echo $blog['title']; ?>">
            <p><?php echo $blog['content']; ?></p>
        </div>
    </div>
    <!-- Footer -->
    <?php require 'includes/footer.php';?>
</body>
</html>
