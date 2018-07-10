<?php
$PageTitle = "Contact";
include "header.php";
?>

<div class="contact-banner">
  <div class="site-width">
    <h2>CONTACT LOUIE'S</h2>

    <div class="banner-text">
      If you have time, talent, and desire to help continue growing Louie's and fundraising for Children's Hospital of Wisconsin, we want to talk to you! This could be at the official board level, and/or informally as part of the dozens of volunteers needed on various sub-committees. Please email the board at <?php email("contactus@louieslast.org"); ?>  or fill out the form below.
    </div>
  </div>

  <img src="images/llr-icon-white.png?<?php echo filemtime('images/llr-icon-white.png'); ?>" alt="" class="icon">
</div>

<div class="contact-form">
  <div class="site-width-small">

    <script type="text/javascript">
      $(document).ready(function() {
        var form = $('#contact-form');
        var formMessages = $('#contact-form-messages');
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
    $salt = "LouiesContactForm";
    ?>

    <form action="form-contact.php" method="POST" id="contact-form">
      <div id="contact-form-messages"></div>

      <div>
        <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Name">

        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">

        <input type="tel" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone">

        <div style="clear: both;"></div>

        <div class="header">I am interested in:</div>
        <input type="checkbox" name="interest[]" id="int-money" value="Donating money">
        <label for="int-money">Donating money</label>

        <input type="checkbox" name="interest[]" id="int-time" value="Donating time">
        <label for="int-time">Donating time</label>

        <input type="checkbox" name="interest[]" id="int-raffle" value="Contributing raffle item(s)">
        <label for="int-raffle">Contributing raffle item(s)</label>

        <input type="checkbox" name="interest[]" id="int-other" value="Other">
        <label for="int-other">Other</label>

        <br>

        <textarea name="<?php echo md5("comment" . $ip . $salt . $timestamp); ?>" id="comment" placeholder="Questions, Comments, Message"></textarea>
      </div>

      <div style="text-align: center;">
        <input type="checkbox" name="mailinglist" id="mailinglist" value="yes">
        <label for="mailinglist">I would like to receive timely information about Louie's Last Regatta.</label>

        <input type="submit" name="submit" value="SEND MESSAGE">

        <input type="text" name="confirmationCAP" style="display: none;">
        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
      </div>
    </form>

  </div>
</div>

<div class="contact-footer">
  <div class="site-width">
    <div class="contact-address">
      <div>
        <h3>MAILING ADDRESS</h3>
        Attn: Colleen Myers<br>
        Children's Hospital of Wisconsin Foundation<br>
        M.S. 3050, P.O. Box 1997<br>
        Milwaukee, WI 53201
      </div>

      <div>
        <h3>MILWAUKEE ALE HOUSE</h3>
        233 N. Water Street #1<br>
        Milwaukee, WI 53202<br>
        (414) 276-2337
      </div>
    </div>

    <div class="committee">
      <div class="sidebar">
        <h3>COMMITTEE</h3>
        <i class="fg fg-waves"></i>
      </div>

      <div class="committee-names">
        Colleen Myers<br>
        Ed Purcell<br>
        Song Buck<br>
        Francis Morton<br>
        Hays Formella<br>
        Hannah Falk<br>
        Teddy Berman<br>
        Mike Nath<br>
        Laura Schaub<br>
        Mike Bersch
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>