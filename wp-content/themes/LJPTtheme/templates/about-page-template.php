<?php
/**
* Template Name: LJPT - Page qui sommes nous ?
*/
?>
<?php get_header() ?>

<div class="main-img" style="background-image: url('<?= get_theme_mod('about_page_banner') ?>')">
    <div class="titles">
        <h2><?php wp_title('') ?></h2>
    </div>
</div>

<div class="main-container">
    <div class="main">
        <?= get_the_content() ?>
    </div>
</div>

<?php get_footer() ?>