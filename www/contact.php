<?php

session_name("contact");
session_start();


/*$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}
*/

$success='';
if($_SESSION['sent'])
{
	$success='<p>Your mail has been sent.</p><p><strong>Thank you!</strong></p>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>FOR INDIA [contact]</title>
	<link rel="stylesheet" href="imagine-for-india/css/base.css" media="all" />
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="imagine-for-india/css/ie7.css" media="screen" />
	<![endif]-->
	<?=$css?>
	<link rel="shortcut icon" href="imagine-for-india/css/assets/favicon.ico" />
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-18397683-1']);
  		_gaq.push(['_trackPageview']);

  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
	</script>
</head>
<body>
	<noscript>
		<p></p>
	</noscript>
<div id="global-container">
<div id="express-menu">
	<div id="subtitle">
		<p> Structure of research and development</p>
	</div>
	<!--
	<div id="username">
		<p><span>Username</span></p>
	</div>
	<div id="password">
		<p><span>Password</span></p>
	</div>
	<div id="go"><a href="#"></a>
	</div>
	 -->
	 <div id="confidential">
		<p class="rouge"><span>Confidential space</span></p>
	</div>
	<div id="exit">
		<a href="./projects/index.html"class="exit"><span>GO</span></a>
	</div>
	<div id="links">
		<ul>
		<li><a href="contact.php"><span>contact</span></a></li>
		</ul>
	</div>
	</div>
<div id="header">
	<div id="header-elements">
		<span class="premium">imagine for india</span>
	
		<div id="link-home">
			<a href="index.html" title="HOME"></a>
		</div>
		<div id="zone-button-definition">
			<div id="all-definitions">
				<ul>
					<li class="first"><a href="index.html"><span>what is it ?</span></a></li>
					<li><a href="contribution.html"><span>contribution</span></a></li>
					<li><a href="icilaba-culture.html"><span>icilaba culture</span></a></li>
					<li><a href="education.html"><span>education</span></a></li>
					<li><a href="blog-cultures.html"><span>blog cultures</span></a></li>
					<li><a href="material-library.html"><span>material library</span></a></li>
					<li><a href="media-library.html"><span>media library</span></a></li>
					<li><a href="newsletters.html"><span>newsletters</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="wrapper">
		<div id="wrapper-elements">
			<div id="picture-principal" class="contact">
			<img src="./img/contact-illustration.gif" alt="Contact - Illustration" />
			</div>
			<div id="project-description" class="contact">
					<div id="title-project">
					<img src="./img/contact.png" alt="Contact" />
					</div>
					<div id="navigation" class="contact">
					
					<form id='contact-form' method="post" action="submit.php" enctype="multipart/form-data">
						<table border="0">
						<tr><td>
						<div id="identity"><label for="identity">Name<br>
  							<input name="identity" tabindex="1" size="20" type="text" id="identity">
  						</label></div>
  						</td><td width="15%">&nbsp;</td><td>
  						<div id="society"><label for="society">Society<br>
  							<input name="society" tabindex="3" size="20" type="text" id="society">
  						</label></div>
  						</td></tr>
  						<tr><td>
  						<div id="mail"><label for="mail">Email address<br>
  							<input name="mail" tabindex="2" size="20" type="text" id="mail">
  						</label></div>
						</td><td>&nbsp;</td><td>&nbsp;</td></tr>
						<tr><td colspan="3">
  						<div id="object"><label for='object'>Object<br>
  							<input type='text' name='object' id='object' tabindex='4' size='52'>
  						</label></div>
  						</td></tr>
  						<tr><td colspan="3">
  						<div id="message"><label for="message">Message<br>
  							<textarea tabindex="5" rows="5" cols="60" name="message" id="message"></textarea>
  						</label></div>
  						</td><tr>
  						<tr><td colspan="3">
  						<div id="submit"><input type="submit" value="Send" tabindex="6"/></div>
  						</td></tr>
  						</table>
					</form>
					<?=$success?>
					</div>	
			</div>
		</div>	
</div>
<div id="zone-button-project">
		<div id="zone-button-project-elements">
			<div id="all-projects">
			</div>
		</div>

</div>
<div id="footer">
	<p >&copy; 2010 icilaba culture. All Rights Reserved</p>
</div>	
</div>
</body>
</html>
