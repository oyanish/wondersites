<?php get_header(); ?>

<section class="service-banner">
	<div class="container">
		<h1>At Wondersites, we are passionate about making your website work for you</h1>
        <hr class="underline">
		<span>What can we offer you?</span>
		<i class="icon-chevron-thin-down"></i>
	</div>
</section>

<section class="services-offered">
	<div class="container">
		<?php if( have_rows('offered_services') ): ?>
			<div class="service-blurbs">
				<?php while( have_rows('offered_services') ): the_row();
					$icon = esc_url( get_sub_field('service_icon')['sizes']['thumbnail'] );
					$description = esc_html( strip_tags( get_sub_field('service_description') ) );
					?>
					<div class="blurb">
						<img src="<?php echo $icon ?>" alt="">
						<?php echo $description ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="service-steps">
    <div class="vertical-line"></div>
	<div class="container">
        <h2>We are your one stop for all your web solution needs</h2>
        <hr class="underline">
		<?php if( have_rows('service_categories') ): ?>
            <div class="category-blurbs">
				<?php while( have_rows('service_categories') ): the_row();
					$icon = esc_url( get_sub_field('category_icon')['sizes']['thumbnail']);
					$name = esc_html( get_sub_field('category_name') );
					$description = esc_html( strip_tags( get_sub_field('category_description') ) );
					?>
                    <div class="blurb">
                        <img src="<?php echo $icon ?>" alt="">
                        <div class="text">
                            <span><?php echo $name ?></span>
                            <?php echo $description ?>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
	</div>
</section>

<section class="service-form">
	<div class="container">
		<h2>Is your website doing everything it should?</h2>
		<hr class="underline">
		<p>Get a free professional evaluation & security check-up of your website today</p>
		<?php gravity_form(2, $display_title = false, $display_description = false); ?>
	</div>
</section>

<?php get_footer(); ?>


