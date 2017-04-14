<?php
include "header.php";
?>

<div class="video-banner">
  <video playsinline autoplay muted loop poster="images/home-banner.jpg">
    <source src="images/home-banner.mp4" type="video/mp4">
  </video>

  <div class="site-width">
    LOUIE'S <?php echo $GLOBALS['eventnum']; ?> LAST REGATTA <?php echo date("Y", $GLOBALS['eventdate']); ?>

    <h1><?php echo date("F j", $GLOBALS['eventdate']); ?> AT HIGH NOON</h1>

    <img src="images/waves-white.png" alt="" class="waves">

    <div class="video-header-buttons">
      <a href="#">PLAY VIDEO <div class="play"></div></a>
      <a href="register.php" class="button">REGISTER NOW <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="home-dates">
  <div class="site-width">
    <div class="one-fourth">
      <div class="home-dates-number"></div>
      <div class="home-dates-date">Important Dates <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
      <img src="images/waves-black.png" alt="">
    </div>

    <div class="one-fourth">
      <div class="home-dates-number">01.</div>
      <div class="home-dates-date"><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['kickoff']); ?></div>
      <div class="home-dates-event">KICKOFF PARTY</div>
      MKE Ale House<br>
      At <?php echo date("g:i A", $GLOBALS['kickoff']); ?>
    </div>

    <div class="one-fourth">
      <div class="home-dates-number">02.</div>
      <div class="home-dates-date"><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['skippers']); ?></div>
      <div class="home-dates-event">SKIPPERS MEETING</div>
      MKE Ale House<br>
      At <?php echo date("g:i A", $GLOBALS['skippers']); ?>
    </div>

    <div class="one-fourth">
      <div class="home-dates-number">03.</div>
      <div class="home-dates-date"><?php echo date('l\<\sp\a\n>\<\/\sp\a\n>F j\<\s\up>S\<\/\s\up>', $GLOBALS['eventdate']); ?></div>
      <div class="home-dates-event">THE REGATTA</div>
      Lake Michigan off the Main Gap<br>
      At High Noon
    </div>
  </div>
</div>

<div class="home-logos">
  <div class="site-width">
    LOGOS GO HERE
  </div>
</div>

<?php include "footer.php"; ?>