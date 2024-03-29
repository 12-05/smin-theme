<?php

class SMIN_Blocks
{
    public function __construct()
    {
        add_action('acf/init', array($this, 'register_blocks'));
        add_action('enqueue_block_editor_assets', array($this, 'load_assets'));
        add_filter('acf/fields/relationship/result', array($this, 'render_immo_title'), 10, 4);
        add_action('manage_smin_immobilie_posts_custom_column', 'custom_book_column', 10, 2);
        add_filter('manage_smin_immobilie_posts_columns', 'set_custom_edit_book_columns');
        function set_custom_edit_book_columns($columns)
        {
            $columns = array();
            $columns['thumbnail'] = __('Vorschau', 'your_text_domain');
            $columns['post_title'] = __('Titel', 'your_text_domain');
            return $columns;
        }
        function custom_book_column($column, $post_id)
        {
            switch ($column) {

                case 'post_title':
                    echo '<a href="' . get_edit_post_link($post_id) . '">' . get_the_title($post_id) . ' – ' . get_field('kurztext', $post_id) . '</a>';
                    break;
                case 'thumbnail':
                    echo '<img src="' . wp_get_attachment_image_src(get_field('thumbnail', $post_id), 'medium')[0] . '" alt="thumbnail" class="thumbnail" />';

                    break;

            }
        }
    }

    public function register_blocks()
    {

        acf_register_block_type(array(
            'name' => 'text',
            'title' => __('Text'),
            'render_template' => 'blocks/text.php',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'slider',
            'title' => __('Slider'),
            'render_template' => 'blocks/slider.php',
            'icon' => 'admin-comments',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'team',
            'title' => __('Team'),
            'render_template' => 'blocks/team.php',
            'icon' => 'admin-user',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'portfolio',
            'title' => __('Portfolio'),
            'render_template' => 'blocks/portfolio.php',
            'icon' => 'admin-user',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'bild',
            'title' => __('Bild'),
            'render_template' => 'blocks/bild.php',
            'icon' => 'admin-user',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'block',
            'title' => __('Block'),
            'render_template' => 'blocks/block.php',
            'icon' => 'admin-user',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

        acf_register_block_type(array(
            'name' => 'person',
            'title' => __('Person'),
            'render_template' => 'blocks/person.php',
            'icon' => 'admin-user',
            'align' => 'full',
            'supports' => array(
                'align' => array('full'),
                'align' => false,
            ),
        ));

    }

    public function load_assets()
    {
        wp_dequeue_style('wp-block-library');

        wp_enqueue_style('smin-style', SMINURL . '/assets/compiled/css/style.css');
        wp_enqueue_script('smin-script', SMINURL . '/assets/compiled/js/custom.js', array('jquery'), '1.0.0', true);
    }

    public function render_immo_title($text, $post, $field, $post_id)
    {
        $thumbnail = get_field('thumbnail', $post->ID) ? "" : "(Kein Bild)";
        return $text . " - " . get_field('kurztext', $post->ID) . ' ' . $thumbnail;
    }
}
new SMIN_Blocks();
