<?php

/**
 * Title: Latest Post Block
 * Slug: fota-agency/post-block
 * Categories: fota-agency-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"600"}},"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-bottom:0;font-style:normal;font-weight:600;line-height:1">Our Recent Articles</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":29,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
        <div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-featured-image {"height":"300px","style":{"border":{"radius":"10px"}}} /-->

            <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-lite"}}}},"className":"is-style-categories-background-with-round-small","fontSize":"x-small"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|30"}},"typography":{"fontSize":"28px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"className":"is-style-title-hover-secondary-color"} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
            <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

                <!-- wp:paragraph -->
                <p>.</p>
                <!-- /wp:paragraph -->

                <!-- wp:post-author-name /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->