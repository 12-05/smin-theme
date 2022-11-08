<?php 
    class SMIN_UnternehmenModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
        }

        public function register_post_type() {
           	$labels = array(
                'name' => _x( 'Unternehmen', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Unternehmen', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Unternehmen', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Unternehmen', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Unternehmen Archive', 'textdomain' ),
                'attributes' => __( 'Unternehmen Attribute', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern Unternehmen:', 'textdomain' ),
                'all_items' => __( 'Alle Unternehmen', 'textdomain' ),
                'add_new_item' => __( 'Unternehmen erstellen', 'textdomain' ),
                'add_new' => __( 'Erstellen', 'textdomain' ),
                'new_item' => __( 'Unternehmen erstellen', 'textdomain' ),
                'edit_item' => __( 'Bearbeite Unternehmen', 'textdomain' ),
                'update_item' => __( 'Aktualisiere Unternehmen', 'textdomain' ),
                'view_item' => __( 'Unternehmen anschauen', 'textdomain' ),
                'view_items' => __( 'Unternehmen anschauen', 'textdomain' ),
                'search_items' => __( 'Suche Unternehmen', 'textdomain' ),
                'not_found' => __( 'Keine Unternehmen gefunden.', 'textdomain' ),
                'not_found_in_trash' => __( 'Keine Unternehmen im Papierkorb gefunden.', 'textdomain' ),
                'featured_image' => __( 'Beitragsbild', 'textdomain' ),
                'set_featured_image' => __( 'Beitragsbild festlegen', 'textdomain' ),
                'remove_featured_image' => __( 'Beitragsbild entfernen', 'textdomain' ),
                'use_featured_image' => __( 'Als Beitragsbild verwenden', 'textdomain' ),
                'insert_into_item' => __( 'In Unternehmen einfügen', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Zu diesem Unternehmen hochgeladen', 'textdomain' ),
                'items_list' => __( 'Unternehmen Liste', 'textdomain' ),
                'items_list_navigation' => __( 'Unternehmen Liste Navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Unternehmen Liste', 'textdomain' ),
                'item_published' => __( 'Unternehmen veröffentlicht', 'textdomain' ),
                'item_published_privately' => __( 'Unternehmen privat veröffentlicht', 'textdomain' ),
                'item_reverted_to_draft' => __( 'Unternehmen als Entwurf gespeichert', 'textdomain' ),
                'item_scheduled' => __( 'Unternehmen geplant', 'textdomain' ),
                'item_updated' => __( 'Unternehmen aktualisiert', 'textdomain' ),
            );
            $rewrite = array(
                'slug' => 'unternehmen',
                'with_front' => true,
                'pages' => true,
                'feeds' => true,
            );
            $args = array(
                'label' => __( 'Unternehmen', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-store',
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
            register_post_type( 'smin_unternehmen', $args );
        }
    }
    new SMIN_UnternehmenModel();