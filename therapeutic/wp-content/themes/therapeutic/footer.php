<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content

 * after.  Calls sidebar-footer.php for bottom widgets.

 *



 * @subpackage Therapeutic Axis

 * @since Therapeutic Axis

 */

?>

<div id="footer"> 

    <!-- #fooNav -->

    <div class="mainNav">

      <ul>

        <li <?php if($currentpage==4) echo $topmenuclass;?>><a href="<?php echo get_permalink('4');?>"><span>our therapists</span></a></li>

        <li <?php if($currentpage==47) echo $topmenuclass;?>><a href="<?php echo get_permalink('47');?>"><span>our blog</span></a></li>

      </ul>

    </div>

    <!-- /#fooNav --> 

    <!-- .fooInner -->

    <div class="fooInner"> 

      <!-- .tags -->

      <div class="tags colFirst">

        <h3>Counselling &amp; Psychotherapy</h3>

        <ul>

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

		</div>

      <!-- /.tags --> 

      <!-- .tags -->

      <div class="tags colSec">

        <h3>Massage</h3>

       <ul>

               <?php 

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

			 ?>

	   

	   </div>

      <!-- /.tags --> 

      <!-- .tags -->

      <div class="tags colThird">

        <h3>Natural Therapies</h3>

        <ul>

               <?php 

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

			 ?>

		</div>

      <!-- /.tags --> 

      <!-- .tags -->

      <div class="tags colFourth">

        <h3>Corporate Health</h3>

        <ul>

               <?php 

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

			 ?>

		</div>

      <!-- /.tags --> 

      <!-- .fooInfo -->

      <div class="fooInfo">

        <h1 class="logo" title="therapeuticaxis, centre for wellbeing"><a href="<?php bloginfo('url');?>">therapeuticaxis, centre for wellbeing</a></h1>



        <h6 class="info"><cufon class="cufon cufon-canvas" alt="(02)" style="width: 36px; height: 21px; "><canvas width="57" height="26" style="width: 57px; height: 26px; top: -5px; left: -2px; "></canvas><cufontext>(02)</cufontext></cufon><cufon class="cufon cufon-canvas" alt=" 9692" style="width: 50px; height: 21px; "><canvas width="67" height="26" style="width: 67px; height: 26px; top: -5px; left: -2px; "></canvas><cufontext> 9692</cufontext></cufon><cufon class="cufon cufon-canvas" alt=" 9788" style="width: 50px; height: 21px; "><canvas width="67" height="26" style="width: 67px; height: 26px; top: -5px; left: -2px; "></canvas><cufontext> 9788</cufontext></cufon></h6>

        <ul>

         

          <li><a href="<?php echo get_permalink(415);?>">+ Terms and Condition</a></li>

        </ul>

	<a href="https://twitter.com/TherapeuticAxis" class="twitter-follow-button" data-show-count="false">Follow @TherapeuticAxis</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

      </div>

      <!-- /.fooInfo -->



      <div class="clear"></div>

<p class="powerdByTxt">&nbsp;</p>

    </div>

    <!-- /.fooInner --> 



  </div>





  <!-- /#footer --> 

  <script type="text/javascript"> Cufon.now(); </script> 

  <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/cufon-yui.js"></script> 

  <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/dr_400.font.js"></script> 

  <script type="text/javascript">

		Cufon.replace('h6');

	</script> 

  <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.min.js"></script> 

  <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/config.js"></script> 

  <!--[if lte IE 6]>

        <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>

        <script type="text/javascript" src="js/ie-PngFix.js"></script>

    <![endif]--> 

</div>





<div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(255, 255, 191); border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; color: rgb(0, 0, 0); margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; height: auto; line-height: normal; text-align: left; width: auto; direction: ltr; z-index: 99995; background-position: initial initial; background-repeat: initial initial; "></div>





<?php

	/* Always have wp_footer() just before the closing </body>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to reference JavaScript files.

	 */



	wp_footer();

?>

</body>

</html>