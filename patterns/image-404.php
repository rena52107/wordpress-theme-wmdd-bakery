<?php
/**
 * Slug: wmdd-bakery/image-404
 * Title: Image 404 
 * Categories: header
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:cover {"url":"<?php echo get_template_directory_uri() . '/assets/images/404-bread.jpg' ?>","id":55,"dimRatio":50,"style":{"color":[]}} -->
    <div class="wp-block-cover" id="image-404-page">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
        <img class="wp-block-cover__image-background wp-image-55" alt="" src="<?php echo get_template_directory_uri() . '/assets/images/404-bread.jpg' ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size">404 Page not found</p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","theme":"wmdd-bakery","tagName":"footer","align":"full"} /-->