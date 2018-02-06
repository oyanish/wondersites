<?php get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<span class="paragraph-text projects-page-content">
        <?php the_content(); ?>
        </span>
	<?php }
};

$terms = get_terms( array(
'taxonomy' => 'package_category',
'hide_empty' => false,
)); ?>

<div class="project-type-menu">
	<a href="<?php site_url( '/packages/')?>" class="active">
		All Packages
	</a>
	<?php
	foreach ( $terms as $term ) { ?>
		<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="<?php echo $term->term_id == $initial_term_id ? ' active' : ''; ?>">
			<?php echo esc_html( $term->name ); ?>
		</a>
	<?php } ?>
</div>

<?php
$args = array(
	'post_type' => 'packages',
);

$packages = new WP_Query($args);
if ( $packages->have_posts() ) { ?>
	<div class="package-preview-page-wrapper">
		<?php while ( $packages->have_posts() ) {
			$packages->the_post();
			get_template_part('partials/single_package');
		} ?>
	</div>
<?php }
wp_reset_postdata();

get_footer(); ?>
