<?php
   include 'templates/template.php';
   ?>
<!DOCTYPE HTML>
<html lang="de">

<head>
    <?php
         metadatenundco();
         ?>
    <title>Jan</title>
    <?php
         datapackcolors();
         ?>
    <style>
        textarea:focus,
        input:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <?php
         kopfzeile();
         ?>

    <div class="main centered">
        <h1>
            <p id="welcome"></p>
        </h1>
        <br>
        <br>
        <script>
            var today = new Date().getHours();
            if (today >= 3 && today <= 21) {
                var x = Math.floor((Math.random() * 4) + 1);
                if (x == 1) {
                    nachricht = "Shouldn't you be working for school?";
                } else if (x == 2) {
                    nachricht = "Hello there. General Kenobi.";
                } else if (x == 3) {
                    nachricht = "Hey Google, fuck off.";
                } else {
                    nachricht = "Wassup, cunt?";
                }
            } else {
                var t = Math.floor((Math.random() * 4) + 1);
                if (t == 1) {
                    nachricht = "Pretty late, huh?";
                } else if (t == 2) {
                    nachricht = "See ya tomorrow.";
                } else if (t == 3) {
                    nachricht = "Sleep well.";
                } else {
                    nachricht = "Good night.";
                }
            }
            document.getElementById("welcome").innerHTML = nachricht;
        </script>
        <script type="text/javascript">
            function sendForm(ziel) {
                var inp = document.searchForm.search.value;
                if (ziel == "Text") {
                    if ((inp.substring(0, 7) == "http://") || (inp.substring(0, 8) == "https://")) {
                        ziel = "Adresse";
                    } else if (inp.substring(0, 4) == "www.") {
                        ziel = "Adresse";
                    } else {
                        ziel = "Google";
                    }
                }
                if (ziel == "Adresse") {
                    if ((inp.substring(0, 7) == "http://") || (inp.substring(0, 8) == "https://")) {
                        window.location = (document.searchForm.search.value);
                    } else {
                        window.location = ("http://" + document.searchForm.search.value);
                    }
                } else if (ziel == "Wikipedia") {
                    if (inp == "") {
                        window.location = ("https://de.wikipedia.org/");
                    } else {
                        window.location = ("http://de.wikipedia.org/w/index.php?search=" + document.searchForm.search
                            .value);
                    }
                } else if (ziel == "Google") {
                    window.location = ("https://www.google.de/search?q=" + document.searchForm.search.value +
                        "&hl=de&ie=UTF-8");
                } else if (ziel == "Google.com") {
                    window.location = ("https://www.google.com/search?q=" + document.searchForm.search.value +
                        "&hl=de&ie=UTF-8");
                } else if (ziel == "GoogleB") {
                    window.location = ("https://www.google.de/search?q=" + document.searchForm.search.value +
                        "&hl=de&ie=UTF-8&tbm=isch");
                } else if (ziel == "GoogleM") {
                    window.location = ("https://maps.google.de/maps?q=" + document.searchForm.search.value +
                        "&hl=de&ie=UTF-8");
                } else if (ziel == "YouTube") {
                    if (inp == "") {
                        window.location = ("https://www.youtube.com/");
                    } else {
                        window.location = ("https://www.youtube.com/results?search_query=" + document.searchForm.search
                            .value + "&hl=de&ie=UTF-8");
                    }
                } else if (ziel == "Tesla") {
                    window.location = ("https://www.tesla.com/de_de");
                } else if (ziel == "Apple") {
                    window.location = ("https://www.apple.com/de/");
                } else if (ziel == "Samsung") {
                    window.location = ("https://www.samsung.com/de/");
                } else if (ziel == "schulcloud") {
                    window.location = ("https://app.stashcat.com/#/chats/");
                } else if (ziel == "JKG") {
                    window.location = ("http://www.jkg-stuttgart.de/index.php/de/");
                } else if (ziel == "WhatsApp") {
                    window.location = ("https://web.whatsapp.com/");
                }
                return false;
            }
        </script>
        <form method="get" action="" name="searchForm" accept-charset="utf-8" autocomplete="off">
            <input id="Text" class="formular schatten" placeholder="Search with Google" name="search" value=""
                onkeydown="if (event.keyCode == 13) { sendForm(this.id); return false; }" />
            <br><br>
            <p><b>Or use:</b></p>
            <button id="Wikipedia" type="button" onClick="sendForm(this.id)" class="btn schatten">Wikipedia</button>
            <!--<button id="Google" type="button" onClick="sendForm(this.id)" class="btn schatten">Google.de</button>-->
            <span id="desktopuser"><button id="Google.com" type="button" onClick="sendForm(this.id)"class="btn schatten">Google.com</button></span>
            <button id="GoogleB" type="button" onClick="sendForm(this.id)" class="btn schatten">Image Search</button>
            <button id="GoogleM" type="button" onClick="sendForm(this.id)" class="btn schatten">Google Maps</button>
            <button id="YouTube" type="button" onClick="sendForm(this.id)" class="btn schatten">YouTube</button>
        </form>
        <br>
        <p><b>Shortcuts:</b></p>
        <button id="Tesla" type="button" onClick="sendForm(this.id)" class="btn schatten">Tesla</button>
        <button id="Apple" type="button" onClick="sendForm(this.id)" class="btn schatten">Apple</button>
        <!--<button id="Samsung" type="button" onClick="sendForm(this.id)" class="btn schatten">Samsung</button>-->
        <button id="schulcloud" type="button" onClick="sendForm(this.id)" class="btn schatten">schul.cloud</button>
        <button id="JKG" type="button" onClick="sendForm(this.id)" class="btn schatten">JKG</button>
        <!--<span id="desktopuser"><button id="WhatsApp" type="button" onClick="sendForm(this.id)" class="btn schatten">WhatsApp</button></span>-->
        <br><br>
    </div>
    <div id="desktopuser"><br><br>
    </div>
    <?php
         fusszeile();
         ?>
    <?php
         cookiescript();
         ?>
    <!--Sound API -->
    <iframe src="media/silence.mp3" type="audio/mp3" allow="autoplay" id="audio" style="display:none"></iframe>
    <audio autoplay>
    <source src="media/ht.mp3" type="audio/mp3">
    </audio>
</body>

</html>