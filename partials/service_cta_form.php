<section class="service-cta-form">
	<div class="service-cta">
		<div class="container">
			<h2>Your Next Project Starts Here</h2>
			<p class="cta-text">Looking for a price quote for your next website? Facebook ad campaign? SEO improvements? <br>
				Easy! Just fill out a form, answer a few questions and get an instant online price range evaluation. Or, for
				more custom solutions give us a call, we'll be happy to help. </p>
			<div class="buttons-cta">
				<a class="wondersites-blue-button" href="<?php echo esc_url( site_url(  ) ); ?>"><span>Shop</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<p>or</p>
				<a class="wondersites-blue-button orange-button" href="<?php echo esc_url( site_url(  ) ); ?>"><span>Schedule a call</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

	<div class="service-contact-form">
		<hr class="blue-underline">
		<div class="container">
			<?php get_template_part( 'img/inline', 'mail-envelope.svg' ); ?>
			<h2>Haven't found what you're looking for? Let's chat!</h2>
			<span class="contact-form-text">We're ready to lead you to the top of the digital world. Email us at<br> <a class="email-address" href="mailto:info@wondersites.online">info@wondersites.online<i class="fa fa-long-arrow-right"></i></a><br>or send us a quick message below! We will get back to you within 24 hours guaranteed.</span>
			<?php gravity_form( 1, $display_title = false, $display_description = false ); ?>
		</div>
	</div>
</section>
