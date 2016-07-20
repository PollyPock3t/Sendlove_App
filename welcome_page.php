 
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

	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1086407872431-qpipp55o376o2u16kuigqonco6oqsgao.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>

<body>

<!--Video Background
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
</div> -->
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

	<div onclick="run()" style="margin-top: -60px; position: relative; z-index: 1;" class="g-signin2" id="g-signin2" data-onsuccess="onSignIn"></div>

	<button id="next" style="visibility:hidden"><a href="http://sendlove.info/console.html">Next</a></button>

	  <script>

		// var hasBeenClicked = false;

		// document.getElementById('g-signin2').click(function(){
		//     hasBeenClicked = true;
		// });


		//  if (hasBeenClicked == true)
		//  {

		function run(){

		  // alert("Clicked");

			  document.getElementById("g-signin2").addEventListener("click", onSignIn);
		


	     	 function onSignIn(googleUser) {
			// console.log("testing");

	        // Useful data for your client-side scripts:
	        var profile = googleUser.getBasicProfile();
	        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	        console.log('Full Name: ' + profile.getName());
	        console.log('Given Name: ' + profile.getGivenName());
	        console.log('Family Name: ' + profile.getFamilyName());
	        console.log("Image URL: " + profile.getImageUrl());
	        console.log("Email: " + profile.getEmail());

	        // The ID token you need to pass to your backend:
	        var id_token = googleUser.getAuthResponse().id_token;
	        console.log("ID Token: " + id_token);

	        };
			document.getElementById("g-signin2").style.visibility = 'hidden';
			document.getElementById("next").style.visibility = 'visible';
		};
		 


</script>


</div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- <script src="API/obj/dbcon.php"></script> -->



</body>
</html>
