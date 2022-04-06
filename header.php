<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="/style.css">-->
	<script src="https://kit.fontawesome.com/875fa8d6ec.js" crossorigin="anonymous"></script>


<?php wp_head();?>

	<title></title>
</head>
<body>
	
<header>
	<div class="container d-flex align-items-center justify-content-between">
		<img src="<?php bloginfo('template_directory');?>/images/logo.png" class="img-fluid logo">
	<?php 
	wp_nav_menu(
		array(
			'theme_location' => 'top-menu',
			//'menu' => 'Top Bar'
			'menu_class' => 'top-bar'
		)
	);
	?>
	</div>
</header>