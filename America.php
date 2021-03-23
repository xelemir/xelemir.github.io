<?php
   include 'templates/template.php';
   ?>
<!DOCTYPE HTML>
<html lang="de">
   <head>
      <?php
         metadatenundco();
         ?>
      <title>Jan | America</title>
      <?php
         datapackcolors();
         ?>
      <style>
	.rahmen {
	  padding-left: 25%;
	}
      </style>	
   </head>
   <body>
      <?php
         kopfzeile();
         ?>
      <div class="main">
	<h1>America</h1>
	Start your journey <a href="http://america.com/" class="link2">here.</a><br><br>
	<iframe class="schatten" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17071762.675568644!2d-104.65287670198884!3d37.25835697813357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUSA!5e1!3m2!1sde!2sde!4v1589056945459!5m2!1sde!2sde" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
       <br><br><br>
      <?php
         fusszeile();
         ?>
      <?php
         cookiescript();
         ?>
   </body>
</html>