<?php
/**
 * Template name: custom-homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio
 */


//Linking page to the options page so we can grab information from the setting
$options=get_option( 'js_options_settings' ); 

get_header(); ?>

<!-- In the below style I changed the font color, background color, and font size to reflect the option the user chooses from the option page on wordpress-->
     <style>
        .site-main {
	       color: <?php echo $options['js_radio_field']; ?>
        }
    </style>

    <style>
        .site-main{
	       font-size: <?php echo $options['js_select_field2']; ?>
        }
    </style>

    <style>
        .site-content{
	       background-color: <?php echo $options['js_radio_field3']; ?>
        }
    </style>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class='custom-hp'>
	<h2>Top Posts</h2>
<!-- Adding my custom query --> <?php
			$args = array('showposts' => 3, 'category_name' => 'custom-homepage');
				$my_query = new WP_Query($args);
				?>
				<?php
				//	This query shows posts
				if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
				?>
				<div class="customq">
				<?php
				if ( has_post_thumbnail()){ the_post_thumbnail(); }
				the_excerpt(); //displays excerpts
					?>
				</div>
				<?php endwhile; endif; wp_reset_query(); ?>
</div> 

<?php
get_sidebar();
get_footer();