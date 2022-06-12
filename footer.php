<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coditive-test
 */

?>

	<footer id="colophon" class="site-footer">
	
		<div class="footer-container">
			<div class="footer-container__left">
				<?php the_field('footer_text'); ?>
				<div class="social-media">
					<a href="<?php the_field('facebook'); ?>" class="link-symbol" target="_blank">
						<div class="link-symbol__icon link-symbol__icon--facebook"></div>
					</a>
					<a href="<?php the_field('twitter'); ?>" class="link-symbol" target="_blank">
                    	<div class="link-symbol__icon link-symbol__icon--twitter"></div>
					</a>
					<a href="<?php the_field('instagram'); ?>" class="link-symbol" target="_blank">
                    	<div class="link-symbol__icon link-symbol__icon--instagram"></div>
					</a>
				</div>
			</div>
			<div class="footer-container__right">
				<?php
					wp_nav_menu( $args = array(
						'theme_location'	=> 'menu-2',
						'container'			=>  false,
						'menu_class'		=> 'footer-menu',
						'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
					) );
				?> 
			</div>
			<div class="site-info">
				<p>&copy;&nbsp;<?php echo date("Y"); ?>&nbsp;<?php bloginfo('description'); ?>&nbsp;<?php bloginfo('name'); ?></p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>