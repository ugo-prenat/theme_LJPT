<?php
/**
* Template Name: LJPT - Page infos pratiques
*/
?>
<?php get_header() ?>

<div class="main-img" style="background-image: url('<?= get_theme_mod('practical_data_page_banner') ?>')">
    <div class="titles">
        <h2><?php wp_title('') ?></h2>
    </div>
    <?php get_sidebar('practical-data') ?>
    <div class="fade"></div>
</div>

<div class="main-container practical-data-page-main-container">
    <div class="main">
        <?= get_the_content() ?>
    </div>
</div>

<?php get_footer() ?>