<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Therapeutic Axis
 * @since Therapeutic Axis
 */

get_header(); ?>

	 <div id="content_left">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'bigfinish' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found.', 'bigfinish' ); ?></p>
					
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>