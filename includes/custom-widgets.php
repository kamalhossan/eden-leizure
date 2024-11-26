<?php
// Start building widgets for the wp bakery
function eden_custom_widgets() {
    // Slider with center big slide
    vc_map( array(
        'name'     => __( 'Eden custom Gallery Slider', 'salient' ),
        'base'     => 'eden_custom_gallery_slider',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'attach_images',
                'heading'     => __( 'Select Images', 'salient' ),
                'param_name'  => 'images',
                'description' => __( 'Select multiple images from the media library.', 'salient' ),
            ),
        ),
    ));

    // Spcial media feed slider
    vc_map( array(
        'name'     => __( 'Eden Social Feed Slider', 'salient' ),
        'base'     => 'eden_custom_gallery_slider_with_date_text',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Slides', 'salient' ),
                'param_name'  => 'slides',
                'params'      => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Description', 'salient' ),
                        'param_name' => 'description',
                    ),
                ),
                'description' => __( 'Add slides with images, titles, and descriptions.', 'salient' ),
            ),
        ),
    ));

    // Online booking section
    vc_map( array(
        'name'     => __( 'Book Online Section', 'salient' ),
        'base'     => 'eden_book_online_section',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Extra Class', 'salient' ),
                'param_name'  => 'classes',
                'description' => __( 'Add class for customization.', 'salient' ),
            ),
        ),
    ));

    // Banner section
    vc_map( array(
        'name'     => __( 'Eden Custom Banner Slider', 'salient' ),
        'base'     => 'eden_custom_banner_slider',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Slides', 'salient' ),
                'param_name' => 'slides',
                'params'     => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Slider Image', 'salient' ),
                        'param_name' => 'slider_image',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Slider center text Image', 'salient' ),
                        'param_name' => 'slider_center_text_image',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Center Heading Text', 'salient' ),
                        'param_name' => 'center_heading',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'center text', 'salient' ),
                        'param_name' => 'center_text',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Book Now Button Link', 'salient' ),
                        'param_name' => 'book_now_link',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Learn More Button Link', 'salient' ),
                        'param_name' => 'learn_more_link',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Video Link', 'salient' ),
                        'param_name' => 'video_link',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Paragraph', 'salient' ),
                        'param_name' => 'paragraph',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'extra class', 'salient' ),
                        'param_name' => 'extra_class',
                    ),
                    array(
                        'type'       => 'dropdown_multi',
                        'heading'    => __( 'Options', 'salient' ),
                        'param_name' => 'options',
                        'value'      => array(
                            __( 'Multiplayer', 'salient' ) => 'multiplayer',
                            __( 'age 12+', 'salient' )     => '12_plus_age_people',
                        ),
                    ),
                ),
            ),
        ),
    ));

    // Custom Gallery Slider having content and readmore functionality
    vc_map( array(
        'name'     => __( 'Custom Gallery Slider having content and readmore functionality', 'salient' ),
        'base'     => 'custom_gallery_slider_having_content_and_readmore_functionality',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Slides', 'salient' ),
                'param_name'  => 'slides',
                'params'      => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Content', 'salient' ),
                        'param_name' => 'content',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Highlighted Text', 'salient' ),
                        'param_name' => 'highlighted_text',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Button URL', 'salient' ),
                        'param_name' => 'button_url',
                    ),
                ),
                'description' => __( 'Add slides with images, titles, content, and a button.', 'salient' ),
            ),
        ),
    ));

    // For the custom gallery slider having center slide very big
    vc_map( array(
        'name'     => __( 'Eden custom slick slider having center big', 'salient' ),
        'base'     => 'eden_custom_slick_slider',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Slides', 'salient' ),
                'param_name' => 'slides',
                'params'     => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                ),
            ),
        ),
    ));

    // Activity cards
    vc_map( array(
        'name' => __( 'Eden Custom Activity Cards', 'salient' ),
        'base' => 'eden_custom_activity_cards',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params' => array(
            array(
                'type' => 'param_group',
                'heading' => __( 'Cards', 'text-domain' ),
                'param_name' => 'cards',
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        'heading' => __( 'Background Image', 'text-domain' ),
                        'param_name' => 'background_image',
                        'description' => __( 'Select a background image from the media library.', 'text-domain' ),
                    ),
                    array(
                        'type' => 'attach_image',
                        'heading' => __( 'Thumbnail Image', 'text-domain' ),
                        'param_name' => 'thumbnail_image',
                        'description' => __( 'Select a thumbnail image from the media library.', 'text-domain' ),
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' => __( 'Content', 'text-domain' ),
                        'param_name' => 'content',
                        'description' => __( 'Enter some content.', 'text-domain' ),
                    ),
                    array(
                        'type' => 'vc_link',
                        'heading' => __( 'Book Now Button', 'text-domain' ),
                        'param_name' => 'book_now_button',
                        'description' => __( 'Add a title and link for the Book Now button.', 'text-domain' ),
                    ),
                    array(
                        'type' => 'vc_link',
                        'heading' => __( 'Learn More Button', 'text-domain' ),
                        'param_name' => 'learn_more_button',
                        'description' => __( 'Add a title and link for the Learn More button.', 'text-domain' ),
                    ),
                    array(
                        'type'       => 'dropdown_multi',
                        'heading'    => __( 'Options', 'salient' ),
                        'param_name' => 'options',
                        'value'      => array(
                            __( 'Multiplayer', 'salient' ) => 'multiplayer',
                            __( 'age 12+', 'salient' )     => '12_plus_age_people',
                        ),
                    ),
                ),
            ),
        ),
    ));
    
    // Custom Gallery Slider having content and readmore functionality
    vc_map( array(
        'name'     => __( 'Custom Gallery Slider having content and readmore functionality with title and subtitle', 'salient' ),
        'base'     => 'custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Title', 'salient' ),
                'param_name'  => 'main_title',
                'description' => __( 'Add title for customization.', 'salient' ),
            ),
            array(
                'type'        => 'textarea',
                'heading'     => __( 'Content', 'salient' ),
                'param_name'  => 'main_content',
                'description' => __( 'Add content for customization.', 'salient' ),
            ),
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Slides', 'salient' ),
                'param_name'  => 'slides',
                'params'      => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Content', 'salient' ),
                        'param_name' => 'content',
                    ),
                     // Nested Repeater for list items
                    array(
                        'type'        => 'param_group',
                        'heading'     => __( 'List Items', 'salient' ),
                        'param_name'  => 'list_items',
                        'params'      => array(
                            array(
                                'type'       => 'textfield',
                                'heading'    => __( 'List Item', 'salient' ),
                                'param_name' => 'list_item',
                            ),
                            array(
                                'type'       => 'textarea',
                                'heading'    => __( 'Hover Content', 'salient' ),
                                'param_name' => 'hover_content',
                            ),
                        ),
                        'description' => __( 'Add list items with hover content for each slide.', 'salient' ),
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Highlighted Text', 'salient' ),
                        'param_name' => 'highlighted_text',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Button URL', 'salient' ),
                        'param_name' => 'button_url',
                    ),
                ),
                'description' => __( 'Add slides with images, titles, content, and a button.', 'salient' ),
            ),
        ),
    ));

}
add_action( 'vc_before_init', 'eden_custom_widgets' );

