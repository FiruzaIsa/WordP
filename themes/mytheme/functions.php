<?php

//Load Stylesheets
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

      wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
      wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');

//Load Javascript
function load_js()
{
  wp_register_script('script',get_theme_file_uri('/js/script.js') , NULL, microtime(), true);
  wp_enqueue_script('script');
	wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');

//Load Links
function gt_setup(){
  wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Montserrat+Alternates:400,800,900&display=swap&subset=cyrillic,cyrillic-ext');
}
add_action('wp_enqueue_scripts','gt_setup');


//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'custom-logo');
add_theme_support( 'custom-header' );
$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
);
add_theme_support( 'html5', $args );



// Image size
add_image_size('blog-small',50, 50 ,true);
add_image_size('blog-medium',400, 260 ,true);
add_image_size('blog-large',700,350,true);
add_image_size('med-small',538,256,true);

//Menus
register_nav_menus(


       array(
      
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
      )
);





//Widget

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Contact Widget Area',
        'id'            => 'custom-contact-widget',
        'before_widget' =>'<div class="info-box">',
        'after_widget'  => '</div>',
       
    ) );

    register_sidebar( array(
      'name'          => 'Custom Social Widget Area',
      'id'            => 'custom-social-widget',
      'before_widget' =>'<div class="social-media d-lg-inline-block d-none">',
      'after_widget'  => '</div>',
     
  ) );
  register_sidebar( array(
    'name'          => 'Custom Contact Footer Widget Area',
    'id'            => 'custom-contact-footer-widget',
    'before_widget' =>'<div class="contact">',
    'after_widget'  => '</div>',
   
) );
register_sidebar( array(
  'name'          => 'Custom Map Footer Widget Area',
  'id'            => 'custom-map-footer-widget',
  'before_widget' =>'<div class="map mt-4">',
  'after_widget'  => '</div>',
 
) );
register_sidebar( array(
  'name'          => 'Custom Contact Info Footer Widget Area',
  'id'            => 'custom-contact-info-footer-widget',
  'before_widget' =>'<div class="col-lg-4 col-md-5 col-sm-12">',
  'after_widget'  => '</div>',
 
) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );


//Post Type Adding Sidebar named Services
function post_type()
{
$args=array(

'labels'=>array(
          
          'name'=>'Услуги',
          'singular_name'=>'Услуга',

),
'hierarchical'=>true,
'menu_icon'=>'dashicons-grid-view',
'public'=>true,
'has_archive'=>true,
'supports'=>array('title','editor','thumbnail'),
'rewrite'=>array('slug'=>'услуги'),

);

  register_post_type('services',$args);

}
add_action('init','post_type');


/*
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Theme Logo 
function profmed_custom_logo_setup(){
$defaults=array(
'height'      => 100,
'width'       => 400,
'flex-height' => true,
'flex-width'  => true,
'header-text' =>array('site-title', 'site-description'),
);
add_theme_support('custom-logo', $defaults );
}
add_action('after_setup_theme','profmed_custom_logo_setup');












class My_Custom_Widget extends WP_Widget {

	// Main constructor
	public function __construct() {
		parent::__construct(
			'my_custom_widget',
			__( 'My Custom Widget', 'text_domain' ),
			array(
				'customize_selective_refresh' => true,
			)
		);
  }
  


  public function form( $instance ) {

		// Set widget defaults
		$defaults = array(
      'title' => '',
			'text'  => '',
			'email' => '',
			'phone' => '',
			'time'   => '',
    );
    

    extract( wp_parse_args( ( array ) $instance, $defaults ) ); ?>

	<?php // Title Field ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title); ?>" />
		</p>

		<?php // Text Field ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php _e( 'Address:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>" />
		</p>
    <?php // Time Field ?>
    <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'time' ) ); ?>"><?php _e( 'Time:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'time' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'time' ) ); ?>" type="text" value="<?php echo esc_attr( $time ); ?>" />
    </p>
    <?php // Email Field ?>
    <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php _e( 'Email:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="email" value="<?php echo esc_attr( $email ); ?>" />
    </p>
    <?php // Tel Field ?>
    <p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tel' ) ); ?>"><?php _e( 'Phone:', 'text_domain' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tel' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tel' ) ); ?>" type="tel" value="<?php echo esc_attr( $tel ); ?>" />
		</p>


  <?php }
  
	public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = isset($new_instance['title']) ? wp_strip_all_tags($new_instance['title']) : '';
		$instance['text']     = isset( $new_instance['text'] ) ? wp_strip_all_tags( $new_instance['text'] ) : '';
    $instance['time'] = isset( $new_instance['time'] ) ? wp_strip_all_tags( $new_instance['time'] ) : '';
    $instance['email'] = isset( $new_instance['email'] ) ? wp_strip_all_tags( $new_instance['email'] ) : '';
    $instance['tel'] = isset( $new_instance['tel'] ) ? wp_strip_all_tags( $new_instance['tel'] ) : '';
    return $instance;
  }
  
  public function widget( $args, $instance ) {

		extract( $args );

    // Check the widget options
    $title  = isset ($instance['title'] ) ? $instance['title'] : '';
		$text     = isset( $instance['text'] ) ? $instance['text'] : '';
		$time = isset( $instance['time'] ) ?$instance['time'] : '';
		$email   = isset( $instance['email'] ) ? $instance['email'] : '';
		$tel = isset( $instance['tel'] ) ? $instance['tel'] : '';

		// WordPress core before_widget hook (always include )
		echo $before_widget;

    // Display the widget
    echo '<div class="heading">';
    if ( $text ) {
      
      echo '<h1>' . $title . '</h1>';
    }
    echo  '</div>';
    echo ' <div class="adress d-flex">' ;
    echo ' <div class="icon-for align-self-center">';
    echo  '</div>';
    echo ' <div class="inform-adress">';
			if ( $text ) {
				echo '<p>' . $text . '</p>';
			}
			if ( $time ) {
				echo '<p>' . $time . '</p>';
      }
      echo '</div>';
      echo '</div>';
      echo ' <div class="phone d-flex">';
      echo  '<div class="icon-for align-self-center">';
      echo  ' </div>';         
       echo  '<div class="inform-phone">';               
      if ( $email ) {
				echo '<p>' . $email . '</p>';
      }
      if ( $tel ) {
				echo '<p>' . $tel . '</p>';
      }
      echo '</div>';  
		echo '</div>';

		// WordPress core after_widget hook (always include )
		echo $after_widget;

	}

}
function my_register_custom_widget() {
	register_widget( 'My_Custom_Widget' );
}
add_action( 'widgets_init', 'my_register_custom_widget' );