<?php

class SMIN_Blocks
{
    public function __construct()
    {
        add_action('acf/init', array($this, 'register_blocks'));
        add_action('enqueue_block_editor_assets', array($this, 'load_assets'));
        add_filter('acf/fields/relationship/result', array($this, 'render_immo_title'), 10, 4);

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
        return $text . "test";
    }
}
new SMIN_Blocks();