// For the home page - slider
add_shortcode( 'eden_custom_gallery_slider', 'eden_custom_gallery_slider_callback' );
function eden_custom_gallery_slider_callback( $atts ) {
    $atts = shortcode_atts( array(
        'images' => '',
    ), $atts, 'eden_custom_gallery_slider' );

    $image_ids = explode( ',', $atts['images'] );

    ob_start();
    ?>
    <div class="custom-gallery-slider">
        <div class="slick-slider">
            <?php foreach ( $image_ids as $image_id ): ?>
                <div class="slick-slide item item-<?php echo $image_id; ?>">
                    <?php $image_url = wp_get_attachment_image_src( $image_id, 'full' );?>
                    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// slider with big slide in the center having date and content
add_shortcode( 'eden_custom_gallery_slider_with_date_text', 'eden_custom_gallery_slider_with_date_text_callback' );
function eden_custom_gallery_slider_with_date_text_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
    ), $atts, 'eden_custom_gallery_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );

    ob_start();
    ?>
    <div class="custom-gallery-slider-center-big">
        <div class="social-feed-slider">
            <?php foreach ( $slides as $slide ): ?>
                <?php
                    $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                    $title = isset( $slide['title'] ) ? $slide['title'] : '';
                    $description = isset( $slide['description'] ) ? $slide['description'] : '';
                    $image_url = wp_get_attachment_image_src( $image_id, 'full' );
                ?>
                <div class="feed item item-<?php echo esc_attr( $image_id ); ?>">
                    <div class="card">
                        <?php if ( $image_url ): ?>
                            <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                        <?php endif;?>
                        <?php if ( $title ): ?>
                            <h3><?php echo esc_html( $title ); ?></h3>
                        <?php endif;?>
                        <?php if ( $description ): ?>
                            <p><?php echo esc_html( $description ); ?></p>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Book online section
