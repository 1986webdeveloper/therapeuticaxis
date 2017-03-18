<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Therapeutic Axis
 * @since Therapeutic Axis
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="cufon-active cufon-ready" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/style.css" />
<meta name="geo.placename" content="125 St Johns Rd, Glebe New South Wales 2037, Australia" />
<meta name="geo.position" content="-33.882142;151.184734" />
<meta name="geo.region" content="AU-New South Wales" />
<meta name="google-site-verification" content="Gu_Jqy5lg1OaIVfXHFotHniDb7-TM5AFaBLBbTJutoU" />

<meta name="ICBM" content="-33.882142, 151.184734" />
<!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie-6.css" media="all" />
    <![endif]-->
<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>


<?php
global $currentpage;
global $parentpageid;
global $childpage;
global $child;

if(has_children($post->ID))
{
$child="yes";
$currentpage = $post->ID;
}
else if($post->post_parent){
$parentpage=get_post_ancestors($post->ID);

$parentpageid=$parentpage[0];

$currentpage = $parentpage[0];

$childpage=$post->ID;

}
else{

$currentpage=$post->ID;
}

$topmenuclass="class='current'";
$mainmenuclass="class='current'";

?>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2672539-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_head(); ?>

</head>


<div id="wrap">
  <div id="topNav">
    <ul class="boxLink">
      <li <?php if($currentpage==47) echo $topmenuclass;?>><a href="<?php echo get_permalink('47');?>" class="theBlog"><span>our blog</span></a></li>
      <li <?php if($currentpage==4) echo $topmenuclass;?>><a href="<?php echo get_permalink('4');?>"><span>our therapists</span></a></li>
    </ul>
    <ul class="links">
      <li ><a href="<?php bloginfo('url');?>">Home <em>|</em></a></li>
      <li ><a href="<?php echo get_permalink('10');?>">About Us <em>|</em></a></li>
      <li ><a href="<?php echo get_permalink('12');?>">Join Our Practice <em>|</em></a></li>
      <li ><a href="<?php echo get_permalink('14');?>">Confidentiality <em>|</em></a></li>
      <li ><a href="<?php echo get_permalink('16');?>">Referrers <em>|</em></a></li>
      <li ><a href="<?php echo get_permalink('18');?>">Contact Us</a></li>
    </ul>
  </div>
  <!-- // #topNav -->
  <div id="header">
    <h1 class="logo" title="therapeuticaxis, centre for wellbeing"><a href="<?php bloginfo('url');?>">therapeuticaxis, centre for wellbeing</a></h1>
    <h6 class="info">(02) 9692 9788</h6>
    <div class="clear"></div>
  </div>
  <!-- #header --> 
  <!-- #mainNav -->
  <div class="mainNav">
    <div class="navbar-toggle">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="menu-txt">menu</span>
    </div>
    <ul class="main-navigation nav-collapse">
      <li <?php if($currentpage==22) echo $mainmenuclass;?>><a href="<?php echo get_permalink('22');?>"><span>Counselling &amp; Psychotherapy</span></a></li>
      <li <?php if($currentpage==24) echo $mainmenuclass;?>><a href="<?php echo get_permalink('24');?>"><span>Massage</span></a></li>
      <li <?php if($currentpage==26) echo $mainmenuclass;?>><a href="<?php echo get_permalink('26');?>"><span>Natural Therapies</span></a></li>
      <li <?php if($currentpage==28) echo $mainmenuclass;?>><a href="<?php echo get_permalink('28');?>"><span>Professional Development</span></a></li>
      <li <?php if($currentpage==30) echo $mainmenuclass;?>><a href="<?php echo get_permalink('30');?>"><span>Groups</span></a></li>
      <li class="last" <?php if($currentpage==32) echo $mainmenuclass;?> ><a href="<?php echo get_permalink('32');?>"><span>Online Counselling</span></a></li>
    </ul>
  </div>