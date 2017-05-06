<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/normalize.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="main-header">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri() . '/img/wondersites-logo.svg'?>" alt="wondersites-logo" class="primary-menu-logo">
				<span class="slogan">Design | Development | Marketing</span>
			</div>

			<nav class="primary-menu">
				<ul>
					<li><a href="#">Services</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Our work</a></li>
					<li><a href="#">Contact us</a></li>
					<li class="button-quote"><a href="#">Get an instant quote</a></li>
				</ul>
			</nav>
		</header>