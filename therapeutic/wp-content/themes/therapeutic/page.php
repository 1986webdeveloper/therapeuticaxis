<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage SCS

 * @since SCS 1.0

 */



get_header(); ?>



		  <div id="page" class="clf">

          <div id="cmsPage"><!-- end #sidebar -->

            <div id="contentWide">

            

             

             <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		  <div class="post clf">	                     

					<h1 class="title"><?php the_title(); ?></h1>
<div class="entry">
                    <?php the_content(); ?>
</div>
            

            <?php endwhile; ?>

</div>

		</div><!-- #page -->

<?php get_footer(); ?>