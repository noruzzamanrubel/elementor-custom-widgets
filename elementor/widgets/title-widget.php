<?php
namespace Elementor;

class Elementor_Test_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'search';
    }

    public function get_title()
    {
        return __('Search', 'plugin-name');
    }

    public function get_icon()
    {
        return 'eicon-search';
    }

    public function get_categories()
    {
        return ['basic'];
    }

}
