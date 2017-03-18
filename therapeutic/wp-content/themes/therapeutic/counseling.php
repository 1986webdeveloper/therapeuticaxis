<?php 
/*
Template Name: Counseling
*/
?>

<?php get_header();  ?>
<!-- #content -->
  <div id="content" class="counseling"> 
    <!-- .brownBox -->
    <div class="brownBox">
	<h1 title="Counselling &amp; Psychotherapy"><?php  echo $post->post_title; ?> </h1>
      <!-- .col -->
	  <div class="col"> 
	  	<span class="hidden-list">Listing <span class="arrow"></span></span>
	  	<ul class="sidebar-list list-collapse">
		<?php 
			$img=get_post_meta($post->ID, 'Picture',true);
   		    $main_image=wp_get_attachment_image_src($img,array(120,120));
		  	 ?>
		  <img src="<?php echo  $main_image[0]?>" alt="therapetutic axis" />
       <?php 
  		if($post->post_title == 'Counselling & Psychotherapy'){
		$args = array(
			'child_of' => 22,
			'sort_order' => 'ASC',
			'sort_column' => 'menu_order'	
		);
		$submenus = get_pages($args);
		if($submenus){
		  foreach($submenus as $submenu){
            ?>
	  <li><a href="<?php echo get_permalink($submenu->ID);?>" ><?php echo $submenu->post_title;?></a></li>
	<?php    }
			wp_reset_query();					
		} 
	}
	if($post->post_title == 'Massage'){
		$args = array(
		'child_of' => 24,
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order'	
	);
	$submenus = get_pages($args);
	if($submenus){
	  foreach($submenus as $submenu){
        ?>
  <li><a href="<?php echo get_permalink($submenu->ID);?>" ><?php echo $submenu->post_title;?></a></li>
<?php    }
	wp_reset_query();					
	} 
	}
	if($post->post_title == 'Natural Therapies'){
		$args = array(
		'child_of' => 26,
		'sort_order' => 'ASC',
		'sort_column' => 'menu_order'	
	);
	$submenus = get_pages($args);
		if($submenus){
		foreach($submenus as $submenu){
        ?>
	  <li><a href="<?php echo get_permalink($submenu->ID);?>" ><?php echo $submenu->post_title;?></a></li>
  		<?php    }

	wp_reset_query();					
	} 
	}
	if($post->post_title == 'Corporate Health'){
					$args = array(
					'child_of' => 28,
					'sort_order' => 'ASC',
					'sort_column' => 'menu_order'	
					);
					$submenus = get_pages($args);
					if($submenus){
       				  foreach($submenus as $submenu){
             ?>
     		  <li><a href="<?php echo get_permalink($submenu->ID);?>" ><?php echo $submenu->post_title;?></a></li>
	<?php    }
						wp_reset_query();					
					} 
				}
			 ?>
			 <br />
			 <br />
        <p>ph. 02 9692 9788 <a href="mailto:enquiries@therapeuticaxis.com.au">+ Email Us</a> <a href="<?php echo get_permalink('18');?>">+ Make an enquiry</a></p>
    </ul>
      </div>
      <!-- /.col --> 
      <!-- .articles -->
      <div class="articles">
        <p><?php  echo $post->post_content; ?></p>
      </div>
      <!-- /.articles -->

      <div class="clear"></div>

    </div>

    <!-- /.brownBox -->

	 

	<?php 

	

	if($post->post_title == 'Counselling & Psychotherapy'){

    $page_id=109;

  	$page_details=get_post($page_id);	

	?>

    <h1 title="Our Therapists"><?php echo $page_details->post_title; ?></h1>

    <!-- .profile -->

	<?php

	     

  	$args=array(

				'post_parent'=>109,

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

				$link=get_post_meta($post->ID, 'link',true);

				

		  	 ?>

	

    <div class="profile"> 

      <!-- .thumb -->

      <div class="thumb"><img src="<?php echo  $main_image[0]?>" alt="rolf-ruhl" /></div>

      <!-- /.thumb --> 

      <!-- .bio_details -->

      <div class="bio_details">

        <h2><a href="<?php echo $link?>"><?php the_title()?></a></h2>

		

		<?php the_content()?>

        

        <a href="<?php echo $link?>" class="greenBtn"><span>read more &raquo;</span></a> </div>

      <div class="clear"></div>

      <!-- /.bio_details --> 

    </div>

	<?php }} } ?>

    <!-- /.profile --> 

    

		<?php 

	

	if($post->post_title == 'Massage'){

    $page_id=111;

  	$page_details=get_post($page_id);	

	?>

    <h1 title="Our Therapists"><?php echo $page_details->post_title; ?></h1>

    <!-- .profile -->

	<?php

	     

  	$args=array(

				'post_parent'=>111,

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

				$link=get_post_meta($post->ID, 'link',true);

				

		  	 ?>

	

    <div class="profile"> 

      <!-- .thumb -->

      <div class="thumb"><img src="<?php echo  $main_image[0]?>" alt="rolf-ruhl" /></div>

      <!-- /.thumb --> 

      <!-- .bio_details -->

      <div class="bio_details">

        <h2><a href="<?php echo $link?>"><?php the_title()?></a></h2>

		

		<?php the_content()?>

        

        <a href="<?php echo $link?>" class="greenBtn"><span>read more &raquo;</span></a> </div>

      <div class="clear"></div>

      <!-- /.bio_details --> 

    </div>

	<?php }} } ?>

    <!-- /.profile --> 

	

		<?php 

	

	if($post->post_title == 'Natural Therapies'){

    $page_id=113;

  	$page_details=get_post($page_id);	

	?>

    <h1 title="Our Therapists"><?php echo $page_details->post_title; ?></h1>

    <!-- .profile -->

	<?php

	     

  	$args=array(

				'post_parent'=>113,

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
				$link=get_post_meta($post->ID, 'link',true);
		  	 ?>
    <div class="profile"> 

      <!-- .thumb -->

      <div class="thumb"><img src="<?php echo  $main_image[0]?>" alt="rolf-ruhl" /></div>

      <!-- /.thumb --> 
      <!-- .bio_details -->
      <div class="bio_details">
        <h2><a href="<?php echo $link?>"><?php the_title()?></a></h2>
		<?php the_content()?>
        <a href="<?php echo $link?>" class="greenBtn"><span>read more &raquo;</span></a> </div>
      <div class="clear"></div>
      <!-- /.bio_details --> 
  </div>
	<?php }} } ?>
    <!-- /.profile --> 
	<?php 
	if($post->post_title == 'Corporate Health'){
		$page_id=115;
		$page_details=get_post($page_id);	
	?>
    <h1 title="Our Therapists"><?php echo $page_details->post_title; ?></h1>
    <!-- .profile -->
	<?php
	 	$args=array(
				'post_parent'=>115,
				'post_type' => 'page',
				'post_status' => 'publish',
				'orderby' => 'menu_order',
				'order' => 'asc',
			   );
				$my_query = null;
				$my_query = new WP_Query($args);
	  if($my_query->have_posts()){
			while($my_query->have_posts()){
			$my_query->the_post();
			$img=get_post_meta($post->ID, 'Picture',true);
			$main_image=wp_get_attachment_image_src($img,array(120,120));
	    		$link=get_post_meta($post->ID, 'link',true);
		  	 ?>
    <div class="profile"> 
      <!-- .thumb -->
      <div class="thumb"><img src="<?php echo  $main_image[0]?>" alt="rolf-ruhl" /></div>
      <!-- /.thumb --> 
      <!-- .bio_details -->
      <div class="bio_details">
        <h2><a href="<?php echo $link?>"><?php the_title()?></a></h2>
		<?php the_content()?>
        <a href="<?php echo $link?>" class="greenBtn"><span>read more &raquo;</span></a> </div>
      <div class="clear"></div>
      <!-- /.bio_details --> 
    </div>
	<?php }} } ?>
    <!-- /.profile --> 
  </div>
  <!-- /#content --> 
<?php get_footer();?>