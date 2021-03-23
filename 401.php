<?php
   include 'templates/template.php';
   ?>
<!DOCTYPE HTML>
<html lang="de">
   <head>
      <?php
         metadatenundco();
         ?>
      <title>Jan | 401</title>
      <?php
         datapackcolors();
         ?>
   </head>
   <body>
      <?php
         kopfzeile();
         ?>
      <div class="main">
         <h1>Ooops, 401!</h1>       
            <br><br>
	       Apparently you are unauthorized to access this page.<br><br>
          Back to <a href="/" class="link2">home.</a><br><br><br><br><br><br>
         </div>
      <?php
         fusszeile();
         ?>
      <?php
         cookiescript();
         ?>
   </body>
</html>