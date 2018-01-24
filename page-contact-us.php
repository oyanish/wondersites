<?php get_header(); ?>

<section class="contact-form-info">
    <div class="contact-text">
        <h1>Contact us</h1>
        <hr class="underline">
        <span>If you have a question or a website project in mind, don’t hesitate to get in touch with us today. We’ll be happy to help.</span>
        <i class="fa fa-angle-down"></i>
    </div>
    <div class="info-form-container">
        <div class="contact-information">
            <div class="contact-card">
			    <?php get_template_part( 'img/inline', 'contact-phone.svg' ); ?>
                <h3>Phone or Text message</h3>
                <a href="#book-a-call">Schedule a call or text message</a>
            </div>
            <div class="contact-card">
			    <?php get_template_part( 'img/inline', 'contact-email.svg' ); ?>
                <h3>Email</h3>
                <a class="cursor" href="mailto:info@wondersites.online">info@wondersites.online</a>
            </div>
            <div class="contact-card">
			    <?php get_template_part( 'img/inline', 'contact-messenger.svg' ); ?>
                <h3>Facebook Chat</h3>
                <a href="https://www.facebook.com/wondersites.online/">Start a chat</a>
            </div>
        </div>
        <div class="contact-form">
		    <?php gravity_form( 2, $display_title = false, $display_description = false ); ?>
        </div>
    </div>
</section>

<div class="consultation-booking-text">
	<h2 id="book-a-call">Schedule a call with us</h2>
	<span>Let us help you figure out which digital tools will help you grow your business online. It's free!</span>
    <i class="fa fa-angle-down"></i>
</div>
	<!-- Calendly inline widget begin -->
	<div class="calendly-inline-widget" data-url="https://calendly.com/wondersites/firstconsultation" style="min-width:320px;height:580px;"></div>
	<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
	<!-- Calendly inline widget end -->

<?php get_footer(); ?>