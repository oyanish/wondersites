
		<footer class="main-footer">
			<?php wp_footer(); ?>
            <div class="footer-wrap container">
                <hr class="footer-underline">
                <div class="logo-section">
                    <div class="logo-text">
                        <a href="<?php echo site_url(); ?>"><?php get_template_part( 'img/inline', 'wondersites-logo-inverted.svg' ); ?></a>
                        <span class="catchphrase">The website you need for the clients you want.</span>
                    </div>
                    <div class="footer-social">
                        <div class="footer-button">
                            <a href="#">Ask for a quote now</a>
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="footer-underline">
                <div class="footer-menu-section">
                    <nav class="footer-menus">
                        <ul>
	                        <?php wp_nav_menu( array('theme_location'=>'footer_menu_1')); ?>
                        </ul>
                        <ul>
	                        <?php wp_nav_menu( array('theme_location'=>'footer_menu_2')); ?>
                        </ul>
                        <ul>
	                        <?php wp_nav_menu( array('theme_location'=>'footer_menu_3')); ?>
                        </ul>
                        <ul>
	                        <?php wp_nav_menu( array('theme_location'=>'footer_menu_4')); ?>
                        </ul>
                    </nav>
                </div>
                <hr class="footer-underline">
                <div class="copyright">
                    <span>&copy; <?php echo date("Y"); ?> Wondersites | All rights reserved.</span>
                </div>
            </div>
		</footer>
	</body>
</html>