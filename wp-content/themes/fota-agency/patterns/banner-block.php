<?php

/**
 * Title: Banner Block
 * Slug: fota-agency/banner-block
 * Categories: fota-agency-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1}},"fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-xxx-large-font-size" style="font-style:normal;font-weight:600;line-height:1">A dedicated team to grow your company.</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.&nbsp;</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"heading-color","style":{"border":{"radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-background-color has-background wp-element-button" href="#" style="border-radius:50px">Get Started<img class="wp-image-478" style="width: 15px;" src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/button_arrow.png" alt=""></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"border":{"radius":"50px"}},"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:50px">View Plans</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":444,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/banner_image.png" alt="" class="wp-image-444" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->