<?php 
define('SMIN', 'smin-slug');
define('SMINPATH', get_template_directory(__FILE__));
define('SMINURL', get_template_directory_uri());

    class SMIN_Theme {
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array($this, 'register_assets')   );
            add_action( 'after_setup_theme', array($this, 'register_menus'), 0 );
            add_filter('acf/settings/save_json', array($this, 'save_acf_json'));
            add_filter('acf/settings/load_json', array($this, 'load_acf_json'));
            add_filter('acf/settings/load_json', array($this, 'load_acf_json'));
            add_action('acf/init', array($this, 'register_options_page'));
            add_action('after_setup_theme', array($this, 'misc_functions'));
            add_filter('use_block_editor_for_post_type', array($this, 'disable_gutenberg'), 10, 2);

            require_once SMINPATH.'/blocks.php';
            require_once SMINPATH.'/models/immobilie.model.php';
            require_once SMINPATH.'/models/unternehmen.model.php';
            require_once SMINPATH.'/models/person.model.php';

        }

        public function register_assets() {
            wp_dequeue_style( 'wp-block-library' );
            wp_dequeue_style( 'wp-block-library-theme' );
            wp_enqueue_style( 'smin-style', SMINURL.'/assets/compiled/css/style.css' );
            wp_enqueue_script( 'smin-script', SMINURL.'/assets/compiled/js/custom.js', array('jquery'), '1.0.0', true );
            wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"', array('jquery'), '1.0.0', false );
            wp_enqueue_style( 'slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
            wp_enqueue_script( 'scrollreveal','https://unpkg.com/scrollreveal', array('jquery'), '1.0.0', false );

        }


        public function register_menus() {
            register_nav_menus( array(
                'primary_menu' => __( 'Hauptmenü', SMIN ),
                'footer_menu'  => __( 'Footermenü', SMIN ),
            ));
        }

        public function save_acf_json() {
            $path = get_stylesheet_directory() . '/fields';
            return $path;
        }

        public function load_acf_json($paths) {
            unset($paths[0]);
            $paths[] = get_stylesheet_directory() . '/fields';
            return $paths;
        }

        public function register_options_page() {
            acf_add_options_page(array(
                'page_title' 	=> 'SMIN Optionen',
                'menu_title'	=> 'SMIN',
                'menu_slug' 	=> 'smin-optionen',
                'capability'	=> 'manage_options',
                'redirect'		=> false
	        ));
        }

        public function misc_functions() {
            add_theme_support( 'thumbnail' );
            add_theme_support( 'post-thumbnails' );
                          add_theme_support( 'align-wide' );

        }

        public function disable_gutenberg($current_status, $post_type) {
             if ($post_type === 'post') return false;
            return $current_status;
        }
        
    }
    new SMIN_Theme();

