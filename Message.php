<?php
if($_POST["submit"]) {
    $recipient="website.jan.gruettefien@gmail.com";
    $subject="Message from Website";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

<?php
	include 'templates/template.php';
	?>

<!DOCTYPE HTML>
<html lang="de">

<head>
  <?php
	metadatenundco();
	?>

  <title>Jan | Message</title>

  <?php
	datapackcolors();
	?>

  <style>
    .submit:hover {
      background-color: var(--positive-color);
    }

    .reset:hover {
      background-color: var(--negative-color);
    }


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

    .active,
    .collapsible:hover {
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

    .outline {
      background-color: var(--secondary-color);
      opacity: 1;
      font-size: 20px;
      border-radius: 5px;
      cursor: text;
      font-family: 'Nunito', sans-serif;
      border-style: none;
      color: var(--primary-color);
      padding: 0.6em;
      transition: 0.5s;
    }

    .border {
      border-style: solid;
      border-width: 1px;
      border-color: var(--bg-color);
    }

    .center  {
      padding-left: 2%;
    }

    .formular2 {
      background-color: var(--bg-color);
      opacity: 1;
      font-size: 20px;
      border-radius: 5px;
      cursor: text;
      font-family: 'Nunito', sans-serif;
      border-style: none;
      color: var(--primary-color);
      padding: 0.6em;
      transition: 0.5s;
    }

    .btn2 {
      border: none;
      color: var(--primary-color);
      padding: 14px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.5s;
      border-radius: 5px;
      margin: 5px 5px 5px 5px;
      cursor: pointer;
      width: 140px;
      opacity: 1;
      background-color: var(--bg-color);
      font-weight: bold;
      text-decoration: none;
      display: inline;
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body>

  <?php
	kopfzeile();
	?>

  <!-- Desktop only -->

  <div id="desktopuser">
    <div style="padding-left: 15%;">

      <h1>Send me a Message</h1>
      <font size="2em">Read our privacy guidelines</font>
      <button type="button" class="collapsible link2">
        <font size="2em">here.</font>
      </button>
      <div class="content">
        <p><font size="2em">
          Please note, all data (name, email, message) entered in this form<br>
          will be visible to <a href="/Contact.php" class="link2">us.</a><br><br>
          Your data will only be used<br>
          to contact you if required.<br><br>
          We won't publish any of your data.</font>
        </p>
      </div>
      <form method="post" action="Message.php">
        <table class="outline schatten" cellspacing="20" cellpadding="5">
          <tr>
            <th valign="top"><label>
                <p style="text-align:left; padding-left:1.5em;">Name:</p>
              </label></th>
            <th valign="bottom"><textarea style="resize: none; font-family: 'Nunito', sans-serif;" rows="1" cols="20"
                name="sender" placeholder="Your name" class="formular2 schatten border" size="20"></textarea></th>
          </tr>
          <tr>
            <th valign="top"><label>
                <p style="text-align:left; padding-left:1.5em;">Email:</p>
              </label></th>
            <th valign="bottom"><textarea style="resize: none; font-family: 'Nunito', sans-serif;" rows="1" cols="20"
                name="senderEmail" placeholder="Your email address" class="formular2 schatten border"
                size="20"></textarea></th>
          </tr>
          <tr>
            <th valign="top"><label>
                <p style="text-align:left; padding-left:1.5em;">Message:</p>
              </label></th>
            <th valign="bottom"><textarea style="resize: none; font-family: 'Nunito', sans-serif;" rows="5" cols="20"
                name="message" placeholder="Your message" class="formular2 schatten border"></textarea></th>
          </tr>
          <tr>
            <th>
              <p style="text-align: center;"><input type="submit" name="submit" value="Send"
                  class="btn2 submit schatten border"></input></p>
            </th>
            <th>
              <p style="text-align: center;"><input type="reset" value="Cancel"
                  class="btn2 reset schatten border"></input></p>
            </th>
          </tr>
        </table>
      </form>
      <p style="text-align: center"><?=$thankYou ?></p>
    </div>
  </div>

  <!-- Mobile only-->

  <div id="mobileuser">
      <h1>Send me a Message</h1>
      <div style="padding-left: 5%;">
        <font size="2em">Read our privacy guidelines</font>
        <button type="button" class="collapsible link2">
          <font size="2em">here.</font>
        </button>
        <div class="content">
          <p>
            <font size="2em">
              Please note, all data (name, email, message) entered in this form will be visible to <a href="/Contact.php" class="link2">us.</a><br>
              Your data will only be used to contact you if required.<br>
              We won't publish any of your data.
            </font>
          </p>
        </div>
      </div>
      <div class="center">
      <form method="post" action="Message.php">
        <table class="outline schatten" cellspacing="3" cellpadding="3">
          <tr>
            <th valign="top"><label>
                <p style="text-align:left; padding-left:1.5em;">Name:</p>
              </label></th>
            <th valign="bottom"><textarea style="resize: none; font-family: 'Nunito', sans-serif;" rows="1" cols="10"
                name="sender" placeholder="Your name" class="formular2 schatten border" size="20"></textarea></th>
          </tr>
          <tr>
            <th valign="top"><label>
                <p style="text-align:left; padding-left:1.5em;">Email:</p>
              </label></th>
            <th valign="bottom"><textarea style="resize: none; font-family: 'Nunito', sans-serif;" rows="1" cols="10"
                name="senderEmail" placeholder="Your email" class="formular2 schatten border" size="20"></textarea></th>
          </tr>
          <tr>
            <th valign="top"><label>
                <p style="text-align:left; padding-left:1.5em;">Message:</p>
              </label></th>
            <th valign="bottom"><textarea style="resize: none; font-family: 'Nunito', sans-serif;" rows="5" cols="10"
                name="message" placeholder="Your message" class="formular2 schatten border"></textarea></th>
          </tr>
          <tr>
            <th>
              <p style="text-align: center;"><input type="submit" name="submit" value="Send"
                  class="btn2 submit schatten border"></input></p>
            </th>
            <th>
              <p style="text-align: center;"><input type="reset" value="Cancel"
                  class="btn2 reset schatten border"></input></p>
            </th>
          </tr>
        </table>
      </form>
      <p style="text-align: center"><?=$thankYou ?></p>
  </div>
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
      coll[i].addEventListener("click", function () {
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