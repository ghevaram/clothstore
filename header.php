<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>ClothStore</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,300&display=swap"
		rel="stylesheet" />
</head>

<body>
	<?php $logoimg = get_header_image(); ?>
	<section class="logo-section">
		<img src="<?php echo $logoimg; ?>" />
	</section>
	<section class=" navbar-section">
		<div class="main-navbar-div">
			<div class="search">
				<span class="material-symbols-outlined"> search </span>
			</div>
			<div class="nav-links-div">
				<?php
				wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav'))
					?>
			</div>

			<div class="shopping_cart">
				<span class="material-symbols-outlined"> shopping_cart </span>
			</div>
		</div>
	</section>
	<div style="display: flex; justify-content: center" class="menu-toggle" id="menuToggle">
		<span class="material-symbols-outlined">menu</span>
	</div>

	<script>
		document
			.getElementById("menuToggle")
			.addEventListener("click", function () {
				var navbarSection = document.querySelector(".navbar-section");
				navbarSection.classList.toggle("active");
			});
	</script>