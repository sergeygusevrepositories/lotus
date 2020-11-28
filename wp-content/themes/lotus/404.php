<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage lotus
 */
get_header(); ?>
    <div class="error">
        <div class="container">
            <div class="error_block">
                <div class="error_block--big">404</div>
                <div class="error_block--p">Page not found</div>
                <div class="error_block--line"></div>
                <a href="<?php echo home_url(); ?>" class="error_block--btn btn">GO BACK</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>