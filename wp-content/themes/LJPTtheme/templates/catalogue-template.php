<?php
/**
* Template Name: LJPT - Page catalogue
*/
?>
<?php get_header() ?>

<div class="main-container catalogue-page-main-container" style="<?= is_user_logged_in() ? 'height: 90.5vh' : '' ?>">
    <?= get_the_content() ?>
</div>

<?php wp_footer() ?>