<?php
namespace Elementor;

class Test_Title_widget extends Widget_Base
{

    public function get_name()
    {
        return 'Test Title';
    }

    public function get_title()
    {
        return 'Test Title';
    }

    public function get_icon()
    {
        return 'fa fa-font';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_title',
            [
                'label' => __('Content', 'elementor'),
                
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Enter your title', 'elementor'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $title = $settings['title'];
    }


}
