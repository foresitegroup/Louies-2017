<?php
// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );

// Set length of blog index excerpt
// function wpdocs_custom_excerpt_length( $length ) {
//   return 25;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Add "..." to end of excerpt
function change_excerpt_more() {
  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
}
add_action('after_setup_theme', 'change_excerpt_more');

// Break excerpt at sentence end
function end_with_sentence( $excerpt ) {
  $allowed_ends = array('.', '!', '?', '...');
  $number_sentences = 2;
  $excerpt_chunk = $excerpt;

  for($i = 0; $i < $number_sentences; $i++){
    $lowest_sentence_end[$i] = 100000000000000000;
    foreach($allowed_ends as $allowed_end) {
      $sentence_end = strpos( $excerpt_chunk, $allowed_end);
      if ($sentence_end !== false && $sentence_end < $lowest_sentence_end[$i]) {
        $lowest_sentence_end[$i] = $sentence_end + strlen( $allowed_end );
      }
      $sentence_end = false;
    }

    $sentences[$i] = substr( $excerpt_chunk, 0, $lowest_sentence_end[$i]);
    $excerpt_chunk = substr( $excerpt_chunk, $lowest_sentence_end[$i]);
  }

  return implode('', $sentences);
}
add_filter('get_the_excerpt', 'end_with_sentence');

/* 
 * Change WordPress default gallery output
 * http://wpsites.org/?p=10510/
 */
add_filter('post_gallery', 'FG_post_gallery', 10, 2);
function FG_post_gallery($output, $attr) {
  global $post;

  if (isset($attr['orderby'])) {
    $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
    if (!$attr['orderby']) unset($attr['orderby']);
  }

  extract(shortcode_atts(array(
    'order' => 'ASC',
    'orderby' => 'menu_order ID',
    'id' => $post->ID,
    'itemtag' => 'dl',
    'icontag' => 'dt',
    'captiontag' => 'dd',
    'columns' => 3,
    'size' => 'thumbnail',
    'include' => '',
    'exclude' => ''
  ), $attr));

  $id = intval($id);
  if ('RAND' == $order) $orderby = 'none';

  if (!empty($include)) {
    $include = preg_replace('/[^0-9,]+/', '', $include);
    $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

    $attachments = array();
    foreach ($_attachments as $key => $val) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  }

  if (empty($attachments)) return '';

  // Here's your actual output, you may customize it to your need
  $output = "<div class=\"single-post-gallery gallery-columns-" . $columns . " cf\">\n";

  // Now you loop through each attachment
  foreach ($attachments as $id => $attachment) {
    $img = wp_get_attachment_image_src($id, 'full');

    $output .= "<a href=\"" . $img[0] . "\" rel=\"sb" . $columns . "\" style=\"background-image: url(" . $img[0] . ");\"></a>\n";
  }

  $output .= "</div>\n";

  return $output;
}


add_filter('the_content', 'filter_ptags_on_images');
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}

// Format the single post pagination
function FG_post_pagination($args = array()) {
  $prev_link = (get_previous_post_link()) ? get_previous_post_link('%link', $args['prev_text']) : '<a class="prev home-link" href="'.site_urL().'/">Back to Kids Log</a>';
  $next_link = (get_next_post_link()) ? get_next_post_link('%link', $args['next_text']) : '<a class="next home-link" href="'.site_urL().'/">Back to Kids Log</a>';

  // Only add markup if there's somewhere to navigate to.
  if ( $prev_link || $next_link ) {
    echo _navigation_markup($prev_link . $next_link, ' ', ' ');
  }
}
add_filter('previous_post_link', 'post_link_attributes_prev');
add_filter('next_post_link', 'post_link_attributes_next');
function post_link_attributes_prev($output) { return str_replace('<a href=', '<a class="prev" href=', $output); }
function post_link_attributes_next($output) { return str_replace('<a href=', '<a class="next" href=', $output); }

// Remove p tags from category description
remove_filter('term_description','wpautop');


// Add Featured Post checkbox to post admin page
function fg_custom_meta() {
  add_meta_box('fg_meta', __('Featured Post', 'fg-textdomain'), 'fg_meta_callback', 'post');
}
function fg_meta_callback( $post ) {
  $featured = get_post_meta( $post->ID );
  ?>
  <p>
    <div class="fg-row-content">
      <label for="featured-checkbox">
        <input type="checkbox" name="featured-checkbox" id="featured-checkbox" value="Yes" <?php if (isset($featured['featured-checkbox'])) checked($featured['featured-checkbox'][0], 'Yes'); ?> />
        <?php _e('Make this the featured post for this category', 'fg-textdomain')?>
      </label>
    </div>
  </p>
  <?php
}
add_action( 'add_meta_boxes', 'fg_custom_meta' );

// Saves the Featured Post input
function fg_meta_save( $post_id ) {
  // Checks save status
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revision = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'fg_nonce' ] ) && wp_verify_nonce( $_POST[ 'fg_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

  // Exits script depending on save status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) return;

  // Checks for input and saves
  $fp_input = (isset($_POST[ 'featured-checkbox' ])) ? 'Yes' : '';
  update_post_meta( $post_id, 'featured-checkbox', $fp_input);
}
add_action( 'save_post', 'fg_meta_save' );

// Add Featured Post column to admin post list
add_filter( 'manage_edit-post_columns', 'admin_post_header_columns', 10, 1);
add_action( 'manage_posts_custom_column', 'admin_post_data_row', 10, 2);
function admin_post_header_columns($columns) {
  if (!isset($columns['featured-checkbox'])) $columns['featured-checkbox'] = "Featured";
  unset($columns['comments']); // Remove Comments column while we're at it
  return $columns;
}
function admin_post_data_row($column_name, $post_id) {
  switch($column_name) {
    case 'featured-checkbox':    
      $featuredpost = get_post_meta($post_id, 'featured-checkbox', true);
      if ($featuredpost) echo $featuredpost;
      break;    
    default:
      break;
  }
}

// Style the Featured Post admin column
add_action('admin_head', 'my_admin_styles');
function my_admin_styles() {
  echo '<style>
    .fixed .column-featured-checkbox { width: 10%; }
  </style>';
}
?>