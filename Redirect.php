<?php
   include 'templates/template.php';
   ?>
<!DOCTYPE HTML>
<html lang="de">
   <head>
      <?php
         metadatenundco();
         ?>
      <title>Jan | Redirect</title>
      <?php
         datapackcolors();
         ?>

<style>
.collapsible {
  background-color: #00000000;
  cursor: pointer;
  border: none;
  text-align: left;
  outline: none;
  font-family: 'Nunito', sans-serif;
  font-size: 1em;
  padding: 0px;
}

.active, .collapsible:hover {
  background-color: #00000000;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #00000000;
  font-family: 'Nunito', sans-serif;
  font-size: 1em;

}
</style>
   </head>
   <body>
      <?php
         kopfzeile();
         ?>
      <div class="main">
   <h1>Ooops, an error occured.</h1>
	learn 
<button type="button" class="collapsible link2">why</button>
<div class="content">
  <p>To ensure high website performance,<br>
	 we decided not to support
	 https://jan.gruettefien.com/<br>Cybertruck.php
	 by mobile devices.<br>
	 Please make sure to visit the page with a desktop PC or laptop.</p>
</div><br>
	 or<br>
	 go back to <a href="/" class="link2">home.</a>


      </div>
      <?php
         fusszeile();
         ?>
      <?php
         cookiescript();
         ?>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
   </body>
</html>