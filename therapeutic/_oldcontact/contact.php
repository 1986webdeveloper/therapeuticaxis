<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<title>therapeuticaxis - centre for wellbeing</title>
	
	<!-----------------------------------------------

'	Company: Artichoke Web Deisgn (www.artichokedesign.com.au)

'	Copyright © 2007, All rights reserved.


----------------------------------------------->
	
	<meta name="author" content="Artichoke Web Design">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="imagetoolbar" content="false">
	<meta name="MSSmartTagsPreventParsing" content="true">

	<link rel="stylesheet" type="text/css" href="inc/main.css" media="screen">

	<link rel="icon" type="image/gif" href="favicon.gif">

	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="inc/ie.css">
	<![endif]-->

<?php 
function check_email_address($email) {
// First, we check that there's one @ symbol, and that the lengths are right
if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
return false;
}
// Split it into sections to make life easier
$email_array = explode("@", $email);
$local_array = explode(".", $email_array[0]);
for ($i = 0; $i < sizeof($local_array); $i++) {
if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
return false;
}
}
if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
$domain_array = explode(".", $email_array[1]);
if (sizeof($domain_array) < 2) {
return false; // Not enough parts to domain
}
for ($i = 0; $i < sizeof($domain_array); $i++) {
if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
return false;
}
}
}
return true;
}
?>


	<script type="text/javascript" src="inc/javascript.js"></script>
</head>

