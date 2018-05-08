    <div class="llr-footer">
      <div class="footer-text">
        <img src="<?php echo $TopDir; ?>images/llr-icon.png?<?php if ($TopDir == "") echo filemtime('images/llr-icon.png'); ?>" alt="" id="llr-icon"><br>
        <br>
        <br>

        Louie's Last Regatta is an open-to-all, year-end, fun-oriented annual sailing regatta on Lake Michigan in which all proceeds benefit Children's Hospital of Wisconsin. Founded in 1999 by a group of Milwaukee sailors, Louie's Last Regatta has grown into one of the nation's largest fundraising regattas.<br>
        <br>
        <br>

        <div class="footer-hashtags">
          #LOUIESLAST <span class="spacer"></span> #ITSFORTHEKIDS
        </div>
      </div>

      <div class="site-width-small">
        <ul class="footer-menu">
          <li><a href="<?php echo $TopDir; ?>register.php">REGISTER</a></li>
          <li><a href="<?php echo $TopDir; ?>giving.php">GIVING</a></li>
          <li><a href="<?php echo $TopDir; ?>event.php">EVENT</a></li>
          <li><a href="#newsletter" rel="nofollow">NEWSLETTER</a></li>
        </ul>

        <div class="social">
          <a href="http://www.facebook.com/LouiesLastRegatta"><i class="fg fg-facebook"></i></a>
          <a href="http://twitter.com/llregatta"><i class="fg fg-twitter"></i></a>
          <a href="https://instagram.com/louieslast"><i class="fg fg-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCTqEGfa9SrdH_9lX22aKaqQ"><i class="fg fg-youtube"></i></a>
        </div>
      </div>
    </div>

    <div id="newsletter" class="site-width-small">
      <script type="text/javascript">
        $(document).ready(function() {
          var form = $('#newsletter-form');
          var formMessages = $('#newsletter-form-messages');
          $(form).submit(function(event) {
            event.preventDefault();

            function formValidation() {
              if ($('#newsletter-email').val() === '') { alert('Email address required.'); $('#newsletter-email').focus(); return false; }
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
                $('#newsletter-email').val('');
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
      $salt = "LouiesNewsletterForm";
      ?>

      <h2>LOUIE'S NEWS &amp; UPDATES</h2>
      I would like to receive timely information about Louie's Last Regatta.

      <div id="newsletter-form-messages"></div>

      <form action="form-newsletter.php" method="POST" id="newsletter-form">
        <div>
          <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="newsletter-email" placeholder="EMAIL ADDRESS">
          <input type="submit" name="submit" value="SIGNUP">

          <input type="text" name="confirmationCAP" style="display: none;">
          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
        </div>
      </form>

      <div class="close-wrap"><a href="#" rel="modal:close">No Thanks</a></div>
    </div>

  </body>
</html>