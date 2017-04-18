<?php
$GLOBALS['eventdate'] = strtotime('23 September 2017 12:00');
$GLOBALS['eventnum'] = "19<sup>TH</sup>";
$GLOBALS['kickoff'] = strtotime('23 May 2017 17:30');
$GLOBALS['skippers'] = strtotime('22 September 2017 17:30');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Louie's Last Regatta<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800,900|Open+Sans:700|Rubik:700,900" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="inc/jquery.modal.min.js"></script>
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
      });
    </script>
  </head>
  <body>
    <div class="sticky-spacer"></div>

    <div class="llr-header<?php if (!isset($PageTitle)) echo " home"; ?>">
      <div class="site-width-small">
        <a href="."><img src="images/logo.png" alt="Louie's Last Regatta" id="logo"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="menu">
          <ul>
            <li><a href="register.php">Register</a></li>
            <li><a href="giving.php">Giving</a></li>
            <li><a href="event.php">Event</a></li>
            <li><a href="blog">Kids Log</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
