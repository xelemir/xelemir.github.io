<?php
function metadatenundco() {
?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Jan Malte Gr&uuml;ttefien">
	<meta name="copyright" content="Copyright &copy; 2020,
	of this and other documents in this domain. The use of material from this
	document is granted only for private use. You may not use the e-mail-adresses
	in this documents for commercial purposes.">
	<meta name="description" content="Die wildeste Website von Jan">
	<meta name="keywords" content="Jan Malte Gr&uuml;ttefien">
	<meta name="generator" content="vi">
	<script src="https://kit.fontawesome.com/c7751b3169.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/templates/stylesheet1.css">
	<link rel="icon" href="/media/jan.png">

<?php
}
?>


<?php
function datapackcolors() {
?>
	<style>
	:root	{
	--primary-color: #00303F;
	--secondary-color: #A6C4BC;
	--bg-color: #CAE4DB;
	--secondary-color-inverted: #366066;
	--positive-color: #107E3E;
	--negative-color: #BB0000;
	--background-image: url('/media/BG_light.png');
	--shadow-color: #808080;
	}
	[data-theme="dark"] {
	--primary-color: #000000;
	--secondary-color: #366066;
	--bg-color: #00303F;
	--secondary-color-inverted: #A6C4BC;
	--positive-color: #32D74B;
	--negative-color: #FF453A;
	--background-image: url('/media/BG_dark.png');
	--shadow-color: #000000;
	}

@media only screen and (max-width: 600px) {
    #desktopuser {
        display: none;
	}
	h1 {
        text-align: center;
	}
	.main {
		margin-left: 5%;
		margin-right: 5%;
		text-align: left;
	}
	.centered {
		text-align: center;
	}
}
@media only screen and (min-width: 600px) {
    #mobileuser {
        display: none;
	}
	.main {
        padding-left: 15%;
    }
}

	hr.line {
	  width: 80%;
	  border: 1px solid var(--primary-color);
	}
	</style>
<?php
}
?>


<?php
function kopfzeile() {
?>
	<div class="topnav" id="myTopnav">
	  <a class="active" href="/"><div class="link">Home</div><hr id="mobileuser" class="line"></a>
	  <a href="/Contact.php"><div class="link">Contact</div><hr id="mobileuser" class="line"></a>
	  <a href="/Launchpad.php"><div class="link">Launchpad</div><hr id="mobileuser" class="line"></a>
	  <a href="/Cybertruck.php"><div class="link">Cybertruck</div><hr id="mobileuser" class="line"></a>
	  <a href="javascript:void(0);" class="icon" onclick="myTopnavFunction()">
	  <i class="fa fa-bars"></i>
	  </a>
	  <div class="theme-switch-wrapper" style="padding: 25px;">
	  <label class="theme-switch" for="checkbox">
          <input type="checkbox" id="checkbox" />
          <div class="slider round schatten"></div>
	  </label>
	</div>
	</div>
	<script>
		const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
		const currentTheme = localStorage.getItem('theme');
		
		if (currentTheme) {
		    document.documentElement.setAttribute('data-theme', currentTheme);
		  
		    if (currentTheme === 'dark') {
		        toggleSwitch.checked = true;
		    }
		}
		
		function switchTheme(e) {
		    if (e.target.checked) {
		        document.documentElement.setAttribute('data-theme', 'dark');
		        localStorage.setItem('theme', 'dark');
		    }
		    else {        document.documentElement.setAttribute('data-theme', 'light');
		          localStorage.setItem('theme', 'light');
		    }    
		}
		
		toggleSwitch.addEventListener('change', switchTheme, false);
	</script>
	<script>
	  function myTopnavFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
	  }
	</script>
<?php
}
?>


<?php
function fusszeile() {
?>
	<div class="footer">
		<br>
		<a href="/privat" class="link">Login</a>&nbsp;&nbsp;
		<button class="soundbutton footer link" onClick="playAudio('media/sound.mp3')">Copyright © 2021</button>

		<script>
    	function playAudio(url) {
  			new Audio(url).play();
			}
		</script>
		&nbsp;&nbsp;
		<a href="/Imprint.php" class="link">Imprint</a><br>
		<!--<p id="datum"></p>--><br>

		<a href="https://time.is/Stuttgart" id="time_is_link"></a>
		<span id="Stuttgart_z704" style="font-size:30px"></span><br>
		<script src="//widget.time.is/t.js"></script>
		<script>
		time_is_widget.init({Stuttgart_z704:{}});
		</script>

	</div>
	<!--<script>
		var d = new Date();
		document.getElementById("datum").innerHTML = d;
	</script>-->
<?php
}
?>

<?php
function cookiescript() {
?>
	<script type="text/javascript" id="cookieinfo"
		src="/templates/cookieinfo.js"
		data-bg="#A6C4BC"
		data-fg="#00303F"
		data-link="#366066"
		data-cookie="CookieInfoScript"
		data-text-align="left"
	       data-close-text="Got it!">
	</script>
<?php
}
?>