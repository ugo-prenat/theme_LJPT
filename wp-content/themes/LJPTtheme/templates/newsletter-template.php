<?php
/**
* Template Name: LJPT - Page newsletter
*/
?>
<?php get_header() ?>

<div class="main-img" style="background-image: url('<?= get_theme_mod('newsletter_page_banner') ?>')">
    <div class="titles">
        <h2>Inscription à la newsletter</h2>
    </div>
    <div class="fade"></div>
</div>

<div class="main-container newsletter-page-main-container">
    <div class="main">
        <?php the_content() ?>
    </div>
</div>

<?php get_footer() ?>