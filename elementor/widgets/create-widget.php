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
        return 'eicon-t-letter';
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
                'label' => __('Title', 'elementor'),
                'tab' => Controls_Manager::TAB_CONTENT,

            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXTAREA,
                'separator' => 'after',
                'rows' => 5,
                'default' => __('Add Your Heading Text Here', 'elementor'),
                'placeholder' => __('Add Your Heading Text Here', 'elementor'),
            ]
        );

        $this->add_control(
            'title_link',
            [
                'label' => __('Link', 'elementor'),
                'type' => Controls_Manager::URL,
                'placeholder' => __('Paste URL or type', 'elementor'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $this->add_responsive_control(
            'align',
            [
                'label' => __('Alignment', 'elementor'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'elementor'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'elementor'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'elementor'),
                        'icon' => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => __('Justified', 'elementor'),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}}' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'header_size',
            [
                'label' => __('HTML Tag', 'elementor'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                    'h5' => 'H5',
                    'h6' => 'H6',
                    'div' => 'div',
                    'span' => 'span',
                    'p' => 'p',
                ],
                'default' => 'h2',
            ]
        );

        $this->end_controls_section();

        //Add Style Control

        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Title', 'elementor'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'elementor'),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_1,
                ],
                'selectors' => [
                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .title',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<h1><a class="title" href="' . $settings['title_link']['url'] . '"' . $target . $nofollow . '>' . $settings['title'] . '</a></h1>';

        // $target = $settings['title_link']['is_external'] ? ' target="_blank"' : '';
        // $nofollow = $settings['title_link']['nofollow'] ? ' rel="nofollow"' : '';
        // echo '<a href="' . $settings['title_link']['url'] . '"' . $target . $nofollow . '>

        // </a>';

        // echo '<div style="text-align: ' . $settings['text_align'] . '"> </div>';

        // echo '<h1 class="title"><a href="' . $settings['title_link']['url'] . '" ' . $target . $nofollow . '>'.$settings['title'].'</a></h1>';

    }

}
