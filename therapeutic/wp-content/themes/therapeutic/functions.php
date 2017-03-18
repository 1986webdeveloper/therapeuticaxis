<?php
// add favicon to the site
function blog_favicon() {
	echo '<link rel="Shortcut icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');



function load_scripts() {
	if(!is_admin()){
		
		
		wp_enqueue_style( 'my_stylesheet', get_bloginfo('stylesheet_url'), false,'0.0', 'all' ) ;
		wp_enqueue_style( 'my_sidebarstylesheet', get_bloginfo('template_url').'/css/css.css', false,'0.0', 'all' ) ;
		
		
	
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.4.4.min.js', false);
		wp_enqueue_script('jquery');
		
		wp_enqueue_script('jquery_easing', get_bloginfo('template_url').'/js/jquery.easing.1.2.js', array('jquery'));
		
		
		
		wp_enqueue_script('jquery_scroll', get_bloginfo('template_url').'/js/jquery.scrollTo-1.3.3.js', array('jquery'));
		wp_enqueue_script('jquery_localscroll', get_bloginfo('template_url').'/js/jquery.localscroll-1.2.5.js', array('jquery'));
		wp_enqueue_script('jquery_serialscroll', get_bloginfo('template_url').'/js/jquery.serialScroll-1.2.1.js', array('jquery'));
		
		if(is_front_page())
		{
		wp_enqueue_style( 'cola_slider_style', get_bloginfo('template_url').'/css/coda-slider.css',false ) ;
		wp_enqueue_script('jquery_coda_slider', get_bloginfo('template_url').'/js/coda-slider.js', array('jquery'));
		}
		
		
		
		wp_enqueue_script('jquery_coda_slider', get_bloginfo('template_url').'/js/curvycorners.src.js', array('jquery'));
		
		

		
		/*  CUFON */
		wp_enqueue_script('cufon_yui', get_bloginfo('template_url').'/js/cufon-yui.js', array('jquery'));
		wp_enqueue_script('dr_400', get_bloginfo('template_url').'/js/dr_400.font.js', array('jquery'));
		wp_enqueue_script('db_500', get_bloginfo('template_url').'/js/db_500.font.js', array('jquery'));
		
		
		wp_enqueue_script('js_client_login', get_bloginfo('template_url').'/js/jquery.client.js', array('jquery'));
		
		wp_enqueue_script('my_common_js_file', get_bloginfo('template_url').'/js/common.js', array('jquery'));
		
		
	
			
		
		
		
	
		}
	
}    

add_action('template_redirect', 'load_scripts'); // load_scripts in all pages if condition (like is_admin() ) in not used.

//add_action('template_redirect', 'load_scripts');  // to load it in public pages only

function ilc_mce_buttons($buttons){
  array_push($buttons, "hr");
  return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");



/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Big Finish
 * @uses register_sidebar
 */
function has_children() {
	global $post;
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	return ($children) ? true : false;
}




function scs_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'scs' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'scs' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'scs' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'scs' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'scs' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'scs' ),
		'before_widget' => '',
		'after_widget' => '',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'scs' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'scs' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'scs' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'scs' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 6, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'scs' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'scs' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'scs_widgets_init' );


function wt_get_depth($id = '', $depth = '', $i = 0)
{
	global $wpdb;
	global $post;

	if($depth == '')
	{
		if(is_page())
		{
			
			if($id == '')
			{
				$id = $post->ID;
			}
			$depth = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = '".$id."'");
			return wt_get_depth($id, $depth, $i);
		}
	}
	elseif($depth == "0")
	{
		return $i;
	}
	else
	{
		$depth = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = '".$depth."'");
		$i++;
		return wt_get_depth($id, $depth, $i);
	}
}


if ( ! function_exists( 'scs_comment' ) ) :
function scs_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	
	$user = new WP_User( $comment->user_id );
	if($user->roles[0] == 'administrator')
	$user_role="admin";
	else
	$user_role=$user->roles[0];
	//print_r($user);
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li id="" class="comment">
		<div id="">
		
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'scs' ); ?></em>
			<br />
		<?php endif; ?>


		<div class="comment-body"><?php comment_text(); ?></div>

 		<div class="comment-author vcard"> <cite class="fn"><?php if($comment->user_id){ echo $user->first_name." ".$user->last_name." (".$user_role.") "; }else  echo get_comment_author();?> ></cite> on <span class="comment-meta commentmetadata"><?php echo get_comment_date('dS F Y');?></span> </div>

		

		


		<!--<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'scs' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div>--><!-- .comment-author .vcard -->

		</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'scs' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'scs'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;





// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


?>