add_shortcode( 'eden_book_online_section', 'eden_book_online_section_callback' );
function eden_book_online_section_callback( $atts ) {
    $atts = shortcode_atts( array(
        'classes' => 'default',
    ), $atts, 'eden_book_online_section' );

    $classes = $atts['classes'];

    ob_start();

    ?>

   <!-- <div class="top-section">
    <div class="view-offer">
            <div class="btn-con">
                <a href="" class="btn offer">View Our Offers</a>
            </div>
        </div>
   </div> -->

    <div class="book-now-shortcode">
        <div class="<?php echo $classes; ?>">
            <div class="book-online">
                <div class="title">
                    <h2>Book Online</h2>
                </div>
                <div class="activity">
                    <div class="info-card">
                        <div class="title">
                            <h4>Activity</h4>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book-arrow.png" alt="">
                        </div>
                        <p>Which activity do you want to book</p>
                    </div>
                </div>
                <div class="date-and-time">
                    <div class="info-card">
                        <div class="title">
                            <h4>Date & Time</h4>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book-arrow.png" alt="">
                        </div>
                        <p>Find the most suitable date and time</p>
                    </div>
                </div>
                <div class="people">
                <div class="info-card">
                        <div class="title">
                            <h4>People</h4>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/book-arrow.png" alt="">
                        </div>
                        <p>Add the number of participants</p>
                </div>
                <div class="action">
                    <a href="#" class="btn book-now">Book Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    return ob_get_clean();
}

