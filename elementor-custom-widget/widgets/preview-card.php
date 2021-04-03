<?php

namespace Elementor;

class preview_Card_widget extends Widget_Base
{
    public function get_name()
    {
        return 'preview-card-widget';
    }

    public function get_title()
    {
        return esc_html__('Preview Card Widget', 'elementor');
    }

    public function get_icon()
    {
        return 'eicon-lightbox';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function _register_controls()
    {
        // Image Settings
        $this->start_controls_section(
            'image_section',
            [
                'label' => __('Image', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // image
        $this->add_control(
            'image',
            [
                'label' => __('Choose Image', 'elementor'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // image switcher
        $this->add_control(
            'show_image_link',
            [
                'label' => __('Show Image Link', 'elementor'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'elementor'),
                'label_off' => __('Hide', 'elementor'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        // image link
        $this->add_control(
            'image_link',
            [
                'label' => __('Image Link', 'elementor'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'elementor'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'show_image_link' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Content Settings
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Title
        $this->add_control(
            'card_title',
            [
                'label' => __('Card Title', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Default title', 'elementor'),
                'label_block' => true,
                'placeholder' => __('Type your title here', 'elementor'),
            ]
        );

        // Divider
        $this->add_control(
            'show_divider',
            [
                'label' => __('Show Divider', 'elementor'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'elementor'),
                'label_off' => __('Hide', 'elementor'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        // Content
        $this->add_control(
            'item_description',
            [
                'label' => __('Description', 'elementor'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Default description', 'elementor'),
                'placeholder' => __('Type your description here', 'elementor'),
            ]
        );

        $this->end_controls_section();

        // Badge Settings
        $this->start_controls_section(
            'badge_section',
            [
                'label' => __('Badge', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Top badge
        $this->add_control(
            'show_top_badge',
            [
                'label' => __('Show Top Badge', 'elementor'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'your-plugin'),
                'label_off' => __('Hide', 'your-plugin'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        // Top Badge Text
        $this->add_control(
            'top_badge_text',
            [
                'label' => __('Top Badge Text', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('On Sale!', 'elementor'),
                'placeholder' => __('Type your title here', 'elementor'),
                'condition' => [
                    'show_top_badge' => 'yes',
                ],
            ]
        );

        // Middle badge
        $this->add_control(
            'show_middle_badge',
            [
                'label' => __('Show Middle Badge', 'elementor'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'elementor'),
                'label_off' => __('Hide', 'elementor'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        // Middle Badge Text
        $this->add_control(
            'middle_badge_text',
            [
                'label' => __('Middle Badge Text', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('$19.99', 'elementor'),
                'placeholder' => __('Type your title here', 'elementor'),
                'condition' => [
                    'show_middle_badge' => 'yes',
                ],
            ]
        );

        // Bottom badge
        $this->add_control(
            'show_bottom_badge',
            [
                'label' => __('Show Bottom Badge', 'elementor'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'elementor'),
                'label_off' => __('Hide', 'elementor'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        // Bottom Badge Text
        $this->add_control(
            'bottom_badge_text',
            [
                'label' => __('Bottom Badge Text', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('$19.99', 'elementor'),
                'placeholder' => __('Type your title here', 'elementor'),
                'condition' => [
                    'show_bottom_badge' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Button Settings
        $this->start_controls_section(
            'button_section',
            [
                'label' => __('Button', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Button Link
        $this->add_control(
            'button_link',
            [
                'label' => __('Link', 'elementor'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'elementor'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        // Button Text
        $this->add_control(
            'button_text',
            [
                'label' => __('Text', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Buy Now', 'elementor'),
                'placeholder' => __('Type your text here', 'elementor'),
            ]
        );

        $this->end_controls_section();

        //style

        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Image', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'image_width',
            [
                'label' => __('Image Width', 'elementor'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'description' => __('Default width 100%', 'elementor'),
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-card .image' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'image_height',
            [
                'label' => __('Image Height', 'elementor'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'description' => __('Default Height 250px', 'elementor'),
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 250,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-card .image' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'image_padding',
            [
                'label' => __('Padding', 'elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'default' => [
                    'top' => 0,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-card .image-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'label' => __('Border', 'elementor'),
                'selector' => '{{WRAPPER}} .image-card .image-wrapper',
            ]
        );

        // Border Radius
        $this->add_responsive_control(
            'image_border_radius',
            [
                'label' => __( 'Border Radius', 'elementor' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => 0,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-card .image-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .image-card .image-wrapper .image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __('Box Shadow', 'elementor'),
                'selector' => '{{WRAPPER}} .image-card .image',
            ]
        );

        $this->end_controls_section();


        /**
         * Content Style Settings
         */

        $this->start_controls_section(
            'content_style_section',
            [
                'label' => __( 'Content', 'elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

            // Padding
            $this->add_responsive_control(
                'content_padding',
                [
                    'label' => __( 'Padding', 'elementor' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'default' => [
                        'top' => 30,
                        'right' => 30,
                        'bottom' => 30,
                        'left' => 30,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .image-card .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'description' => 'Default: 30px',
                ]
            );

            // Title heading
            $this->add_control(
                'content_title_heading',
                [
                    'label' => __( 'Title', 'elementor' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            // Title Bottom Spacing
            $this->add_responsive_control(
                'content_title_bottom_spacing',
                [
                    'label' => __( 'Bottom Spacing', 'elementor' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'description' => 'Default: 15px',
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 15,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .image-card .title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            // Title Color
            $this->add_control(
                'content_title_color',
                [
                    'label' => __( 'Title Color', 'elementor' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .image-card .title h2' => 'color: {{VALUE}}',
                    ],
                    'default' => '#111',
                ]
            );

            // Title Typography
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'content_title_typography',
                    'label' => __( 'Typography', 'elementor' ),
                    'selector' => '{{WRAPPER}} .image-card .title h2',
                ]
            );

            // Description heading
            $this->add_control(
                'content_description_heading',
                [
                    'label' => __( 'Description', 'elementor' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            // Description Bottom Spacing
            $this->add_responsive_control(
                'content_description_bottom_spacing',
                [
                    'label' => __( 'Bottom Spacing', 'elementor' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'description' => 'Default: 30px',
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 30,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .image-card .excerpt' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            // Description Color
            $this->add_control(
                'content_description_color',
                [
                    'label' => __( 'Description Color', 'elementor' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .image-card .excerpt' => 'color: {{VALUE}}',
                    ],
                    'default' => '#111',
                ]
            );

            // Description Typography
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'content_description_typography',
                    'label' => __( 'Typography', 'elementor' ),
                    'selector' => '{{WRAPPER}} .image-card .excerpt',
                ]
            );


        $this->end_controls_section();


        /**
         * Divider Style Settings
         */
        $this->start_controls_section(
            'divider_style_section',
            [
                'label' => __( 'Divider', 'elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Width
        $this->add_control(
            'divider_width',
            [
                'label' => __( 'Width', 'elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'description' => 'Default: 100px',
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-card .divider' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // Height
        $this->add_control(
            'divider_height',
            [
                'label' => __( 'Height', 'elementor' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'description' => 'Default: 2px',
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 2,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-card .divider' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // Background Color
        $this->add_control(
            'divider_backgorund_color',
            [
                'label' => __( 'Background Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba( 0,0,0,0.05 )',
                'selectors' => [
                    '{{WRAPPER}} .image-card .divider ' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();


        /**
         * Top badge Style Settings
         */
        $this->start_controls_section(
            'top_badge_style_section',
            [
                'label' => __( 'Top Badge', 'elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Background Color
        $this->add_control(
            'top_badge_backgorund_color',
            [
                'label' => __( 'Background Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#562dd4',
                'selectors' => [
                    '{{WRAPPER}} .image-card .image .top-price-badge' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        // Text Color
        $this->add_control(
            'top_badge_text_color',
            [
                'label' => __( 'Text Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .image-card .image .top-price-badge' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'top_badge_typography',
                'label' => __( 'Typography', 'elementor' ),
                'selector' => '{{WRAPPER}} .image-card .image .top-price-badge',
            ]
        );

        $this->end_controls_section();


        /**
         * Middle badge Style Settings
         */
        $this->start_controls_section(
            'middle_badge_style_section',
            [
                'label' => __( 'Middle Badge', 'elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Background Color
        $this->add_control(
            'middle_badge_backgorund_color',
            [
                'label' => __( 'Background Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#562dd4',
                'selectors' => [
                    '{{WRAPPER}} .image-card .image .middle-price-badge' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        // Text Color
        $this->add_control(
            'middle_badge_text_color',
            [
                'label' => __( 'Text Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .image-card .image .middle-price-badge' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'middle_badge_typography',
                'label' => __( 'Typography', 'elementor' ),
                'selector' => '{{WRAPPER}} .image-card .image .middle-price-badge',
            ]
        );

        $this->end_controls_section();


        /**
         * Bottom badge Style Settings
         */
        $this->start_controls_section(
            'bottom_badge_style_section',
            [
                'label' => __( 'Bottom Badge', 'elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Background Color
        $this->add_control(
            'bottom_badge_backgorund_color',
            [
                'label' => __( 'Background Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#562dd4',
                'selectors' => [
                    '{{WRAPPER}} .image-card .content .readmore .bottom-price-badge' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        // Text Color
        $this->add_control(
            'bottom_badge_text_color',
            [
                'label' => __( 'Text Color', 'elementor' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .image-card .content .readmore .bottom-price-badge' => 'color: {{VALUE}}',
                ],
            ]
        );

        // Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'bottom_badge_typography',
                'label' => __( 'Typography', 'elementor' ),
                'selector' => '{{WRAPPER}} .image-card .content .readmore .bottom-price-badge',
            ]
        );

        $this->end_controls_section();


         /**
         * Buy Button Style Settings
         */
        $this->start_controls_section(
            'buy_button_style_section',
            [
                'label' => __( 'Buy Button', 'elementor' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

            // Button Tabs
            $this->start_controls_tabs(
                'but_button_style_tabs'
            );
                // Normal State
                $this->start_controls_tab(
                    'buy_button_normal_state',
                    [
                        'label' => __( 'Normal', 'elementor' ),
                    ]
                );
                    // Background Color
                    $this->add_control(
                        'but_button_normal_bg_color',
                        [
                            'label' => __( 'Background Color', 'elementor' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '#562dd4',
                            'selectors' => [
                                '{{WRAPPER}} .image-card .readmore a.button-readmore' => 'background-color: {{VALUE}}',
                            ],
                        ]
                    );
                    // Text Color
                    $this->add_control(
                        'but_button_normal_text_color',
                        [
                            'label' => __( 'Text Color', 'elementor' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '#fff',
                            'selectors' => [
                                '{{WRAPPER}} .image-card .readmore a.button-readmore' => 'color: {{VALUE}}',
                            ],
                        ]
                    );
                $this->end_controls_tab();

                // Hover State
                $this->start_controls_tab(
                    'buy_button_hover_state',
                    [
                        'label' => __( 'Hover', 'elementor' ),
                    ]
                );
                    // Background Color
                    $this->add_control(
                        'but_button_hover_bg_color',
                        [
                            'label' => __( 'Background Color', 'elementor' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '#707070',
                            'selectors' => [
                                '{{WRAPPER}} .image-card .readmore a.button-readmore:hover' => 'background-color: {{VALUE}}',
                            ],
                        ]
                    );
                    // Text Color
                    $this->add_control(
                        'but_button_hover_text_color',
                        [
                            'label' => __( 'Text Color', 'elementor' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '#fff',
                            'selectors' => [
                                '{{WRAPPER}} .image-card .readmore a.button-readmore:hover' => 'color: {{VALUE}}',
                            ],
                        ]
                    );
                $this->end_controls_tab();

            $this->end_controls_tabs();

            // Typography
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'buy_button_typography',
                    'label' => __( 'Typography', 'elementor' ),
                    'selector' => '{{WRAPPER}} .image-card .readmore a.button-readmore',
                ]
            );

        $this->end_controls_section();

        


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        // Image
        $image_target = $settings['image_link']['is_external'] ? ' target="_blank"' : '';
        $image_nofollow = $settings['image_link']['nofollow'] ? ' rel="nofollow"' : '';

        // Button
        $button_target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
        $button_nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : '';

        ?>

        <div class="image-card">

            <div class="image-wrapper">
                <div class="image" style="background-image: url(<?php echo esc_url($settings['image']['url']); ?>);">
                    <?php if ('yes' == $settings['show_image_link']): ?>
                        <a href="<?php echo esc_url($settings['image_link']['url']) ?>" <?php echo $image_target; ?> <?php echo $image_nofollow; ?>></a>
                    <?php endif;?>
                    <?php if ('yes' == $settings['show_top_badge']): ?>
                        <span class="top-price-badge badge-blue"><?php echo $settings['top_badge_text']; ?></span>
                    <?php endif;?>
                    <?php if ('yes' == $settings['show_middle_badge']): ?>
                        <span class="middle-price-badge badge-blue"><?php echo $settings['middle_badge_text']; ?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="content">

                <div class="title">
                    <h2><?php echo $settings['card_title']; ?></h2>
                </div>

                <?php if ('yes' == $settings['show_divider']): ?>
                    <div class="divider"></div>
                <?php endif;?>

                <div class="excerpt">
                    <?php echo $settings['item_description'] ?>
                </div>

                <div class="readmore">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>" <?php echo $button_target; ?> <?php echo $button_nofollow; ?> class="button button-readmore"><?php echo $settings['button_text']; ?></a>

                        <?php if ('yes' == $settings['show_bottom_badge']): ?>
                            <span class="bottom-price-badge badge-blue">$<?php echo $settings['bottom_badge_text']; ?></span>
                        <?php endif;?>

                    </div>
            </div>
        </div>

        <?php
}

}
