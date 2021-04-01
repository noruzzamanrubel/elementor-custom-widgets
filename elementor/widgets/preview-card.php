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
                'label' => __( 'Description', 'elementor' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Default description', 'elementor' ),
                'placeholder' => __( 'Type your description here', 'elementor' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $image_target = $settings['image_link']['is_external'] ? ' target="_blank"' : '';
        $image_nofollow = $settings['image_link']['nofollow'] ? ' rel="nofollow"' : '';

        ?>

        <div class="image-card">
            <div class="image">
                <a href="<?php echo esc_url($settings['image_link']['url']); ?>" <?php echo $image_target; ?> <?php echo $image_nofollow; ?>>
                    <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
                </a>
                <span class="top-price-badge badge-blue">$19.99</span>
            </div>
            <div class="content">

                <div class="title">
                    <h2><?php echo $settings['card_title']; ?></h2>
                </div>

                <?php if ('yes' == $settings['show_divider']): ?>
                    <div class="divider"></div>
                <?php endif;?>

                <div class="excerpt">
                    <p>Choose your room light carefully. It can enlight your workspace or can cause you disaster!</p>
                </div>
                <div class="readmore">
                    <a href="" class="button button-readmore">Buy Now</a>
                </div>
            </div>
        </div>

        <?php
}

}
