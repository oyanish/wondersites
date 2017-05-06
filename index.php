<?php get_header(); ?>

<section class="hero-banner">
    <div class="banner-logo">
        <img class="banner-big-text" src="<?php echo get_template_directory_uri() . 'img/stand-out-on-the-web.svg' ?>" alt="">
        <img class="banner-devices" src="<?php echo get_template_directory_uri() . 'img/wondersites-ipad-iphone.svg' ?>" alt="wondersites">
    </div>

    <div class="banner-text-button">
        <h1 class="banner-headline">Got a web project in mind?</h1>
        <button type="button" class="button-start-now">Start now</button>
    </div>
</section>

<section class="homepage-services-section">
    <div class="container">
        <span class="taunt">Don't just build a website.</span>
        <h1>Wondersites helps you grow your business online.</h1>
        <div class="row">
            <div class="service">
                <wrap>
                    <img class="icon-service" src="img/inline-devices-icon.svg.php" alt="Website design and development">
                    <h1>Design, Build & Maintain</h1>
                    <span>a website to your image</span>
                    <p>Stand out from the competition with a fast website and an elegant design. Rely on proven, easy to use technologies that make it easy to update your content and keep your site safe.</p>
                </wrap>
                <button type="button">Get started</button>
            </div>

            <div class="service">
                <wrap>
					<?php get_template_part( 'img/inline', 'chat-icon.svg' ); ?>
                    <h1>Find, Reach & Talk</h1>
                    <span>to the right prospects</span>
                    <p>Elaborate a clear and effective digital strategy. Start from lead capture and sales funnels to targeted email, social media and Google Adwords campaigns. We simply get you better results online.</p>
                </wrap>
                <button type="button">Learn more</button>
            </div>

            <div class="service">
                <wrap>
                    <img class="icon-service" src="img/inline-light-bulb-icon.svg.php" alt="Web consulting">
                    <h1>Ask, Learn & Grow</h1>
                    <span>from our expertise</span>
                    <p>Gain the confidence and peace of mind that you are making the right decision every step of the way. Set realistic ROI goals and implement effective, no-nonsense methods for carrying out your online strategies.</p>
                </wrap>
                <button type="button">Schedule a consultation</button>
            </div>
        </div>
    </div>
</section>

<section class="homepage-client-reviews">
    <div class="container">
        <h2>Client Reviews</h2>
        <div class="client-review-box">
            <img src="img/Client%20logos/sutton-logo.svg" alt="wondersites-client-logo">
            <p>“Anton and Olha have helped me build a site i am proud to represent me in front of my clients. As the very first thing new leads see, it makes a great and lasting first impression that has led to more phone calls and more business! Their insight and business savvy is matched by their exceptional technical skills and passion for helping and sharing their knowledge. I know we will be collaborating for many years to come.”</p>
            <p class="client-name">- Brigid Scullion, Real Estate Broker, Montreal </p>
        </div>
    </div>
</section>

<section class="homepage-client-logos">
    <div class="container">
        <img src="img/Client%20logos/brigid-scullion-logo.svg" alt="sutton brigid scullion">
        <img src="img/Client%20logos/yellow-logo.svg" alt="yellow shoes">
        <img src="img/Client%20logos/telus-logo.svg" alt="telus">
        <!--<img src="" alt="the image salon">-->
        <img src="img/Client%20logos/iava-logo.svg" alt="iava">
    </div>
</section>

<section class="homepage-cta">
    <div class="container">
        <h2>Take the next step:</h2>
        <div class="buttons-cta">
            <button type="button">Answer a few questions</button>
            <p>or</p>
            <button type="button">Schedule a call</button>
        </div>
    </div>
</section>

<section class="homepage-contact-form">
    <div class="container">
        <h2>Question?</h2>
        <form action="index.html" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="message" placeholder="Ask something">
            <button type="submit">Ask</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>

