<?php
/**
 * Slug: wmdd-bakery/front-page
 * Title: Front Page Dynamic Link
 * Categories: header
 */
?>

<!-- wp:cover {"url":"<?php echo get_template_directory_uri() . '/assets/videos/cereal.mp4' ?>","id":107,"dimRatio":50,"overlayColor":"foreground","backgroundType":"video","minHeight":100,"minHeightUnit":"vh","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:100vh">
    <span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
    <video class="wp-block-cover__video-background intrinsic-ignore" autoplay="" muted="" loop="" playsinline="" src="<?php echo get_template_directory_uri() . '/assets/videos/cereal.mp4' ?>" data-object-fit="cover"></video>
    <div class="wp-block-cover__inner-container">
        <!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} /-->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link wp-element-button"
                        href="<?php echo get_permalink(get_page_by_path('wmdd-bakery-posts')) ?>">Discover Bread from All over the World</a>
                </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->
