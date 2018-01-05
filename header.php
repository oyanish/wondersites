<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body>

		<header class="main-header <?php echo ! is_front_page() ? 'white' : null ?> ">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">

                    <?php is_front_page()
                        ? get_template_part( 'img/inline', 'wondersites-logo.svg' )
                        : get_template_part( 'img/inline', 'wondersites-logo-inverted.svg' );
                    ?>
                    <span class="slogan">Design | Development | Marketing</span>
                </a>
            </div>
            <div class="mobile-menu-toggle">
                <i class="icon-chevron-thin-down"></i>
                Menu
            </div>
            <nav class="primary-menu">
                <ul>
	                <?php
	                wp_nav_menu( array('theme_location'=>'header_menu')); ?>
                    <li class="button button-quote"><a href="#">Start now</a></li>
                </ul>
            </nav>
		</header>