<body id="theme1">

	<div id="wrap">

		<div id="header" class="float">

			<h1 id="logo"><a href="index.html" class="replace">Therapeutic Axis</a></h1>
			<h2 id="tagline" class="replace">Centre for wellbeing</h2>
			
			<ul class="nav">
				<li class="first"><a href="index.html">Home</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="JoinOurPractice.html">Join Our Practice</a></li>
				<li><a href="OurTherapists.html">Our Therapists</a></li>
				<li><a href="findus.html">Find Us</a></li>
			</ul>
			
			<p class="phone"><strong class="replace">phone (02) 9692 9788</strong></p>
			
			<p class="email"><a href="mailto:enquiries@therapeuticaxis.com.au"><strong>email us</strong></a></p>
			
			<span id="sidebird"><!-- --></span>

		</div><!-- / header -->

		<div id="nav" class="float">

			<ul class="nav">
				<li class="first" ><a href="CounsellingPsychotherapy.html" accesskey="1">Counselling &amp; Psychotherapy</a></li>
				<li class="active"><a href="Massage.html" accesskey="2">Massage</a></li>
				<li><a href="NaturalTherapies.html" accesskey="3">Natural Therapies</a></li>
				<li><a href="CorporateEmployeeAssistance.html" accesskey="4">Corporate &amp; Employee Assistance</a></li>
				<li><a href="Confidentiality.html" accesskey="5">Confidentiality</a></li>
				<li><a href="InformationforRefers.html" accesskey="6">Info for Referrers</a></li>
			</ul>
			
			<ul class="sub-nav">
				<li class="help"><a href="contactus.html" class="replace">help with finding a therapist</a></li>
				<li class="contact"><a href="contactus.html" class="replace">contact us</a></li>
			</ul>

		</div><!-- / nav -->

		<div id="body" class="float">
		
		  <div class="main-content">
		
				<h3 class="top hd1">Contact Us </h3>
				
				<div class="col-l">
				
					<h4 class="main-pic"><strong>Therapeutic Axis</strong><br>
					  125 St Johns Road<br>
				  Glebe&nbsp; NSW&nbsp; 2037</h4>
					<p class="main-pic">&nbsp;</p>
					<h4 class="main-pic">(located opposite the old Glebe Town Hall)</h4>
					<p class="main-pic">&nbsp;</p>
					<h4 class="main-pic">ph. 02 9692  9788 </h4>
					<h4 class="main-pic"><a href="mailto:enquiries@therapeuticaxis.com.au">+ Email Us</a></h4>
			</div><!-- / col-l -->
				
				<div class="col-r">
				  
				  
	
    
    
      <?php


	if(isset($_POST['submit'])) {

			//$to = "dennis@digitalgarden.com.au";
			$to = "enquiries@therapeuticaxis.com.au";
			$subject = "Therapeutic Axis Website Enquiry";
	
			$name_field = $_POST['name'];
			$email_field = $_POST['email'];
			$phone_field = $_POST['phone'];
			$type_field = $_POST['type'];
			$message_field = $_POST['message'];
			
			$from = "From: $name_field <$email_field>\n";
			$from .= "Reply-To: $name_field <$email_field>\n";
			
			$body = "Client Name: $name_field\n\n";
			$body .= "Phone Number: $phone_field\n\n";
			$body .= "Email Address: $email_field\n\n";
			$body .= "type: $type_field\n\n";
			$body .= "message: $message_field\n\n";
  
		if (check_email_address($email_field)) {
	
			echo '<p>&nbsp;</p><p>Thank you for submitting your request!</p>';
			mail($to, $subject, $body, $from);

		} else {
			echo '<p>&nbsp;</p><p style="color:#f00;">Please enter a valid email address.</p>';
			  ?>
				 <form method="POST" action="contact.php">
                    <table>
                    <tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $name_field ?>" size="19"></td></tr>
                    <tr><td>Email Address:</td><td><input type="text" name="email" value="<?php echo $email_field ?>" size="19"></td></tr>
                    <tr><td>Phone Number:</td><td><input type="text" name="phone" value="<?php echo $phone_field ?>" size="19"></td></tr>
                    <tr><td>Type of Therapy:</td>
                        <td>
                        <select name="type">
                            <option value="counselling">Counselling &amp; Psychotherapy</option>
                            <option value="massage">Massage</option>
                            <option value="naturaltherapies">Natural Therapies</option>
                            </select>
                        </td>
                    </tr>
		         	<tr><td>Message / Booking:</td><td><textarea name="message"><?php echo $message_field ?></textarea></td></tr>
                    <tr><td>&nbsp;</td><td align="right"><input type="submit" value="Submit" name="submit"></td></tr>
                    </table>
                </form>
			<?
		}

		} else {
	?>
    
    
    
    
    
    <p>Our qualified Client Contact staff are informative, honest  and supportive.&nbsp; Let them guide you  through the quick and casual process of finding a therapist best suited to  you.&nbsp; If you know the therapist you wish  to contact please email us or fill in the online enquiry form below, specifying  the therapist&rsquo;s name, your availability and best contact details.</p>
				  <p>Make an enquiry or booking below:</p>
                  
      <form method="POST" action="contact.php">
        <table>
        <tr><td>Name:</td><td><input type="text" name="name" size="25" class="field"></td></tr>
        <tr><td>Email:</td><td><input type="text" name="email" size="25" class="field"></td></tr>
        <tr><td>Phone:</td><td><input type="text" name="phone" size="25" class="field"></td></tr>
        <tr><td>Type of Therapy:</td>
        	<td>
        	<select name="type">
                <option value="counselling">Counselling &amp; Psychotherapy</option>
                <option value="massage">Massage</option>
                <option value="naturaltherapies">Natural Therapies</option>
                </select>
           	</td></tr>
         	<tr><td>Message / Booking:</td><td><textarea name="message"></textarea></td></tr>
            <tr><td>&nbsp;</td><td align="right"><input type="submit" value="Submit" name="submit"></td></tr>
        </table>
    </form>
    
    			 
	  
	  
	  
			      <h3><br>
				  Map</h3>
				    <p>				    <img src="img/map.gif" width="581" height="555"></p>
				  <p>&nbsp;</p>
	                <h3>TRANSPORT</h3>
	                <p><strong>BUSES</strong><br>
	              Sydney Buses 470  stops outside the door of Therapeutic Axis<br>
	                <a href="http://www.sydneybuses.info/commonpdfs/sydneybuses/tt/470tt.pdf">http://www.sydneybuses.info/commonpdfs/sydneybuses/tt/470tt.pdf</a></p>
	            <p>Sydney buses 431,  432,433 &amp; 434 stop on Glebe Point Road which is short walk away.<br>
                      <a href="http://www.sydneybuses.info/commonpdfs/sydneybuses/tt/431_432_433_434tt.pdf">http://www.sydneybuses.info/commonpdfs/sydneybuses/tt/431_432_433_434tt.pdf</a></p>
			        <p><strong>PARKING</strong><br>
		          On-street car parking is available close to Therapeutic  Axis.</p>
                    <?
}
?>

	        </div>
			  <!-- / col-r -->
				
		  </div><!-- / main-content -->
			
		  <div id="theme2">
			
				
		  </div>
		</div><!-- / body -->
		
		<br style="clear: both;" />

		<div id="footer" class="float">
		
			<div class="col-one">
			
				<h4>Counselling &amp; Psychotherapy</h4>
				
				<ul class="nav0">
					<li class="first"><a href="Relationshipcounselling.html">Relationship counselling</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Depression.html">Depression</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Grief.html">Grief & Loss</a></li><!--[if IE]>,<![endif]-->
					<li><a href="AngerManagement.html">Anger Management</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Trauma.html">Trauma</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Addictions.html">Addictions and Substance Abuse</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Anxiety.html">Anxiety</a></li><!--[if IE]>,<![endif]-->
					<li><a href="PanicAttacks.html">Panic Attacks</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Agoraphobia.html">Agoraphobia</a></li><!--[if IE]>,<![endif]-->
					<li><a href="PostTraumaticStressDisorder.html">Post Traumatic Stress Disorder (PTSD)</a></li><!--[if IE]>,<![endif]-->
					<li><a href="BipolarDisorder.html">Bipolar Disorder</a></li><!--[if IE]>,<![endif]-->
					<li><a href="ChildCounselling.html">Child Counselling</a></li><!--[if IE]>,<![endif]-->
					<li><a href="AdolescentCounselling.html">Adolescent Counselling</a></li><!--[if IE]>,<![endif]-->
					<li><a href="PostNatalDepression.html">Post Natal Depression</a></li><!--[if IE]>,<![endif]-->
					<li><a href="ObsessiveCompulsiveDisorder.html">Obsessive Compulsive Disorder (OCD)</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Medicare.html">Medicare and private health fund rebate</a></li>
				</ul>
			
			</div>
		
			<div class="col-two">
			
				<h4>Massage</h4>
				
				<ul class="nav0">
					<li class="first"><a href="Relaxation.html">Relaxation Massage</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Remedial.html">Remedial Massage</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Swedish.html">Swedish Massage</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Lymphatic.html">Lymphatic Drainage</a></li><!--[if IE]>,<![endif]-->
					<li><a href="HotStone.html">Hot Stone</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Myofacial.html">Myofacial Release</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Pregnancy.html">Pregnancy</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Shiatsu.html">Shiatsu</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Facial.html">Facial Cranial</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Aromatherapy.html">Aromatherapy Facial</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Indian.html">Indian Head Massage</a></li><!--[if IE]>,<![endif]-->
					<li><a href="rebatemassage.html">Health fund rebate</a></li><!--[if IE]>,<![endif]-->
				</ul>
			
			</div>
		
	<div class="col-three">
			
				<h4>Natural Therapies</h4>
				
				<ul class="nav0">
					<li class="first"><a href="Acupuncture.html">Acupuncture</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Chinese.html">Traditional Chinese Medicine (TCM)</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Herbal.html">Chinese Herbal Medicine</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Nutritional.html">Nutritional Counselling</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Reconnective.html">Reconnective Healing</a></li><!--[if IE]>,<![endif]-->
					<li><a href="rebatent.html">Health fund rebate</a></li><!--[if IE]>,<![endif]-->
				</ul>
			
			</div>
		
			<div class="col-four">
			
				<h4>Corporate</h4>
				
				<ul class="nav0">
					<li class="first"><a href="EmployeeAssistanceServices.html">Employee Assistance Services</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Leadership.html">Leadership Development and Coaching Programmes</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Career.html">Career Transition and Outplacement Services</a></li><!--[if IE]>,<![endif]-->
					<li><a href="Psychologicaltesting.html">Psychological Testing and Assessment</a></li><!--[if IE]>,<![endif]-->
				</ul>
			
			</div>

			<div class="col-five">
			
				<h4 id="logo-s"><a href="#" class="replace">Therapeutic Axis: Centre for Wellbeing</a></h4>
				
				<p class="replace phone"><strong>(02) 9692 9788</strong></p>
				
				<ul class="nav">
					<li><a href="links.html">+ Links</a></li>
					<li><a href="privacy.html">+ Privacy</a></li>
					<li><a href="members.html">+ Members Entry Point</a></li>
					<li><a href="mailto:enquiries@therapeuticaxis.com.au">+ Email Us</a></li>
					<li><a href="http://www.artichokedesign.com.au/">+ Design by Artichoke</a></li>
				    <li></li>
				</ul>

			</div>

		</div><!-- / footer -->

	</div><!-- / wrap -->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10960964-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</html>