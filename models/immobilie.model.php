<?php 
    class SMIN_ImmobilieModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
        }

        public function register_post_type() {
           	$labels = array(
                'name' => _x( 'Immobilien', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Immobilie', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Immobilien', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Immobilie', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Immobilie Archive', 'textdomain' ),
                'attributes' => __( 'Immobilie Attribute', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern Immobilie:', 'textdomain' ),
                'all_items' => __( 'Alle Immobilien', 'textdomain' ),
                'add_new_item' => __( 'Immobilie erstellen', 'textdomain' ),
                'add_new' => __( 'Erstellen', 'textdomain' ),
                'new_item' => __( 'Immobilie erstellen', 'textdomain' ),
                'edit_item' => __( 'Bearbeite Immobilie', 'textdomain' ),
                'update_item' => __( 'Aktualisiere Immobilie', 'textdomain' ),
                'view_item' => __( 'Immobilie anschauen', 'textdomain' ),
                'view_items' => __( 'Immobilien anschauen', 'textdomain' ),
                'search_items' => __( 'Suche Immobilie', 'textdomain' ),
                'not_found' => __( 'Keine Immobilien gefunden.', 'textdomain' ),
                'not_found_in_trash' => __( 'Keine Immobilien im Papierkorb gefunden.', 'textdomain' ),
                'featured_image' => __( 'Beitragsbild', 'textdomain' ),
                'set_featured_image' => __( 'Beitragsbild festlegen', 'textdomain' ),
                'remove_featured_image' => __( 'Beitragsbild entfernen', 'textdomain' ),
                'use_featured_image' => __( 'Als Beitragsbild verwenden', 'textdomain' ),
                'insert_into_item' => __( 'In Immobilie einfügen', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Zu diesem Immobilie hochgeladen', 'textdomain' ),
                'items_list' => __( 'Immobilien Liste', 'textdomain' ),
                'items_list_navigation' => __( 'Immobilien Liste Navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Immobilien Liste', 'textdomain' ),
                'item_published' => __( 'Immobilie veröffentlicht', 'textdomain' ),
                'item_published_privately' => __( 'Immobilie privat veröffentlicht', 'textdomain' ),
                'item_reverted_to_draft' => __( 'Immobilie als Entwurf gespeichert', 'textdomain' ),
                'item_scheduled' => __( 'Immobilie geplant', 'textdomain' ),
                'item_updated' => __( 'Immobilie aktualisiert', 'textdomain' ),
            );
            $rewrite = array(
                'slug' => 'immobilie',
                'with_front' => true,
                'pages' => true,
                'feeds' => true,
            );
            $args = array(
                'label' => __( 'Immobilie', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-admin-home',
                'supports' => array('title'),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'menu_position' => 5,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'can_export' => true,
                'has_archive' => true,
                'hierarchical' => false,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
                'rewrite' => $rewrite,
            );
            register_post_type( 'smin_immobilie', $args );
        }
    }
    new SMIN_ImmobilieModel();