<?php
/**
* Template Name: LJPT - Page bonus
*/
?>
<?php get_header() ?>

<div class="main-img" style="background-image: url('<?= get_theme_mod('bonus_page_banner') ?>')">
    <div class="titles">
        <h2><?php wp_title('') ?></h2>
    </div>
    <div class="fade"></div>
</div>

<div class="main-container bonus-page-main-container">
    <div class="main">
        <?= get_the_content() ?>
    </div>
</div>

<?php get_footer() ?>