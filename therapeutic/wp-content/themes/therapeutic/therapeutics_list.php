<?php 
/*
Template Name: Therapist list
*/
?>

<?php get_header();  ?>
 <!-- #content -->
  <div id="content" class="therapist"> 
   	<?php 
   /* $page_id=4;
  	$page_details=get_post($page_id);
	*/     
  	$args=array(
				'post_parent'=>4,
				'post_type' => 'page',
				'post_status' => 'publish',
				'orderby' => 'menu_order',
				'order' => 'asc',
			   );
				$my_query = null;
				$my_query = new WP_Query($args);
			 {
			  while($my_query->have_posts())
			   {
			    $my_query->the_post();
				$img=get_post_meta($post->ID, 'Picture',true);
			    $main_image=wp_get_attachment_image_src($img,array(120,120));
				$link=get_post_meta($post->ID, 'link',true);
		  	 ?>
    <div class="profile"> 
      <!-- .thumb -->
      <div class="thumb"><img src="<?php echo  $main_image[0]?>" alt="mirna-tarabay" /></div>
      <!-- /.thumb --> 
      <!-- .bio_details -->
      <div class="bio_details">
        <h2><a href="<?php echo $link?>"><?php the_title()?></a></h2>
        <?php the_excerpt(); ?>
        <a href="<?php echo $link?>" class="greenBtn"><span>read more &raquo;</span></a> </div>
      <div class="clear"></div>
	  </div>
	  <?php }} ?>
  </div>
  <!-- /#content --> 
<?php get_footer();?>