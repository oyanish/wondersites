<?php get_header(); ?>

<section class="hero-banner">
    <div class="hero-text">
		<div class="headline"><span class="blue-text">Our</span> Experience. <span class="blue-text">Your</span> Story.</div>
        <p>Inspired digital solutions for the modern business.</p>
        <span class="above-the-fold-text">
           Lo-fi ennui brooklyn hexagon, hoodie prism yuccie kinfolk squid cardigan iceland quinoa coloring book. Quinoa waistcoat live-edge truffaut mixtape, everyday carry shabby chic yr banh mi meh. Live-edge tbh selfies paleo heirloom VHS blue bottle echo park meggings lomo. Paleo aesthetic lumbersexual dreamcatcher man bun, stumptown put a bird on it prism cardigan gochujang. Pug echo park hashtag bicycle rights. Live-edge whatever taxidermy vexillologist literally tattooed pickled.
        </span>
    </div>
<!--    <div class="intro-video">-->
<!--        <div class="play-button">--><?php //get_template_part( 'img/inline', 'hero-play-button.svg' ); ?><!--</div>-->
<!--        <span class="intro-video-text">--><?php //esc_html( the_field( 'video_button_text' ) ); ?><!--</span>-->
<!--    </div>-->
</section>

<section class="homepage-services-section">
    <div class="grabber">
        <h1>Build the website you need to get the clients you want</h1>
        <p>If you are:</p>
        <hr class="underline">
        <ul class="client-types center">
            <li class="profession">an Architect</li>
            <li class="profession">a Lawyer</li>
            <li class="profession">a Small Business Owner</li>
            <li class="profession">a Doctor</li>
            <li class="profession">a Realtor</li>
        </ul>
        <h3>Let's face it, attracting the <span class="focus">right clients</span> is not easy. That's why our job is not only to build you a great website, but to have a conversation about how this website and other tools and services will help you achieve your overall business goals. <span class="focus">We ask the right questions</span> to bring you results. Let's meet for a chat, the coffee is on us!</h3>
<!--        <span class="taunt">Don't just build a website. Get Results!</span>-->
    </div>
    <div class="services">
        <div class="service">
            <wrap>
				<?php get_template_part( 'img/inline', 'web-design-development.svg' ); ?>
                <h2>Design, Build & Maintain</h2>
                <span>a website to your image</span>
                <p>Stand out from the local competition with a fast website and an elegant design. Rely on proven, easy to use technologies that make it easy to update your content and keep your site stunning, search friendly and secure.</p>
                <div class="services-list">
                    <ul>
                        <li>Website design & development</li>
                        <li>Mobile-friendly designs</li>
                        <li>Conversion focused landing pages</li>
                        <li>WordPress websites</li>
                        <li>Custom web apps</li>
                        <li>E-commerce</li>
                        <li>Website maintenance</li>
                        <li>Bug troubleshooting</li>
                        <li>Host migrations</li>
                        <li>WordPress security</li>
                    </ul>
                </div>
            </wrap>
            <button type="button" class="small-blue">Get started</button>
        </div>

        <div class="service">
            <wrap>
				<?php get_template_part( 'img/inline', 'online-marketing.svg' ); ?>
                <h2>Find, Reach & Engage</h2>
                <span>the right prospects</span>
                <p>Together, we elaborate a clear and effective digital strategy that reflects your objectives. Start from lead capture and sales funnels to targeted email, social media and Google Adwords campaigns. We simply get you better results online.</p>
                <div class="services-list">
                    <ul>
                        <li>Google pay-per-click</li>
                        <li>Social media page setup</li>
                        <li>Social media management</li>
                        <li>Google for business setup</li>
                        <li>Facebook ad campaigns</li>
                        <li>Instagram ad campaigns</li>
                        <li>LinkedIn ad campaigns</li>
                        <li>MailChimp email campaigns</li>
                        <li>Online campaign analytics</li>
                        <li>On-page SEO</li>
                        <li>Branding</li>
                    </ul>
                </div>
            </wrap>
            <button type="button" class="small-blue">Learn more</button>
        </div>

        <div class="service">
            <wrap>
				<?php get_template_part( 'img/inline', 'consulting.svg' ); ?>
                <h2>Ask, Learn & Grow</h2>
                <span>from our expertise</span>
                <p>Ask, and you shall gain the confidence and peace of mind that you are making the right decision every step of the way. Learn how to set realistic spending and profit goals and implement effective, no-nonsense solutions for carrying out your online marketing strategy.</p>
                <div class="services-list">
                    <ul>
                        <li>Internet marketing strategy</li>
                        <li>Digital strategy</li>
                        <li>Digital consulting</li>
                        <li>Training videos</li>
                        <li>Digital consulting for start-ups</li>
                        <li>SEO consulting</li>
                    </ul>
                </div>
            </wrap>
            <button type="button" class="small-blue">Schedule a consultation</button>
        </div>
    </div>
