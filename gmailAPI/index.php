<?php 

include("quickstart.html");
include("signIn.js");
include("signOut.js");


<div class="row">
	<div class="col-md-12" >

	<p style="font-size: 25px; padding: 80px;">Let's start creating some great video emails with lots of love! Please sign in with your google account.</p> 

	<div style="margin-top: -60px; position: relative; z-index: 10000;" class="g-signin2" id="g-signin2" data-onsuccess="onSignIn"></div>

	  <script>

	  // gapi.load('auth2',function(){
	  // 	gapi.auth2.getAuthInstance()
	  // });	

	  // document.getElementById('g-signin2').onclick=onSignIn('test');


	document.getElementById("g-signin2").addEventListener("click", onSignIn, true);
	

      function onSignIn(googleUser) {
		console.log("testing");

        // // Useful data for your client-side scripts:
        // var profile = googleUser.getBasicProfile();
        // console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        // console.log('Full Name: ' + profile.getName());
        // console.log('Given Name: ' + profile.getGivenName());
        // console.log('Family Name: ' + profile.getFamilyName());
        // console.log("Image URL: " + profile.getImageUrl());
        // console.log("Email: " + profile.getEmail());

        // // The ID token you need to pass to your backend:
        // var id_token = googleUser.getAuthResponse().id_token;
        // console.log("ID Token: " + id_token);
      };








?>