// Banner slider
add_shortcode( 'eden_custom_banner_slider', 'eden_custom_banner_slider_callback' );
function eden_custom_banner_slider_callback( $atts ) {
    $atts = shortcode_atts( [
        'slides' => '',
    ], $atts, 'eden_custom_banner_slider' );
    $slides = $atts['slides'];
    if ( !empty( $slides ) ) {
        $slides = json_decode( urldecode( $slides ), true ); // Convert JSON string to PHP array
        $count = count($slides);
        ob_start();
        ?>
            <div class="hero-slider-widget">
                <div class="hero-slider">
                    <?php foreach ( $slides as $slide ) { ?>
                        <div class="slide-item <?php echo esc_html( $slide['extra_class'] ); ?>" style="background-image: url(<?php echo esc_url( wp_get_attachment_url( $slide['slider_image'] ) ); ?>);">
                            <?php if ( !empty( $slide['slider_image'] ) ) { ?>
                                <div class="slide_inner">
                                    <div class="center-text">
                                        <?php if ( !empty( $slide['slider_center_text_image'] ) ): ?>
                                            <img class="banner-logo" src="<?php echo esc_url( wp_get_attachment_url( $slide['slider_center_text_image'] ) ); ?>" alt="center text Image">
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['center_heading'] ) ): ?>
                                            <h2 class="banner-heading"><?php echo esc_html( $slide['center_heading'] ); ?></h2>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['center_text'] ) ): ?>
                                            <p class="banner-text"><?php echo esc_html( $slide['center_text'] ); ?></p>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['book_now_link'] ) ): ?>
                                            <?php $book_now = vc_build_link( $slide['book_now_link'] );?>
                                            <a class="enquire-btn" href="<?php echo esc_url( $book_now['url'] ); ?>"><?php echo esc_html( $book_now['title'] ); ?></a>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['learn_more_link'] ) ): ?>
                                            <?php $learn_more = vc_build_link( $slide['learn_more_link'] );?>
                                            <a class="learn-more" href="<?php echo esc_url( $learn_more['url'] ); ?>"><?php echo esc_html( $learn_more['title'] ); ?></a>
                                        <?php endif;?>
                                    </div>
                                    <div class="bottom-features">
                                        <?php if ( !empty( $slide['video_link'] ) ): ?>
                                            <div class="watch">
                                            <?php $video_link = vc_build_link( $slide['video_link'] );?>
                                                <a class="video" href="<?php echo esc_url( $video_link['url'] ); ?>">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play.png" alt="play icon">
                                                <?php echo esc_html( $video_link['title'] ); ?>
                                                </a>
                                            </div>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['paragraph'] ) ): ?>
                                            <p class="bottom-text"><?php echo esc_html( $slide['paragraph'] ); ?></p>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['options'] ) ): ?>
                                            <?php
                                                echo "<div class='bottom-features-options'>";
                                                foreach ( $slide['options'] as $options ) {
                                                    echo "<div class='features'>";
                                                    if ( $options == '12_plus_age_people' ) {
                                                        echo "<img src='" . get_stylesheet_directory_uri() . "/images/age-limit.png' alt='age-limit'>";
                                                        echo "<span class='age-limit'>Age 12+</span>";
                                                    } elseif ( $options == 'multiplayer' ) {
                                                        echo "<img src='" . get_stylesheet_directory_uri() . "/images/multiplayer.png' alt='multiplayer'>";
                                                        echo "<span class='age-limit'>multiplayer</span>";
                                                    } else {
                                                        echo "<span>" . esc_html( $options ) . "</span>";
                                                    }
                                                    echo "</div>";
                                                }
                                                echo "</div>";
                                            ?>
                                        <?php endif;?>
                                    </div>
                                    <div class="promotions">
                                        <div class="feature-promotion">
                                            <img src="<?php echo get_stylesheet_directory_uri() . "/images/XPA-Logo.png"; ?>" alt="feature-promotion">
                                            <span>4 NEW ARCADE HIGH-SCORES TODAY!</span>
                                        </div>
                                        <div class="feature-activity">
                                            <img src="<?php echo get_stylesheet_directory_uri() . "/images/karaoke-party-img.png"; ?>" alt="feature-activity">
                                            <span>Introducing the multi-player high-end laser tag-battle, perfect for groups, parties and corporate events</span>
                                            <div class="feature-redirections">
                                                <a href="#">Book now</a>
                                                <a href="#">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if($count > 1){ ?>
                                        <div class="hero-current-slide-count">1</div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
    return ob_get_clean();
    }
    return ''; // Return empty string if no slides
}

