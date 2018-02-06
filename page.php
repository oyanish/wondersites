<?php get_header(); ?>

<section class="page-banner single-service-banner">
	<div class="container">
		<div class="page-banner-text">
			<h1><?php the_title(); ?></h1>
			<hr class="underline">
			<span><?php esc_html( the_field( 'subtitle' ) ); ?></span>
			<i class="fa fa-angle-down"></i>
		</div>
	</div>
</section>

<section class="page-text">
    <div class="main-content">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
                the_content();
        }
    };
    ?>
    </div>
    <div class="extra-content">
        <?php esc_html( the_field( 'extra_content' ) ); ?>
    </div>
</section>

<section class="related-packages">
    <h2>Related service packages</h2>
    <hr class="underline">
    <div class="package-list">
	    <?php

	    $posts = get_field('related_service_packages');

	    if( $posts ): ?>
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			    <?php setup_postdata($post); ?>
                <div class="single-package">
                    <a href="<?php the_permalink(); ?>">

                        <img src="<?php bloginfo('template_url')?>/img/commerce.png" alt="Wondersites web products" />
                        <span class="service-card-subtitle"><?php esc_html( the_field( 'package_cursive_subtitle' ) ); ?></span>
                        <span class="service-card-title"><?php the_title(); ?></span>
                    </a>
                </div>
		    <?php endforeach;
		    wp_reset_postdata();
	    endif; ?>
    </div>
</section>

<?php get_template_part( 'partials/service_cta_form' );?>

<?php get_footer(); ?>

