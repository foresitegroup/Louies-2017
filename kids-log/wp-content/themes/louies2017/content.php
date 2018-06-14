<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

global $featuredID;

if (!is_single()) :
	if ($post->ID != $featuredID) :
		/* ALL THE OTHER PAST POSTS BESIDES THE HERO */
    ?>
    <a href="<?php echo get_permalink(); ?>" class="index-post" style="display: none;">
	  	<div class="index-post-image" style="<?php echo (wp_get_attachment_url(get_post_thumbnail_id()) != "") ? "background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id()) . ")" : "padding-top: 0; margin-bottom: 0;"; ?>"></div>

	  	<h4><?php echo strip_tags(get_the_category_list(', ')); ?></h4>

	  	<?php the_title('<h2>', '</h2>'); ?>

	  	<?php echo get_the_excerpt(); ?>

		  <h3><?php echo get_the_date('F j, Y'); ?></h3>

		  <div class="index-post-hover">READ STORY <i class="fg fg-waves"></i></div>
	  </a>
	<?php
	endif;
else :
	/* A SINGLE POST */
  $TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);
	?>
  </div>

  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/swipebox/swipebox.css">
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/swipebox/jquery.swipebox.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".single-post-gallery A").swipebox();
    });
  </script>

  <div class="single-post-banner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div>

  <div class="site-width single-post">
    <div class="single-post-shadow"></div>

  	<div class="single-post-content">
      <?php the_title('<h1 class="single-post-title site-width-small">', '</h1>'); ?>
      
      <div class="single-post-meta">POSTED: 
        <?php echo strip_tags(get_the_category_list(', ')); ?>
        //
      	<?php the_date('F j, Y', '', ''); ?>
      </div>

  		<?php the_content(); ?>
      
      <div class="single-post-share site-width-small">
  			<a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>&picture=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" target="new" class="facebook"><i class="fg fg-facebook" aria-hidden="true"></i> <span>Share on Facebook</span></a>

        <a href="http://www.twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo str_replace(' ', '+', the_title('','',false)); ?>" target="new" class="twitter"><i class="fg fg-twitter" aria-hidden="true"></i> <span>Share on Twitter</span></a>

        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo str_replace(' ', '%20', the_title('','',false)); ?>" target="new" class="linkedin"><i class="fg fg-linkedin" aria-hidden="true"></i></a>

        <a href="http://pinterest.com/pin/create/link/?url=<?php echo get_permalink(); ?>&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo str_replace(' ', '%20', the_title('','',false)); ?>" target="new" class="pinterest"><i class="fg fg-pinterest" aria-hidden="true"></i></a>

        <a href="http://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="new" class="googleplus"><i class="fg fg-google-plus" aria-hidden="true"></i></a>
  		</div>
    </div>
  </div>

  <div class="single-post-nav">
    <div class="site-width-small">
      <?php
      // Previous/next post navigation.
      $next_post = get_next_post();
      $prev_post = get_previous_post();

      FG_post_pagination(array(
        'next_text' => __($next_post->post_title),
        'prev_text' => __($prev_post->post_title)
      ));
      ?>

      <a href="<?php echo site_url(); ?>/" class="index-link"><i class="fg fg-anchor"></i></a>
    </div>
  </div>
<?php endif; ?>