<?php
$GLOBALS['eventdate'] = strtotime('23 September 2017 12:00');
$GLOBALS['eventnum'] = "19<sup>th</sup>";
$GLOBALS['kickoff'] = strtotime('23 May 2017 17:30');
$GLOBALS['skippers'] = strtotime('22 September 2017 17:30');

if (!isset($TopDir)) $TopDir = "";

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Louie's Last Regatta<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php if (isset($BlogInc)) echo $BlogInc; ?>

    <link href="//fonts.googleapis.com/css?family=Montserrat:500,600,700,800,900|Open+Sans:600,700,800|Rubik:700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/icons.css?<?php if ($TopDir == "") echo filemtime('inc/icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.modal.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(".sticky-spacer").waypoint(function(direction) {
          $(".sticky-spacer").toggleClass("sticky", direction == "down");
          $(".llr-header").toggleClass("sticky", direction == "down");
        },{offset: -105});

        $('a[href="#sponsor"],a[href="#newsletter"]').click(function(event) {
          event.preventDefault();
          $(this).modal({ fadeDuration: 200, fadeDelay: 0 });
        });

        $(".menu [href]").each(function() {
          if (this.href == window.location.href) { $(this).addClass("current"); }
        });
      });
    </script>
  </head>
  <body>
    <div class="sticky-spacer"></div>

    <div class="llr-header<?php if (!isset($PageTitle)) echo " home"; ?>">
      <div class="site-width-small">
        <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Louie's Last Regatta" id="logo"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="menu">
          <ul>
            <li><a href="<?php echo $TopDir; ?>register.php">Register</a></li>
            <li><a href="<?php echo $TopDir; ?>giving.php">Giving</a></li>
            <li><a href="<?php echo $TopDir; ?>event.php">Event</a></li>
            <li><a href="<?php echo $TopDir; ?>kids-log"<?php if ($TopDir != "") echo " class=\"current\""; ?>>Kids Log</a></li>
            <li><a href="<?php echo $TopDir; ?>contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
