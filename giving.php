<?php
$PageTitle = "Giving";
include "header.php";
?>

<div class="banner banner-giving">
  <div class="site-width">
    <h2>Giving Options</h2>

    <div class="banner-text">
      There are various giving options available to contribute to Louie's Last Regatta and Children's Hospital of Wisconsin. All money raised goes to Children's Hospital, get involved below!
    </div>

    <div class="hashtag">#ITSFORTHEKIDS</div>

    <a href="https://www.razoo.com/story/Louieslastregatta" class="button">DONATE TODAY!</a>
  </div>
</div>

<div class="giving-section">
  <i class="fg fg-waves"></i>

  <div class="site-width">
    <div class="column">
      <h3>01. GIVE NOW</h3>
      <h2>RAZOO ONLINE</h2>
      Use Razoo to make direct donations to Children's Hospital prior to and after the regatta.

      <i class="fg fg-boat"></i>

      <h4>BOAT CREW MEMBERS:</h4> can find, register and share their boat's donation link with crew, friends, family and/or co-workers.<br>
      <br>

      <a href="https://www.razoo.com/story/Louieslastregatta" class="button hollow">GIVE NOW</a>

    </div>

    <div class="column">
      <h3>02. GIVE DAY OF</h3>
      <h2>GREEN ENVELOPE</h2>
      Green Envelopes are given out to each registered boat to collect last minute donations the day of the race.<br>
      <br>

      Green Envelopes need to be turned in at the Ale House by 3:30pm on <?php echo date('l, F jS', $GLOBALS['eventdate']); ?>.
    </div>

    <div class="column">
      <h3>03. GIVE NIGHT OF</h3>
      <h2>THE RAFFLE</h2>
      Buy raffle tickets the day of the event for the chance to win a wide variety of great prizes at the post-race party.<br>
      <br>

      <h4>RAFFLE DONATIONS:</h4> If you are interested in donating an item for the Raffle &amp; Silent Auction and/or have questions please message us at <?php email("contactus@louieslast.org"); ?>.
    </div>
  </div>
</div>

<div class="slide-section giving">
  <link rel="stylesheet" href="inc/slick/slick.css">
  <script type="text/javascript" src="inc/slick/slick.min.js"></script>
  <script type="text/javascript" src="inc/slick/slick.init.slide-section-slider.js"></script>

  <div class="slide-section-slider">
    <div style="background-image: url(images/giving-slider1.jpg)"></div>
    <div style="background-image: url(images/giving-slider2.jpg)"></div>
    <div style="background-image: url(images/giving-slider3.jpg)"></div>
    <div style="background-image: url(images/giving-slider4.jpg)"></div>
    <div style="background-image: url(images/giving-slider5.jpg)"></div>
    <div style="background-image: url(images/giving-slider6.jpg)"></div>
  </div>

  <i class="fg fg-waves"></i>

  <div class="site-width">
    <div class="slide-section-text">
      <h2>IT'S FOR THE KIDS</h2>

      All money raised goes to Children's Hospital.
      <div class="small">Louie's Last Regatta, Inc. is a 501(c)3 charitable organization. The IRS issued EIN is: 27-0984021 - Date of exemption status September 23, 2009.</div><br>
      <br>

      <h3>VOLUNTEER OPPORTUNITIES</h3>
      We are always looking for extra hands on deck to help out in the weeks leading up to the day of the event. Please reach out to us if you are interested or want more information on volunteer opportunites:<br>
      <br>

      <?php email("contactus@louieslast.org"); ?>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>