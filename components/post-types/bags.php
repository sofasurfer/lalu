<?php

// Namespace declaration
namespace Neofluxe\PostType;

use Neofluxe\PostTypes;

// Exit if accessed directly 
defined('ABSPATH') or die;

class Bag {

    private static $instance;

    public static function instance() {
        return self::$instance ?: (self::$instance = new self());
    }

    private function __construct() {
        add_action('init', [$this, 'register']);
    }

    public function register() {
        PostTypes::instance()->register_post_type('bags', 'dashicons-cart', [
            'name' => __('Bag', 'neofluxe'),
            'singular_name' => __('Bag', 'neofluxe'),
            'menu_name' => __('Bag', 'neofluxe'),
            'all_items' => __('All Bags', 'neofluxe'),
            'add_new' => __('Add Bag', 'neofluxe'),
            'add_new_item' => __('New Bag', 'neofluxe'),
            'edit_item' => __('Edit Bag', 'neofluxe'),
            'new_item' => __('New Bag', 'neofluxe'),
            'view_item' => __('Show Bag', 'neofluxe'),
            'search_items' => __('Search Bag', 'neofluxe'),
            'not_found' => __('Bag has not been found.', 'neofluxe'),
            'not_found_in_trash' => __('Bag not found in the trash', 'neofluxe'),
            'publicly_queryable'  => false,
        ], [
            'en' => 'bags'
        ], false, false, true, ['title',  'page-attributes']);
    }
}

Bag::instance();