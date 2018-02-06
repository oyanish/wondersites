<?php get_header(); ?>

<section class="page-banner projects-page-banner">
    <div class="container">
        <div class="page-banner-text">
            <h1><?php the_title(); ?></h1>
            <hr class="underline">
            <span>We have the chance to work with the most amazing clients. Here is a selection of some projects we worked on the past and present.</span>
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
</section>

<section class="projects">
	<?php $project_cards = new WP_Query( array( 'post_type' => 'projects' ) ); ?>
    <div class="featured-projects">
		<?php if ( $project_cards->have_posts() ) : while ( $project_cards->have_posts() ) : $project_cards->the_post(); ?>
            <div class="project-card">
                <div class="package-card-image">
                    <img src="<?php echo esc_url( get_field( 'project_featured_image' )['sizes']['large'] ); ?>" alt="">
                </div>
                <div class="project-text-banner">
                    <h3><?php the_title(); ?></h3>
                    <hr class="underline">
                    <?php the_content(); ?>
                    <a href="<?php echo esc_url( get_field( 'project_website' ) ); ?>" class="square-blue-button">Visit site</a>
                </div>
            </div>
		<?php endwhile;
			wp_reset_postdata(); endif; ?>
    </div>
</section>

<?php get_footer(); ?>
