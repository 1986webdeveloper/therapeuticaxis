<?php 

/*

Template Name: Counseling inner pages

*/



?>

<?php get_header();  ?>

<!-- #content -->

  <div id="content" class="counseling"> 

    <!-- .brownBox -->

    <div class="whiteBox">

	

	<h1 title="Counselling &amp; Psychotherapy"><?php  echo $post->post_title; ?> </h1>

      <!-- .col -->

		

	  

	  <div class="col1"> 

		<span class="hidden-list">Listing <span class="arrow"></span></span>
<ul class="sidebar-list white-list list-collapse">
       <?php 

			  	

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

					

				?>	

			 <br />

			 <br />

        <p>ph. 02 9692 9788 <a href="mailto:enquiries@therapeuticaxis.com.au">+ Email Us</a> <a href="<?php echo get_permalink('18');?>">+ Make an enquiry</a></p>
</ul>
      </div>

      <!-- /.col --> 

      <!-- .articles -->

      <div class="articles1">

        <p><?php  echo $post->post_content; ?></p>

      </div>

      <!-- /.articles -->

      <div class="clear"></div>

    </div>

    <!-- /.brownBox -->

	 

	

  </div>

  <!-- /#content --> 









<?php get_footer();?>