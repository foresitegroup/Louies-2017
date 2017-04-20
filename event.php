<?php
$PageTitle = "Event";
include "header.php";
?>

<div class="banner">
  <div class="site-width">
    <h3><?php echo date("F j, Y", $GLOBALS['eventdate']); ?>, High Noon</h3>

    <h2>Louie's Last Regatta</h2>

    <div class="banner-text">
      Louie's is one of the nation's largest fund raising regattas on Lake Michigan in Milwaukee, WI. It is an open to all, fun oriented weekend of sailing and fundraising for Children's Hospital of Wisconsin that includes pre-race fundraising by boat, race and post-race dock side party.
    </div>

    LINKS HERE
  </div>
</div>

<div id="dates-and-times">
  <div class="site-width">
    DATES AND TIMES HERE
  </div>
</div>

<link rel="stylesheet" href="inc/swipebox/swipebox.css">
<script type="text/javascript" src="inc/swipebox/jquery.swipebox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".swipebox-video").swipebox({ autoplayVideos: true, videoMaxWidth : 1200 });
  });
</script>

<div class="slide-section" id="louies-story">
  <link rel="stylesheet" href="inc/slick/slick.css">
  <script type="text/javascript" src="inc/slick/slick.min.js"></script>
  <script type="text/javascript" src="inc/slick/slick.init.slide-section-slider.js"></script>

  <div class="slide-section-slider">
    <div style="background-image: url(images/register-slider1.jpg)"></div>
    <div style="background-image: url(images/register-slider2.jpg)"></div>
    <div style="background-image: url(images/register-slider3.jpg)"></div>
    <div style="background-image: url(images/register-slider4.jpg)"></div>
    <div style="background-image: url(images/register-slider5.jpg)"></div>
    <div style="background-image: url(images/register-slider6.jpg)"></div>
  </div>

  <i class="fg fg-waves"></i>

  <div class="site-width">
    <div class="slide-section-text">
      <h2>LOUIE'S LAST</h2>

      As one of the nation's largest fund raising regattas, Louies Last Regatta is an open to all, year end, fun oriented, annual Sailing Regatta on Lake Michigan, founded in 1999 by a group of Milwaukee Sailors who wanted one last sail before the end of the sailing season. To make the regatta more "attractive", the sailors turned the race into a charity event, raising roughly $900 in the first year.<br>
      <br>

      As time passed, popularity grew, and more sponsors and volunteers stepped forward the event grew from a few boats to  attract  hundreds of boats and thousands of participants to Milwaukee on a yearly basis.<br>
      <br>

      Louie's Last Regatta has gained national attention being named one of the top ten sailing events in the country and to date raising over $1 Million Dollars for Childrens Hospital of Wisconsin.<br>
      <br>

      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="swipebox-video">PLAY VIDEO</a>
    </div>
  </div>
</div>

<div id="awards">
  <div class="site-width">
    AWARDS HERE
  </div>
</div>

<div id="results">
  <div class="site-width">
    RESULTS HERE
  </div>
</div>

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

  <a href="#sponsor">BECOME A SPONSOR</a>
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

      <textarea name="comment" id="comment" placeholder="COMMENT"></textarea>

      <input type="submit" name="submit" value="SUBMIT">

      <input type="text" name="confirmationCAP" style="display: none;">
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
    </div>
  </form>
</div>

<?php include "footer.php"; ?>