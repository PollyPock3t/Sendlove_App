<!DOCTYPE html>
<html>
<head>
	<title>Post Date Email Service For Friends &amp; Family</title>
	<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom.css">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>

	<meta name="google-signin-client_id" content="sendLove.apps.googleusercontent.com">

	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="747430018143-r3mbv91409gkhq2lej04v10ktgnv3ahm.apps.googleusercontent.com">

</head>

<body>

<!--Video Background-->
	<!-- <video autoplay loop muted poster id="background">
     <source src="videos/Family_Video_4.mp4" type="video/mp4">
    </video> -->

<!--  <div> <img src="images/border.jpg" alt="Envlope Style Border" style="width:100%;"> </div> -->

<!--Navigation-->
<div class="container1">
	<div class="row">
	<div id="nav"class="col-md-4">
		<a href= "index.php"><h1 id="nav" style="line-height: 120px;">Send Love</h1></a>
	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
	  	<NAV>
			<ul class="nav">
				<li><a href="index.php">Previous</a></li>
				<li><a href="Signup.html">Save</a></li>
				<li><a href="console.html">Next</a></li></li>
			</ul>
		</NAV>
	</div>
	</div>
</div>
<!--End Navigation-->

<!--Box Conatiner-->


<div class="container4">

<!-- <div class="row">
	<div class="col-md-4">

	</div>

	<div class="col-md-4">
		<img style="width: 80%;" src="images/love_stamp.png">
	</div>

	<div class="col-md-4">
	</div>
</div> -->


<div class="row">
	<div class="col-md-12" >

	<p style="font-size: 25px; padding: 80px;">Let's start creating some great video emails with lots of love! Please sign in with your google account.</p> 

	<div style="margin-top: -60px;" class="g-signin2" data-onsuccess="onSignIn"></div>
</div>
</div>
</div>

<?php
	
	include_once("gmailAPI/signIn.php");
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- <script src="API/obj/dbcon.php"></script> -->



</body>
</html>