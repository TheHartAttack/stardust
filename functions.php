<?php

/*Theme Files*/
function stardust_files() {
    wp_enqueue_script('stardust_main_scripts', get_theme_file_uri('/js/script.js'), array('jquery'));
    wp_enqueue_script('ticket_basket', get_theme_file_uri('/js/basket.js'), NULL, time());
    wp_enqueue_style('stardust_main_styles', get_stylesheet_uri());
    wp_localize_script('stardust_main_scripts', 'stardustData', array(
      'siteURL' => get_site_url(),
      'themeURL' => get_template_directory_uri(),
      'nonce' => wp_create_nonce('wp_rest'),
      'ajaxurl' => admin_url('admin-ajax.php')
    ));
  }
add_action('wp_enqueue_scripts', 'stardust_files');


/*Theme Features*/
function stardust_features(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
  add_image_size('banner', 1600, 450, true);
}
add_action('after_setup_theme', 'stardust_features');


/*Register Post Types*/
register_post_type('lineup', array(
  'supports' => array(
    'title',
    'editor',
    'thumbnail'
  ),
  'public' => true,
  'show_ui' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'Lineup',
    'add_new_item' => 'Add New Band',
    'edit_item' => 'Edit Band',
    'all_items' => 'All Bands',
    'singular_name' => 'Band'
    ),
  'menu_icon' => 'dashicons-format-audio'
));

register_post_type('history', array(
  'supports' => array(
    'title',
    'thumbnail'
  ),
  'public' => true,
  'show_ui' => true,
  'has_archive' => true,
  'labels' => array(
    'name' => 'History',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'all_items' => 'All Events',
    'singular_name' => 'Event'
    ),
  'menu_icon' => 'dashicons-calendar-alt'
));

/*Add Favicon*/
function add_favicon(){ ?>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<?php };
add_action('wp_head', 'add_favicon');

?>