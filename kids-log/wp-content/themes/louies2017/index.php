<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

if ( have_posts() ) :
  if (!is_single()) :
  	$args = array('posts_per_page' => 1, 'meta_key' => 'featured-checkbox', 'meta_value' => 'yes');
    $argsnf = array('posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'date');

    if (is_archive()) :
      $cats = get_the_category();
      $args['category_name'] = esc_html($cats[0]->slug);
      $argsnf['category_name'] = esc_html($cats[0]->slug);
    endif;

    /* Look for Featured Post in category */
    $featured = new WP_Query($args);

    if ($featured->have_posts()):
      $featured->the_post();
    else :
      /* No Featured Post so just get the most recent */
      $nofeatured = get_posts($argsnf);
      foreach ($nofeatured as $post) : setup_postdata( $post ); endforeach;
    endif;

    $featuredID = $post->ID;

    /* Give the Featured or most recent post the hero treatment */
    ?>

    <div class="first-post">
    	<div class="first-post-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div>

    	<i class="fg fg-waves"></i>

      <div class="site-width">
      	<div class="first-post-text">
      		<h4>FEATURED</h4>

  	    	<?php the_title('<h1>', '</h1>'); ?>

  	      <?php the_date('F j, Y', '<h3>', '</h3>'); ?> 

  	      <?php echo get_the_excerpt(); ?><br>

  	      <a href="<?php echo get_permalink(); ?>" class="button hollow">READ STORY</a>
  	    </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $(".filter [href]").each(function() {
          if (this.href == window.location.href) { $(this).addClass("current"); }
        });
      });
    </script>

    <div class="filter">
      <div class="site-width">
        <a href="<?php echo site_url(); ?>/">All</a>
        <?php wp_list_categories(array('title_li' => '', 'orderby' => 'name', 'style' => '', 'separator' => '', 'exclude'  => array(1))); ?>
      </div>
    </div>
  <?php endif; ?>
  
  <div class="site-width">
	  <?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
		endwhile;
		?>
	</div>
	<?php
else :
	get_template_part( 'content', 'none' );
endif;

if (!is_single()) : ?>
	<div class="loadmore">
		<a href="#" id="loadmore">LOAD MORE</a>
		<script type="text/javascript">
		  $(function () {
			  $(".index-post").slice(0, 6).show();

			  // Don't show button if fewer than max number of posts
			  if ($(".index-post:hidden").length == 0) $("#loadmore").fadeOut('fast');

			  $("#loadmore").on('click', function (e) {
			    e.preventDefault();
			    $(".index-post:hidden").slice(0, 6).slideDown();

			    // Remove button when we get to the end of the posts
			    if ($(".index-post:hidden").length == 0) $("#loadmore").fadeOut('slow');
			  });
			});
		</script>
	</div>

	<div class="blog-newsletter">
		<div class="site-width">
			<h2>LOUIE'S NEWS &amp; UPDATES</h2>

			I would like to receive timely information about Louie's Last Regatta.

			<script type="text/javascript">
        $(document).ready(function() {
          var form = $('#blog-newsletter-form');
          var formMessages = $('#blog-newsletter-form-messages');
          $(form).submit(function(event) {
            event.preventDefault();
            
            function formValidation() {
              if ($('#blog-newsletter-email').val() === '') { alert('Email address required.'); $('#blog-newsletter-email').focus(); return false; }
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
                $('#blog-newsletter-email').val('');
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

      <form action="form-newsletter.php" method="POST" id="blog-newsletter-form">
      	<div id="blog-newsletter-form-messages"></div>

        <div>
          <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="blog-newsletter-email" placeholder="EMAIL ADDRESS">
          <input type="submit" name="submit" value="SIGNUP">

          <input type="text" name="confirmationCAP" style="display: none;">
          <input type="hidden" name="ip" value="<?php echo $ip; ?>">
          <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">
        </div>
      </form>
		</div>
	</div>
<?php endif;

get_footer();
?>