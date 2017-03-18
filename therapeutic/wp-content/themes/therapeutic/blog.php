<?php 
/*
Template Name: Blog
*/

?>
<?php get_header();  ?>
  <!-- #content -->
  <?php


 if ( ! have_posts() ) : ?>
 
 <div id="post-0" class="post error404 not-found">
  <h1 class="entry-title">
    <?php _e( 'Not Found', '' ); ?>
  </h1>
  <div class="entry-content">
    <p>
      <?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', '' ); ?>
    </p>
    <?php get_search_form(); ?>
  </div>
  <!-- .entry-content --> 
</div>
<!-- #post-0 -->
<?php endif; ?>

<?php 

$post_per_page=get_option('posts_per_page');
$post_count=0;

?>
  
  
  <div id="content" class="blog">
 
    <div class="sidebar">
      <h3>Recent posts</h3>
      <ul>
		$number_recents_posts = 5;//Can be how much you want
		$recent_posts = wp_get_recent_posts( $number_recents_posts );
		foreach($recent_posts as $post){
			echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
		} ?>
	  
      </ul>
      <h3>Archive</h3>
      <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
		
      </ul>
    </div>
    <!-- //sidebar -->
    <div class="main">
      <?php while ( have_posts() ) : the_post(); $post_count++;?>
	  <div class="post">
	   
        <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'salespro' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
            <?php the_title(); ?>
            </a></h2>
        <h4><?php the_time('D d F Y') ?> </h4>
          <?php the_content('', true, $more_file ); ?>
        <p><img src="images/post-sample-image.gif" alt="sample image" /></p>
        <ul class="userAction">
          <li><a href=""><span>Comments</span></a></li>
          <li><a href=""><span>Read more</span></a></li>
        </ul>
		
      </div>
     <?php endwhile; // End the loop. Whew. ?>
    </div>
	if (  $wp_query->max_num_pages > 1 ) : ?>
        <div  class="navigation clf">
          <div class="nav-previous">
            <?php next_posts_link( __( '&lt; Previous Page', 'salespro' ) ); ?>
          </div>
          <!-- display new posts -->
          <div class="nav-next">
            <?php previous_posts_link( __( 'Next Page &gt;', 'salespro' ) ); ?>
          </div>
          <!-- display old posts --> 
          
        </div>
        <?php endif; ?>
    <!-- //main --> 
  </div>
  <!-- /#content --> 
     <?php get_footer();?>