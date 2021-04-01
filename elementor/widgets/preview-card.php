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

            <div class="image">

                <a href="<?php echo esc_url($settings['image_link']['url']); ?>" <?php echo $image_target; ?> <?php echo $image_nofollow; ?>>
                    <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
                </a>

                <?php if ('yes' == $settings['show_top_badge']): ?>
                    <span class="top-price-badge badge-blue">$<?php echo $settings['top_badge_text']; ?></span>
                <?php endif;?>

                <?php if ('yes' == $settings['show_middle_badge']): ?>
                    <span class="middle-price-badge badge-blue">$<?php echo $settings['middle_badge_text']; ?></span>
                <?php endif;?>

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
                <a href="<?php echo esc_url( $settings[ 'button_link' ][ 'url' ] ); ?>" <?php echo $button_target; ?> <?php echo $button_nofollow; ?> class="button button-readmore"><?php echo $settings[ 'button_text' ];  ?></a>

                    <?php if ('yes' == $settings['show_bottom_badge']): ?>
                        <span class="bottom-price-badge badge-blue">$<?php echo $settings['bottom_badge_text']; ?></span>
                    <?php endif;?>

                </div>
            </div>
        </div>

        <?php
}

}