// Custom Gallery Slider having content and readmore functionality
add_shortcode( 'custom_gallery_slider_having_content_and_readmore_functionality', 'custom_gallery_slider_having_content_and_readmore_functionality_callback' );
function custom_gallery_slider_having_content_and_readmore_functionality_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
    ), $atts, 'custom_gallery_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );

    ob_start();
    ?>
    <div class="slider-with-readmore-readless-btns">
        <div class="slider-with-content-readmore-less">
            <?php foreach ( $slides as $slide ): ?>
                <?php
                    $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                    $title = isset( $slide['title'] ) ? $slide['title'] : '';
                    $content = isset( $slide['content'] ) ? $slide['content'] : '';
                    $highlighted_text = isset( $slide['highlighted_text'] ) ? $slide['highlighted_text'] : '';
                    $button_url = isset( $slide['button_url'] ) ? vc_build_link( $slide['button_url'] ) : array();
                    $image_url = wp_get_attachment_image_src( $image_id, 'full' );
                ?>
                <div class="slick-slide item item-<?php echo esc_attr( $image_id ); ?>">
                    <div class="card" style="position: relative;">
                        <?php if ( $image_url ): ?>
                            <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                        <?php endif;?>
                        <div class="content-overlay">
                            <?php if ( $title ): ?>
                                <h3><?php echo esc_html( $title ); ?></h3>
                            <?php endif;?>
                            <div class="content-short">
                                <?php echo wp_kses_post( wp_trim_words( $content, 20, '...' ) ); ?>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                            <div class="content-full" style="display: none;">
                                <?php echo wp_kses_post( $content ); ?>
                                <b><?php echo esc_html( $highlighted_text ); ?></b>
                                <?php if ( !empty( $button_url['url'] ) && !empty( $button_url['title'] ) ): ?>
                                    <a href="<?php echo esc_url( $button_url['url'] ); ?>" class="button" <?php echo $button_url['target'] ? 'target="' . esc_attr( $button_url['target'] ) . '"' : ''; ?>>
                                        <?php echo esc_html( $button_url['title'] ); ?>
                                    </a>
                                <?php endif;?>
                                <a href="#" class="button content-less">Read Less</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Custom Gallery Slider having content and readmore functionality with title and subtitle
add_shortcode( 'custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle', 'custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle_callback' );
function custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
        'main_title' => '',
        'main_content' => '',
    ), $atts, 'custom_gallery_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );
    $main_title = $atts['main_title'];
    $main_content = $atts['main_content'];

    ob_start();
    ?>
    
    <div class="readmore-slider-with-title-and-content">
        <div class="title-and-content">
            <?php if (!empty($main_title)): ?>
                <h2><?php echo esc_html($main_title); ?></h2>
            <?php endif; ?>
            <?php if (!empty($main_content)): ?>
                <p><?php echo wp_kses_post($main_content); ?></p>
            <?php endif; ?>
        </div>
        <div class="slider-with-readmore-readless-btns">  
            <div class="slider-with-content-readmore-less">
                <?php foreach ( $slides as $slide ) { ?>
                    <?php
                        $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                        $title = isset( $slide['title'] ) ? $slide['title'] : '';
                        $content = isset( $slide['content'] ) ? $slide['content'] : '';
                        $highlighted_text = isset( $slide['highlighted_text'] ) ? $slide['highlighted_text'] : '';
                        $button_url = isset( $slide['button_url'] ) ? vc_build_link( $slide['button_url'] ) : array();
                        $image_url = wp_get_attachment_image_src( $image_id, 'full' );
                        $list_items = vc_param_group_parse_atts($slide['list_items']);
                    ?>
                    <div class="slick-slide item item-<?php echo esc_attr( $image_id ); ?>">
                        <div class="card" style="position: relative;">
                            <?php if ( $image_url ): ?>
                                <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                            <?php endif;?>
                            <div class="content-overlay">
                                <?php if ( $title ): ?>
                                    <h3><?php echo esc_html( $title ); ?></h3>
                                <?php endif;?>
                                <div class="content-short">
                                    <?php echo wp_kses_post( wp_trim_words( $content, 20, '...' ) ); ?>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                                <div class="content-full" style="display: none;">
                                    <?php echo wp_kses_post( $content ); ?>
                                    <ul class="list-items">
                                        <?php foreach ($list_items as $list_item): ?>
                                            <li>
                                                <span class="list-item-text"><?php echo esc_html($list_item['list_item']); ?></span>
                                                <span class="hover-content"><?php echo wp_kses_post($list_item['hover_content']); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <b><?php echo esc_html( $highlighted_text ); ?></b>
                                    <?php if ( !empty( $button_url['url'] ) && !empty( $button_url['title'] ) ): ?>
                                        <a href="<?php echo esc_url( $button_url['url'] ); ?>" class="button" <?php echo $button_url['target'] ? 'target="' . esc_attr( $button_url['target'] ) . '"' : ''; ?>>
                                            <?php echo esc_html( $button_url['title'] ); ?>
                                        </a>
                                    <?php endif;?>
                                    <a href="#" class="button content-less">Read Less</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// For the custom gallery slider having center slide very big
add_shortcode( 'eden_custom_slick_slider', 'eden_custom_slick_slider_callback' );
function eden_custom_slick_slider_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
    ), $atts, 'custom_slick_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );

    ob_start();
    ?>
    <div class="custom-gallery-having-center-slide-big">
        <?php foreach ( $slides as $slide ): ?>
            <?php
                $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                $image_url = wp_get_attachment_image_src( $image_id, 'full' );
            ?>
            <div class="gallery-item">
                <?php if ( $image_url ): ?>
                    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                <?php endif;?>
            </div>
        <?php endforeach;?>
    </div>

    <?php
    return ob_get_clean();
}

