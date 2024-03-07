<?php
/**
 * Slug: wmdd-bakery/header-cover
 * Title: Header with Cover Image
 * Categories: header
 */
?>

<!-- wp:cover {"url":"<?php echo get_template_directory_uri() . '/assets/images/bread-top.jpg' ?>","id":46,"dimRatio":80,"overlayColor":"background","minHeight":500,"contentPosition":"bottom center","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="min-height:500px">
    <span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span>
    <img class="wp-block-cover__image-background wp-image-46" alt="bread" src="<?php echo get_template_directory_uri() . '/assets/images/bread-top.jpg' ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:site-title /-->
            </div>
        <!-- /wp:group -->
        <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:navigation {"ref":15, "style":{"typography":{"fontSize":"1.2rem"}}} /-->
    </div>
</div>
<!-- /wp:cover -->
