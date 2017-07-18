<?php get_header(); ?>

<section class="hero-banner">
	<div class="banner-logo">
        <div class="banner-big-text">
            <h2>Stand <span>out</span> on the <span>web</span></h2>
        </div>
        <div class="banner-devices">
		    <?php get_template_part( 'img/inline', 'wondersites-ipad-iphone.svg' ); ?>
        </div>
	</div>

	<div class="banner-text-button">
		<h1 class="banner-headline">Got a web project in mind?</h1>
		<button type="button" class="button-start-now">Get in touch</button>
	</div>
</section>

<section class="homepage-services-section">
	<div class="container">
		<span class="taunt">Don't just build a website.</span>
        <hr class="underline">
		<h1>Wondersites helps you grow your business online.</h1>
		<div class="row">
			<div class="service">
				<wrap>
					<?php get_template_part( 'img/inline', 'devices-icon.svg' ); ?>
					<h1>Design, Build & Maintain</h1>
					<span>a website to your image</span>
					<p>Stand out from the competition with a fast website and an elegant design. Rely on proven, easy to use technologies that make it easy to update your content and keep your site safe.</p>
				</wrap>
				<button type="button" class="small-blue">Get started</button>
			</div>

			<div class="service">
				<wrap>
					<?php get_template_part( 'img/inline', 'chat-icon.svg' ); ?>
					<h1>Find, Reach & Talk</h1>
					<span>to the right prospects</span>
					<p>Elaborate a clear and effective digital strategy. Start from lead capture and sales funnels to targeted email, social media and Google Adwords campaigns. We simply get you better results online.</p>
				</wrap>
				<button type="button" class="small-blue">Learn more</button>
			</div>

			<div class="service">
				<wrap>
					<?php get_template_part( 'img/inline', 'light-bulb-icon.svg' ); ?>
					<h1>Ask, Learn & Grow</h1>
					<span>from our expertise</span>
					<p>Gain the confidence and peace of mind that you are making the right decision every step of the way. Set realistic ROI goals and implement effective, no-nonsense methods for carrying out your online strategies.</p>
				</wrap>
				<button type="button" class="small-blue">Schedule a consultation</button>
			</div>
		</div>
	</div>
</section>

<section class="homepage-client-reviews">
	<div class="container">
        <?php $testimonial_posts = new WP_Query(array('post_type' => 'testimonials')); ?>
		<h2>Client Reviews</h2>
        <hr class="underline">
		<div class="slick-carousel" data-slick='{"dots": true, "centerMode": false, "autoplay": true, "autoplaySpeed": 5000, "fade": true}'>
            <?php if ( $testimonial_posts->have_posts() ) : while ( $testimonial_posts->have_posts() ) : $testimonial_posts->the_post(); ?>
                <div class="client-review-box">
                    <?php
                    $review_logo = esc_url( get_field('testimonial_logo')["sizes"]["thumbnail"]);
                    if( !empty($review_logo) ): ?>
                        <img src="<?php echo $review_logo ?>" alt="<?php echo $review_logo["alt"]; ?>" />
                    <?php endif; ?>
                    <p class="review-text"><?php echo esc_html(wp_strip_all_tags(get_field('testimonial_text'))); ?></p>
                    <span class="review-author"><?php echo esc_html(get_field('testimonial_author')); ?></span>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
</section>

<section class="homepage-client-logos">
	<div class="container">
		<?php 
        $images = get_field('client_logos');
        if ($images): ?>
            <ul class="slick-gallery">
                <?php foreach($images as $image): ?>
                    <li>
                        <img src="<?php echo esc_url($image ['sizes']['medium']); ?>" alt="" />
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
	</div>
</section>

<section class="homepage-cta">
	<div class="container">
		<h2>Take the next step:</h2>
		<div class="buttons-cta">
			<button type="button" class="big-blue">Answer a few questions</button>
			<p>or</p>
			<button type="button" class="big-blue">Schedule a call</button>
		</div>
	</div>
</section>

<section class="homepage-contact-form">
	<div class="container">
		<h2>Question?</h2>
		<?php gravity_form(1, $display_title = false, $display_description = false); ?>
	</div>
</section>

<?php get_footer(); ?>

