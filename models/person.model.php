<?php 
    class SMIN_PersonModel {
        public function __construct() {
            add_action('init', array($this, 'register_post_type'));
        }

        public function register_post_type() {
           	$labels = array(
                'name' => _x( 'Personen', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Person', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Personen', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Person', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Person Archive', 'textdomain' ),
                'attributes' => __( 'Person Attribute', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern Person:', 'textdomain' ),
                'all_items' => __( 'Alle Personen', 'textdomain' ),
                'add_new_item' => __( 'Person erstellen', 'textdomain' ),
                'add_new' => __( 'Erstellen', 'textdomain' ),
                'new_item' => __( 'Person erstellen', 'textdomain' ),
                'edit_item' => __( 'Bearbeite Person', 'textdomain' ),
                'update_item' => __( 'Aktualisiere Person', 'textdomain' ),
                'view_item' => __( 'Person anschauen', 'textdomain' ),
                'view_items' => __( 'Personen anschauen', 'textdomain' ),
                'search_items' => __( 'Suche Person', 'textdomain' ),
                'not_found' => __( 'Keine Personen gefunden.', 'textdomain' ),
                'not_found_in_trash' => __( 'Keine Personen im Papierkorb gefunden.', 'textdomain' ),
                'featured_image' => __( 'Beitragsbild', 'textdomain' ),
                'set_featured_image' => __( 'Beitragsbild festlegen', 'textdomain' ),
                'remove_featured_image' => __( 'Beitragsbild entfernen', 'textdomain' ),
                'use_featured_image' => __( 'Als Beitragsbild verwenden', 'textdomain' ),
                'insert_into_item' => __( 'In Person einfügen', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Zu diesem Person hochgeladen', 'textdomain' ),
                'items_list' => __( 'Personen Liste', 'textdomain' ),
                'items_list_navigation' => __( 'Personen Liste Navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Personen Liste', 'textdomain' ),
                'item_published' => __( 'Person veröffentlicht', 'textdomain' ),
                'item_published_privately' => __( 'Person privat veröffentlicht', 'textdomain' ),
                'item_reverted_to_draft' => __( 'Person als Entwurf gespeichert', 'textdomain' ),
                'item_scheduled' => __( 'Person geplant', 'textdomain' ),
                'item_updated' => __( 'Person aktualisiert', 'textdomain' ),
            );
            $rewrite = array(
                'slug' => 'person',
                'with_front' => true,
                'pages' => true,
                'feeds' => true,
            );
            $args = array(
                'label' => __( 'Person', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-admin-users',
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
            register_post_type( 'smin_person', $args );
        }
    }
    new SMIN_PersonModel();