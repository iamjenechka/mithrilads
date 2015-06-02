<?php 
	$email = "gmail.com";
	$subject = "New message";
	$message = "Name: ". $_GET["name"] ."\nE-mail: ". $_GET["email"];
	if($_GET["form"] == "yes"):
		if(!mail($email, $subject, $message)):
			$_GET["form"] = "no";
		endif;
	endif;
?><!doctype html>
<html lang="en">
<head>


	<title>Mithrilads - implicity + Quality + Flexibility = Result</title>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">	
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<meta name="viewport" content="width=device-width; initial-scale=0.85; maximum-scale=0.85; user-scalable=0;" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
			var currentheight = $(window).height();
			if (currentheight > 600) {
				$('#wrapper').css('margin-top', (currentheight-600)/2);
				} else {
					$('#wrapper').css('margin-top', 0);			
			}
			$(window).resize(function() {
				var currentheight = $(window).height();				
				if (currentheight > 600) {
					$('#wrapper').css('margin-top', (currentheight-600)/2);
				} else {
					$('#wrapper').css('margin-top', 0);			
				}
			});
		});		
   </script>
</head>
<body>
	<div id="wrapper">
		<div id="cell">
			<header>
				<div id="logo"><a href="http://partners.mithrilads.com" target="_blank" "   title='Simplicity + Quality + Flexibility = Result'><img src="images/logo.png"></a></div>
			</header>
			<section>
			<?php if($_GET["form"] == "yes"): ?>
				<h1>Great</h1>
				<img src="images/great.png" alt="Great" class="aligncenter">
				<p>MithrilAds Team connect with you in short time<br><strong>Thank you!</strong></p>
			<?php else:?>
				<form action="" method="get">
					<input type="text" name="name" placeholder="Your name" title='Your name'>
					<input type="text" name="email" placeholder="E-mail" title='E-mail'>
					<input type="hidden" name="form" value="yes" >
					<input type="submit" value="I am ready!" title='I am a ready!'>
				</form>
			<?php endif; ?>
			</section>
		</div>
	</div>
	<footer>
		<p><b>&copy; by Mithrilads 2014</b>  </p>
		<ul id="social">
			<li><a href="https://www.facebook.com/mithrilads  "target='_blank' title='Facebook'" class="facebook"></a></li>

<li><a href="http://vk.com/mithrilads"target='_blank'   class="vk" title='Vk'></a></li>
	<li><a href="https://www.linkedin.com/groups/Mithril-Ads-6697123"  target='_blank' class="in" title='Linkedin'></a></li>
		</ul>
	</footer>
</body>
</html>
