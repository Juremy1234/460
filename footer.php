<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://underscores.me/" rel="designer">Juremy</a>' ); ?>
		</div><!-- .site-info -->

<!-- This code was taken from https://codex.wordpress.org/Function_Reference/is_active_sidebar -->
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
