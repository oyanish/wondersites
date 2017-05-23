<?php get_header(); ?>

<section class="about-us">
	<div class="container">
		<h1>About Wondersites</h1>
        <hr class="underline">
		<?php echo get_field('about_us_text'); ?>
	</div>
</section>

<section class="team-leaders">
	<div class="container">
		<h2>Our team leaders</h2>
        <hr class="underline">
		<?php if( have_rows('team_member_information') ): ?>
			<div class="leader-blurbs">
				<?php while( have_rows('team_member_information') ): the_row();
					$image = get_sub_field('member_picture');
					$name = get_sub_field('member_name');
					$description = get_sub_field('member_description');
					?>
					<div class="blurb">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
						<span><?php echo $name ?></span>
						<?php echo $description ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="contact-us">
	<div class="container">
		<h2>Interested in working with us?</h2>
        <hr class="underline">
        <div class="buttons-cta">
            <button class="big-blue">Schedule a consultation</button>
            <span>or</span>
            <button class="big-blue">Get in touch</button>
        </div>
	</div>
</section>

<?php get_footer(); ?>
