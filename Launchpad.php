<?php
   include 'templates/template.php';
   ?>
<!DOCTYPE HTML>
<html lang="de">
   <head>
      <?php
         metadatenundco();
         ?>
      <title>Jan | Launchpad</title>
      <?php
         datapackcolors();
         ?>
      <style>
	.inline {
	  display: block;
	}
	
	img.desktop {
	  margin: 80px;	
	}
	img:hover {
	  animation: shake 0.5s;
	  animation-iteration-count: infinite;
	}
	
	@keyframes shake {
	  0% { transform: translate(1px, 1px) rotate(0deg); }
	  10% { transform: translate(-1px, -2px) rotate(-1deg); }
	  20% { transform: translate(-3px, 0px) rotate(1deg); }
	  30% { transform: translate(3px, 2px) rotate(0deg); }
	  40% { transform: translate(1px, -1px) rotate(1deg); }
	  50% { transform: translate(-1px, 2px) rotate(-1deg); }
	  60% { transform: translate(-3px, 1px) rotate(0deg); }
	  70% { transform: translate(3px, 1px) rotate(-1deg); }
	  80% { transform: translate(-1px, -1px) rotate(1deg); }
	  90% { transform: translate(1px, 2px) rotate(0deg); }
	  100% { transform: translate(1px, -2px) rotate(-1deg); }
	}
      </style>	
   </head>
   <body>
      <?php
         kopfzeile();
         ?>
<div id="desktopuser">
      <div style="text-align:center;">
	<h1>Launchpad</h1><br><br>
	<button onclick="location.href='https://youtube.com/'" type="button" class="btn schatten">YouTube</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button onclick="location.href='https://www.tesla.com/de_de'" type="button" class="btn schatten">Tesla</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button onclick="location.href='https://open.spotify.com/user/n0c39jatc5pksdv4rhxizx2xy'" type="button" class="btn schatten">Spotify</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button onclick="location.href='https://web.whatsapp.com/'" type="button" class="btn schatten">WhatsApp</button>

	<br><img src="/media/rocket.png" style="height:64px; width:auto;" onclick="location.href='https://www.spacex.com/'" class="desktop"><br>

	<button onclick="location.href='https://app.schul.cloud/#/chats/'" type="button" class="btn schatten">schul.cloud</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button onclick="location.href='https://instagram.com/'" type="button" class="btn schatten">Instagram</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button onclick="location.href='https://twitter.com/'" type="button" class="btn schatten">Twitter</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button onclick="location.href='https://drive.google.com/'" type="button" class="btn schatten">Google Drive</button>
      	<br><br><br><br><br><br>
      </div>
</div>

<div id="mobileuser">
      <div style="text-align:center;">
	<h1>Launchpad</h1><br><br>
	<button onclick="location.href='https://youtube.com/'" type="button" class="btn schatten">YouTube</button>

	<button onclick="location.href='https://www.tesla.com/de_de'" type="button" class="btn schatten">Tesla</button>

	<br>

	<button onclick="location.href='https://open.spotify.com/user/n0c39jatc5pksdv4rhxizx2xy'" type="button" class="btn schatten">Spotify</button>

	<button onclick="location.href='https://web.whatsapp.com/'" type="button" class="btn schatten">WhatsApp</button>

	<br><br><br><img src="/media/rocket.png" style="height:64px; width:auto;"><br><br>

	<button onclick="location.href='https://app.schul.cloud/#/chats/'" type="button" class="btn schatten">schul.cloud</button>

	<button onclick="location.href='https://instagram.com/'" type="button" class="btn schatten">Instagram</button>

	<br>

	<button onclick="location.href='https://twitter.com/'" type="button" class="btn schatten">Twitter</button>

	<button onclick="location.href='https://drive.google.com/'" type="button" class="btn schatten">Google Drive</button>
      </div>
</div>
      <?php
         fusszeile();
         ?>
      <?php
         cookiescript();
         ?>
   </body>
</html>