// Activity card section
add_shortcode( 'eden_custom_activity_cards', 'eden_custom_activity_cards_callback' );
function eden_custom_activity_cards_callback( $atts ) {
    $atts = shortcode_atts( array(
        'cards' => '',
    ), $atts, 'custom_eden_activity_cards' );

    $cards = vc_param_group_parse_atts( $atts['cards'] );

    ob_start();
    ?>
    <div class="custom-eden-activity-cards">
        <?php foreach ( $cards as $card ): 
            $bg_image_url = wp_get_attachment_image_src( $card['background_image'], 'full' );
            $thumbnail_image_url = wp_get_attachment_image_src( $card['thumbnail_image'], 'full' );
            $book_now_button = vc_build_link( $card['book_now_button'] );
            $learn_more_button = vc_build_link( $card['learn_more_button'] );
            ?>
            <div class="eden-activity-card" style="background-image: url('<?php echo esc_url( $bg_image_url[0] ); ?>');">
                <div class="hover-content">
                    <div class="hover-content-upper-part">
                        <?php if( $thumbnail_image_url ){ ?>
                            <div class="activity-card-thumbnail">
                                <img src="<?php echo esc_url( $thumbnail_image_url[0] ); ?>" alt="Thumbnail">
                            </div>
                        <?php } ?>
                        <div class="content">
                            <?php echo wp_kses_post( $card['content'] ); ?>
                        </div>
                        <?php if ( $book_now_button['url'] && $book_now_button['title'] ) { ?>
                            <a href="<?php echo esc_url( $book_now_button['url'] ); ?>" class="btn book-now" <?php echo $book_now_button['target'] ? 'target="' . esc_attr( $book_now_button['target'] ) . '"' : ''; ?>>
                                <?php echo esc_html( $book_now_button['title'] ); ?>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="hover-content-lower-part">
                        <?php if ( $learn_more_button['url'] && $learn_more_button['title'] ) { ?>
                            <div class='lower-part-button'>
                                <a href="<?php echo esc_url( $learn_more_button['url'] ); ?>" class="btn learn-more" <?php echo $learn_more_button['target'] ? 'target="' . esc_attr( $learn_more_button['target'] ) . '"' : ''; ?>>
                                    <?php echo esc_html( $learn_more_button['title'] ); ?>
                                </a>
                            </div>
                        <?php } ?>
                        <?php if ( !empty( $card['options'] ) ) { ?>
                            <?php
                                echo "<div class='lower-part-features-options'>";
                                foreach ( $card['options'] as $options ) {
                                    echo "<div class='features'>";
                                    if ( $options == '12_plus_age_people' ) {
                                        echo "<img src='" . get_stylesheet_directory_uri() . "/images/age-limit.png' alt='age-limit'>";
                                        echo "<span class='age-limit'>Age 12+</span>";
                                    } elseif ( $options == 'multiplayer' ) {
                                        echo "<img src='" . get_stylesheet_directory_uri() . "/images/multiplayer.png' alt='multiplayer'>";
                                        echo "<span class='age-limit'>multiplayer</span>";
                                    } else {
                                        echo "<span>" . esc_html( $options ) . "</span>";
                                    }
                                    echo "</div>";
                                }
                                echo "</div>";
                            ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
