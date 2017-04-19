<?php
$PageTitle = "Register";
include "header.php";
?>

<div class="banner">
  <div class="site-width">
    <h3>Register now through <?php echo date("F j, Y", $GLOBALS['eventdate']-86000); ?></h3>

    <h2>Enter The Race</h2>

    <div class="banner-text">
      To register for Louies <?php echo $GLOBALS['eventnum']; ?> Last Regatta on <?php echo date("F j, Y", $GLOBALS['eventdate']); ?> visit the online registration page provided by The US Sailing Regatta Network and fill in all the required fields (have your credit card handy).  All proceeds go to Children's Hospital of Wisconsin.
    </div>

    <a href="https://www.regattanetwork.com/clubmgmt/applet_registration_form.php?regatta_id=13313" class="button">REGISTER NOW <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
  </div>
</div>

<div class="documents">
  <div class="site-width">
    <h4>IMPORTANT DOCUMENTS <i class="fa fa-arrow-right" aria-hidden="true"></i></h4>

    <a href="pdf/2016_Notice_of_Race.pdf">2017 Notice of Race (NOR)</a>
    <a href="pdf/2016_Sailing_Instructions.pdf">2017 Sailing Instructions</a>
  </div>
</div>

<div class="registered">
  <link rel="stylesheet" href="inc/slick/slick.css">
  <script type="text/javascript" src="inc/slick/slick.min.js"></script>
  <script type="text/javascript" src="inc/slick/slick.init.register-slider.js"></script>

  <div class="reg-slider">
    <div style="background-image: url(images/register-slider1.jpg)"></div>
    <div style="background-image: url(images/register-slider2.jpg)"></div>
    <div style="background-image: url(images/register-slider3.jpg)"></div>
    <div style="background-image: url(images/register-slider4.jpg)"></div>
    <div style="background-image: url(images/register-slider5.jpg)"></div>
    <div style="background-image: url(images/register-slider6.jpg)"></div>
  </div>

  <img src="images/waves-white.png" alt="" class="reg-waves">
  
  <div class="site-width">
    <div class="reg-text">
      <h2>NOW THAT YOU'VE REGISTERED</h2>

      There are many options available to give and raise funds. You sail. You pledge. The kids win! All money raised goes to Children's Hospital.<br>

      <a href="giving.php" class="button">START GIVING <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

      <div class="hashtag">#ITSFORTHEKIDS</div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>