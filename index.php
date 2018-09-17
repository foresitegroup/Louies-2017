<?php
include "header.php";
?>

<link rel="stylesheet" href="inc/swipebox/swipebox.css">
<script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".swipebox-video").swipebox({ autoplayVideos: true, videoMaxWidth : 1200 });
  });
</script>

<div class="video-banner">
  <video playsinline autoplay muted loop poster="images/home-banner.jpg">
    <source src="images/home-banner.mp4" type="video/mp4">
  </video>

  <div class="site-width">
    LOUIE'S <?php echo $GLOBALS['eventnum']; ?> LAST REGATTA <?php echo date("Y", $GLOBALS['eventdate']); ?>

    <h1><?php echo date("F j", $GLOBALS['eventdate']); ?> AT HIGH NOON</h1>
    
    <i class="fg fg-waves"></i>

    <div class="video-header-buttons">
      <a href="https://vimeo.com/192156399" class="swipebox-video">PLAY VIDEO</a>
      <a href="register.php" class="button">REGISTER NOW</a>
    </div>
  </div>
</div>

<div class="hat">
  <a href="http://louieslast.on-timetees.com">GET YOUR LOUIE'S COMMEMORATIVE HAT HERE</a>
</div>

<div class="home-dates">
  <div class="site-width">
    <div class="one-fourth">
      <div class="home-dates-number"></div>
      <div class="home-dates-date">Important Dates <i class="fg fg-arrow-right"></i></div>
      <i class="fg fg-waves"></i>
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

<link rel="stylesheet" href="inc/slick/slick.css">
<script type="text/javascript" src="inc/slick/slick.min.js"></script>
<script type="text/javascript" src="inc/slick/slick.init.sponsor-slider.js"></script>

<div class="sponsors">
  <div class="sponsors-slider">
    <div class="sponsor"><img src="images/logo-chw.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mount-gay.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mke-ale-house.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-harken.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-boelter.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mke-yacht-club.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-ssyc.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-mke-brewing-co.png" alt=""></div>
    <div class="sponsor"><img src="images/logo-foresite.png" alt=""></div>
  </div>

  <a href="#sponsor" rel="nofollow">BECOME A SPONSOR</a>
</div>

<div id="sponsor" class="site-width-small">
  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#sponsor-form');
      var formMessages = $('#sponsor-form-messages');
      $(form).submit(function(event) {
        event.preventDefault();
        
        function formValidation() {
          if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
          if ($('#email').val() === '') { alert('Email address required.'); $('#email').focus(); return false; }
          if ($('#phone').val() === '') { alert('Phone required.'); $('#phone').focus(); return false; }
          if ($('#comment').val() === '') { alert('Comment required.'); $('#comment').focus(); return false; }
          return true;
        }
        
        if (formValidation()) {
          var formData = $(form).serialize();
          formData += '&src=ajax';

          $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
          })
          .done(function(response) {
            $(formMessages).html(response);
            $(form).find('input:text, textarea').val('');
            $('input:checkbox').removeAttr('checked');
            $('#phone').val('');
            $('#email').val('');
          })
          .fail(function(data) {
            if (data.responseText !== '') {
              $(formMessages).html(data.responseText);
            } else {
              $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
          });
        }
      });
    });
  </script>

  <?php
  // Settings for randomizing form field names
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "LouiesSponsorForm";
  ?>

  <h2>BECOME A SPONSOR</h2>

  <div id="sponsor-form-messages"></div>

  <form action="form-sponsor.php" method="POST" id="sponsor-form">
    <div>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="NAME">

      <input type="text" name="<?php echo md5("organization" . $ip . $salt . $timestamp); ?>" id="organization" placeholder="ORGANIZATION / COMPANY">

      <div style="clear: both;"></div>

      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="EMAIL ADDRESS">

      <input type="tel" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="PHONE">

      <div style="clear: both;"></div>

      <div class="header">WE ARE INTERESTED IN:</div>
      <input type="checkbox" name="interest[]" id="int-money" value="Donating money">
      <label for="int-money">Donating money</label>

      <input type="checkbox" name="interest[]" id="int-time" value="Donating time">
      <label for="int-time">Donating time</label>

      <input type="checkbox" name="interest[]" id="int-raffle" value="Contributing raffle item(s)">
      <label for="int-raffle">Contributing raffle item(s)</label>

      <input type="checkbox" name="interest[]" id="int-other" value="Other">
      <label for="int-other">Other</label>

      <br>

      <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="COMMENT"></textarea>

      <input type="submit" name="submit" value="SUBMIT">

      <input type="text" name="confirmationCAP" style="display: none;">
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
    </div>
  </form>
</div>

<?php include "footer.php"; ?>