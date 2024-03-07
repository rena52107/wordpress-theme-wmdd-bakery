<?php
/**
 * Slug: wmdd-bakery/pages-button
 * Title: Button to show glossary posts
 * Categories: buttons
 */
?>

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons alignwide">
        <!-- wp:button {"fontSize":"small"} -->
        <div class="wp-block-button has-custom-font-size has-small-font-size">
            <a class="wp-block-button__link wp-element-button" href="<?php echo get_home_url() . '/category/glossary/'?>">Discover more...</a>
        </div>
    <!-- /wp:button -->
    </div>
<!-- /wp:buttons -->


