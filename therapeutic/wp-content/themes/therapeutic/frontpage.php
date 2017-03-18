<?php 
/*
Template Name: HomePage
*/

?>
<?php get_header();  ?>
<div id="intro">
    <?php
		$pageID = 20;
		$page = get_post($pageID);
		echo "<h1>$page->post_title</h1>";
	?>
	<?php  echo $post->post_content; ?>
  </div>
  <!-- /#intro --> 
  <!-- #content -->
  <div id="content"> 
  <?php 
    $page_id=20;
  	$page_details=get_post($page_id);
	     
  	$args=array(
				'post_parent'=>20,
				'post_type' => 'page',
				'post_status' => 'publish',
				'orderby' => 'menu_order',
				'order' => 'asc',
			   );
				$my_query = null;
				$my_query = new WP_Query($args);
			
			  if($my_query->have_posts()){
			  while($my_query->have_posts())
			   {
			    $my_query->the_post();
				$img=get_post_meta($post->ID, 'Picture',true);
			    $main_image=wp_get_attachment_image_src($img,array(120,120));
				//$position=get_post_meta($post->ID,'position',true);
				$link=get_post_meta($post->ID, 'link',true);
				$web=get_post_meta($post->ID, 'weblink',true);
		  	 ?>
  
    <!-- .box -->
    <div class="box"> 
      <!-- .post -->
      <div class="post">
        <h2><a href="<?php echo $link?>"><?php the_title()?></a></h2>
        <img src="<?php echo  $main_image[0]?>" alt="" />
        <?php the_content()?>
        <a href="<?php echo $link?>" class="more-link"><?php echo $web?></a> </div>
      <!-- /.post --> 
    </div>
    <!-- /.box --> 
	  <?php }} ?>
	
   
	  
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