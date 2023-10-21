<?php

/**
 * Title: About Us Block
 * Slug: fota-agency/about-block
 * Categories: fota-agency-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"6rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":495,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/about_image.jpg" alt="" class="wp-image-495" style="border-radius:10px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.2,"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
            <h5 class="wp-block-heading has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500;line-height:1.2;text-transform:uppercase">About Us</h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.2}}} -->
            <h2 class="wp-block-heading" style="font-style:normal;font-weight:600;line-height:1.2">Integrated with your favourite tools for power-up conversion</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"heading-color","style":{"border":{"radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-background-color has-background wp-element-button" style="border-radius:50px">Request Demo <img class="wp-image-478" style="width: 15px;" src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/button_arrow.png" alt=""></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->