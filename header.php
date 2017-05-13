<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="main-header">
            <div class="logo">
                <?php get_template_part( 'img/inline', 'wondersites-logo.svg' ); ?>
                <span class="slogan">Design | Development | Marketing</span>
            </div>
            <div class="mobile-menu-toggle">
                <i class="icon-chevron-thin-down"></i>
                Menu
            </div>
            <nav class="primary-menu">
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Our work</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li class="button button-quote"><a href="#">Get an instant quote</a></li>
                </ul>
            </nav>
		</header>