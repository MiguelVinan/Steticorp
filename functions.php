<?php
  /**
  * Proper way to enqueue styles
  */
  function enqueue_styles(){
    // CSS
    wp_enqueue_style( 'theme_styles',get_template_directory_uri() . '/assets/css/styles.css');
    // wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

  /**
  * Proper way to enqueue scripts
  */
  function enqueue_scripts() {
    // JS
    wp_enqueue_script('jquery-v1','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',"", "", true);
    wp_enqueue_script( 'appjs', get_template_directory_uri() . '/assets/js/app.js', array('jquery-v1'),'', true );
    wp_register_script( 'api-maps','https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false','', true );
    wp_register_script( 'google-maps', get_template_directory_uri() . '/assets/js/map.js', array('jquery-v1'),'', true );

    if (is_home() || is_page('contacto')) {
      wp_enqueue_script('api-maps');
      wp_enqueue_script('google-maps');
    }
  }

  add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

  /**
  * Register my Menus
  */
  function register_my_menus(){
    register_nav_menus(
      array(
        'nav-header'=>__('Menu del Encabezado'),
      )
    );
  }

  add_action('init', 'register_my_menus');

  /**
  * Suport for images
  */
	function custom_theme_setup(){
		add_theme_support('post-thumbnails');
		// format to declarate = ($name , $width , $heigh, $crop(boolean))
		add_image_size('full-thumbnails',1200,800,true);
		add_theme_support( 'custom-header');
	}
	add_action('after_setup_theme','custom_theme_setup');

/**
* Add support colors
*/
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

/**
* Add support for logo
*/

//* Cambia el logotipo de la página inicio de sesión de WordPress (usar imagen de 80x80px)
function mi_logo_personalizado() { ?>
    <style type="text/css">
        body.login div#login h1 a {
      background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand.png);
      background-size :170px;
      height          :90px;
      width           :170px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'mi_logo_personalizado' );

// Personaliza el enlace y título de la imagen de inicio de sesión de WordPress
function mi_logo_personalizado_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mi_logo_personalizado_url' );

function mi_logo_personalizado_url_titulo() {
    return 'Bratya Azanza: Consultoria y Proyectos';
}
add_filter( 'login_headertitle', 'mi_logo_personalizado_url_titulo' );

/*
 * Custom post type
 */
 add_action( 'init', 'blog_post_type', 0 );
 function blog_post_type() {

     $labels = array(
     'name'               => __( 'Artículos' ),
     'singular_name'      => __( 'Artículo' ),
     'add_new_item'       => __( 'Agregar nuevo', 'your-plugin-textdomain' ),
     'new_item'           => __( 'Nuevo Artículo', 'your-plugin-textdomain' ),
     'edit_item'          => __( 'Editar Artículo', 'your-plugin-textdomain' ),
     'view_item'          => __( 'Ver Articulo', 'your-plugin-textdomain' ),
     'all_items'          => __( 'Todos los articulos', 'your-plugin-textdomain' ),
     'search_items'       => __( 'Buscar Articulos', 'your-plugin-textdomain' ),
     'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
     'not_found'          => __( 'Articulos no encontrados.', 'your-plugin-textdomain' ),
     'not_found_in_trash' => __( 'Articulos no entontrados en la papelera.', 'your-plugin-textdomain' )
       );

   $args = array(
     'labels'          => $labels,
     'public'          => true,
     'taxonomies'      => array('category'),
     'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
     'show_in_menu'    => true,
     'menu_position'   => 4,
     'can_export'      => true,
     'has_archive'     => false,
     'capability_type'     => 'post'

   );

   register_post_type('articulos', $args );
 }
 add_action( 'init', 'corporal_post_type', 0 );
 function corporal_post_type() {

     $labels = array(
     'name'               => __( 'Tratamientos Corporales' ),
     'singular_name'      => __( 'T. Corporal' ),
     'add_new_item'       => __( 'Agregar nuevo', 'your-plugin-textdomain' ),
     'new_item'           => __( 'Nuevo Corporal', 'your-plugin-textdomain' ),
     'edit_item'          => __( 'Editar Corporal', 'your-plugin-textdomain' ),
     'view_item'          => __( 'Ver Corporal', 'your-plugin-textdomain' ),
     'all_items'          => __( 'Todos los corporales', 'your-plugin-textdomain' ),
     'search_items'       => __( 'Buscar corporales', 'your-plugin-textdomain' ),
     'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
     'not_found'          => __( 'Corporales no encontrados.', 'your-plugin-textdomain' ),
     'not_found_in_trash' => __( 'Corporales no entontrados en la papelera.', 'your-plugin-textdomain' )
       );

   $args = array(
     'labels'          => $labels,
     'public'          => true,
     'taxonomies'      => array('category'),
     'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
     'show_in_menu'    => true,
     'menu_position'   => 4,
     'can_export'      => true,
     'has_archive'     => false,
     'capability_type'     => 'post'

   );

   register_post_type('corporales', $args );
 }

add_action( 'init', 'skin_post_type', 0 );
function skin_post_type() {

     $labels = array(
     'name'               => __( 'Tratamientos Faciales' ),
     'singular_name'      => __( 'T. Facial' ),
     'add_new_item'       => __( 'Agregar nuevo', 'your-plugin-textdomain' ),
     'new_item'           => __( 'Nuevo facial', 'your-plugin-textdomain' ),
     'edit_item'          => __( 'Editar facial', 'your-plugin-textdomain' ),
     'view_item'          => __( 'Ver Corporal', 'your-plugin-textdomain' ),
     'all_items'          => __( 'Todos las faciales', 'your-plugin-textdomain' ),
     'search_items'       => __( 'Buscar faciales', 'your-plugin-textdomain' ),
     'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
     'not_found'          => __( 'Corporales no encontrados.', 'your-plugin-textdomain' ),
     'not_found_in_trash' => __( 'Corporales no entontrados en la papelera.', 'your-plugin-textdomain' )
       );

   $args = array(
     'labels'          => $labels,
     'public'          => true,
     'taxonomies'      => array('category'),
     'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
     'show_in_menu'    => true,
     'menu_position'   => 4,
     'can_export'      => true,
     'has_archive'     => false,
     'capability_type' => 'post'

   );

   register_post_type('faciales', $args );
 }

add_action( 'init', 'otherTreatment_post_type', 0 );
function otherTreatment_post_type() {

     $labels = array(
     'name'               => __( 'Tratamientos Complementarios' ),
     'singular_name'      => __( 'T. Complementario' ),
     'add_new_item'       => __( 'Agregar nuevo', 'your-plugin-textdomain' ),
     'new_item'           => __( 'Nuevo', 'your-plugin-textdomain' ),
     'edit_item'          => __( 'Editar', 'your-plugin-textdomain' ),
     'view_item'          => __( 'Ver', 'your-plugin-textdomain' ),
     'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
     'search_items'       => __( 'Buscar', 'your-plugin-textdomain' ),
     'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
     'not_found'          => __( 'otros cuidados no encontrados.', 'your-plugin-textdomain' ),
     'not_found_in_trash' => __( 'otros cuidados no entontrados en la papelera.', 'your-plugin-textdomain' )
       );

   $args = array(
     'labels'          => $labels,
     'public'          => true,
     'taxonomies'      => array('category'),
     'supports'        => array( 'title', 'editor', 'thumbnail','excerpt','author', 'comments' ),
     'show_in_menu'    => true,
     'menu_position'   => 4,
     'can_export'      => true,
     'has_archive'     => false,
     'capability_type' => 'post'

   );

   register_post_type('otrosCuidados', $args );
 }
