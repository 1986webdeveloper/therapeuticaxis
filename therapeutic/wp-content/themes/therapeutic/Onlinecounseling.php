<?php 
/*
Template Name: Online counseling
*/

?>
<?php get_header();  ?>
 <!-- #content -->
  <div id="content">
    <div class="brownBox counselingContent">

      <h1><?php  echo $post->post_title; ?> </h1>
     <?php  echo $post->post_content; ?>
    </div>
    <!-- .post -->
    <div class="clear"></div>
       <?php
		$pageID = 101;
		$page = get_post($pageID);
		
	?>
	
	<div class="post">
	  <h2><a href=""><?php echo $page->post_title; ?></a></h2>
      <p><?php  echo $page->post_content; ?></p>
    </div>
    <!-- /.post -->
    <div class="clear"></div>
  </div>
  <!-- /#content --> 
    <?php get_footer();?>