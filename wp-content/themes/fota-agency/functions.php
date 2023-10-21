<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function fota_agency_scripts()
{
    // enqueue parent style
    wp_enqueue_style('fota-agency-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'fota_agency_scripts');

if (!function_exists('fota_agency_excerpt_limit')) {
    function fota_agency_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 40;
    }
    add_filter('excerpt_length', 'fota_agency_excerpt_limit');
}

/**
 * Registers pattern categories.
 *
 * @since fota-agency 1.0.0
 *
 * @return void
 */
function fota_agency_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'fota-agency-patterns' => array('label' => __('Fota Agency Patterns', 'fota-agency'))
    );

    $block_pattern_categories = apply_filters('fota_agency_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'fota_agency_register_pattern_category', 9);
