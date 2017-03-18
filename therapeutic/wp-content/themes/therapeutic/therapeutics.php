<?php 
/*
	Template Name: Therapist
*/

get_header();  
?>
  <!-- /#mainNav --> 
  <!-- #content -->
  <div id="content" class="therapist"> 
	<div class="profile full_profile"> 
      <!-- .thumb -->
	<?php
	 $img=get_post_meta($post->ID, 'Picture',true);
         $main_image=wp_get_attachment_image_src($img,array(152,152));
	?>
      <div class="thumb">
        <div class="the_img"><img src="<?php echo  $main_image[0]?>" alt="<?php echo $post->post_title; ?>" /></div>
      <a href="<?php echo get_permalink('4');?>" class="greenBtn"><span>our therapists</span></a>
      <a href="<?php echo get_permalink('18');?>" class="greenBtn"><span>make an enquiry</span></a>
    </div>
      <!-- /.thumb --> 
      <!-- .bio_details -->
      <div class="bio_details">
        <h2><?php  echo $post->post_title; ?></h2>
         <p><?php  echo $post->post_content; ?></p>
      </div>
      <div class="clear"></div>
      <!-- /.bio_details --> 
    </div>
    <!-- /.profile --> 
   <?php // }} ?>
  </div>
  <!-- /#content --> 
<?php get_footer();?>