</section>

<section class="homepage-client-logos container">
    <img width="150" height="121" src="<?php bloginfo('template_url')?>/img/logo-TIS.png" alt="">
    <img width="150" height="56" src="<?php bloginfo('template_url')?>/img/logo-dvlop.png" alt="">
    <img width="150" height="48" src="<?php bloginfo('template_url')?>/img/logo-iava.png" alt="">
    <img width="150" height="86" src="<?php bloginfo('template_url')?>/img/logo-jbenson.png" alt="">
    <img width="150" height="57" src="<?php bloginfo('template_url')?>/img/logo-LH.png" alt="">
    <img width="150" height="30" src="<?php bloginfo('template_url')?>/img/logo-telus.png" alt="">
    <img width="150" height="27" src="<?php bloginfo('template_url')?>/img/logo-yellow.png" alt="">
    <img width="150" height="46" src="<?php bloginfo('template_url')?>/img/logo-CADedifice.png" alt="">
</section>

<section class="homepage-client-reviews">
    <div class="container">
		<?php $testimonial_posts = new WP_Query( array( 'post_type' => 'testimonials' ) ); ?>
        <h2 class="testimonial-heading">Wondersites is your #1 online presence specialist</h2>
        <div class="slick-carousel"
             data-slick='{"dots": true, "centerMode": false, "autoplay": true, "autoplaySpeed": 5000, "fade": true}'>
			<?php if ( $testimonial_posts->have_posts() ) : while ( $testimonial_posts->have_posts() ) : $testimonial_posts->the_post(); ?>
                <div class="client-review-box">
					<?php $client_picture = esc_url( get_field( 'client_picture' )["sizes"]["thumbnail"] ); ?>
                    <img class="client-picture" src="<?php echo $client_picture ?>" alt="">
                    <img class="five-stars" src="wp-content/themes/wondersites/img/five-stars.png" alt="">
					<?php the_content(); ?>
                    <div class="client-info">
                        <span class="review-author">- <?php the_title(); ?></span>
                        | <span class="client-location"><?php esc_html( the_field( 'client_location' ) ); ?></span>
                    </div>
                </div>
			<?php endwhile;
				wp_reset_postdata(); endif; ?>
        </div>
        <div class="more-testimonials">
            <a class="square-blue-button" href="#">More praise</a>
        </div>
    </div>
</section>

<section class="homepage-cta-and-form">
    <div class="homepage-cta">
        <div class="container">
            <h2>Your Next Project Starts Here</h2>
            <p class="cta-text">Looking for a price quote for your next website? Facebook ad campaign? SEO improvements? <br>
                Easy! Just fill out a form, answer a few questions and get an instant online price range evaluation. Or, for
                more custom solutions give us a call, we'll be happy to help. </p>
            <div class="buttons-cta">
                <a class="wondersites-blue-button" href="<?php echo esc_url( site_url(  ) ); ?>"><span>Start now</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <p>or</p>
                <a class="wondersites-blue-button orange-button" href="<?php echo esc_url( site_url(  ) ); ?>"><span>Schedule a call</span><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="homepage-contact-form">
        <hr class="blue-underline">
        <div class="container">
			<?php get_template_part( 'img/inline', 'mail-envelope.svg' ); ?>
            <h2>Haven't found what you're looking for? Let's chat!</h2>
            <span class="contact-form-text">We're ready to lead you to the top of the digital world. Email us at<br> <a class="email-address" href="mailto:info@wondersites.online">info@wondersites.online<i class="fa fa-long-arrow-right"></i></a><br>or send us a quick message below! We will get back to you within 24 hours guaranteed.</span>
			<?php gravity_form( 1, $display_title = false, $display_description = false ); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>

