<?php

class Test_Elementor_Widgets
{

    protected static $instance = null;

    public static function get_instance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    protected function __construct()
    {
        require_once 'create-widget.php';
        require_once 'preview-card.php';
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
    }

    public function register_widgets()
    {
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Test_Title_widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\preview_Card_widget());
    }

}

function test_elementor_init()
{
    Test_Elementor_Widgets::get_instance();
}

add_action('init', 'test_elementor_init');
