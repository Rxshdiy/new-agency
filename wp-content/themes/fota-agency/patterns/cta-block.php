<?php

/**
 * Title: CTA Block
 * Slug: fota-agency/cta-block
 * Categories: fota-agency-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"7rem"}}},"backgroundColor":"transparent","layout":{"type":"constrained","contentSize":"1160px"}} -->
<div class="wp-block-group has-transparent-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":"20px"},"color":{"background":"#191919"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center has-background" style="border-radius:20px;background-color:#191919;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":5,"textColor":"accent-lite","fontSize":"small"} -->
            <h5 class="wp-block-heading has-accent-lite-color has-text-color has-small-font-size">Join the Innovative Community</h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.2,"fontSize":"36px"}},"textColor":"foregound-alt"} -->
            <h2 class="wp-block-heading has-foregound-alt-color has-text-color" style="font-size:36px;font-style:normal;font-weight:600;line-height:1.2">Create your account today and get started for free!</h2>
            <!-- /wp:heading -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"border":{"radius":"40px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:40px">Get Started</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"transparent","textColor":"foregound-alt","style":{"border":{"radius":"40px"}},"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-foregound-alt-color has-transparent-background-color has-text-color has-background wp-element-button" style="border-radius:40px">Get Started</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":531,"height":500,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"15px","bottomRight":"15px"}}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url(get_stylesheet_directory_uri())  ?>/assets/images/cta_image.jpg" alt="" class="wp-image-531" style="border-top-right-radius:15px;border-bottom-right-radius:15px" height="500" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->