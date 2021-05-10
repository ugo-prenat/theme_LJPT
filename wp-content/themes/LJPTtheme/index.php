<?php get_header(); ?>
<div class="main-img" style="background-image: url('<?= get_theme_mod('homepage_banner') ?>')">
    <div class="titles">
        <h1>Association <?= get_bloginfo('name') ?></h1>
        <p><?= get_bloginfo('description') ?></p>
    </div>
    <div class="sidebar-container">
        <?php get_sidebar('homepage') ?>
    </div>
    <!-- <div class="fade"></div> -->
</div>
<div class="main-container">

    <?php if(have_posts()): ?>
        <ul class="article-list-container">
            <?php while(have_posts()): the_post() ?>
                <li class="article">
                    <div class="article-content">
                        <a href="<?php the_permalink() ?>" class="article-title-link">
                            <h2><?php the_title() ?></h2>
                        </a>
                        <p class="author-and-date"><?php the_author() ?> le <?php echo get_the_date() ?></p>
                        <div class="article-text">
                            <?php the_content() ?>
                        </div>
                        <div class="article-btns">
                            <a href="<?php the_permalink() ?>" class="read-more-btn">
                                <p>Afficher l'article</p>
                                <img src="<?= get_template_directory_uri() . '/img/right-arrow.png' ?>" alt="Image flèche">
                            </a>
                            <a href="" class="share-btn">
                                <img src="<?= get_template_directory_uri() . '/img/share.png' ?>" alt="Image paratger">
                                <p>Partager</p>
                            </a>
                        </div>
                        <div class="back-articles-btns"></div>
                    </div>

                    <div class="article-img" style="background-image: url('<?= get_post_img_url() ?>')"></div>
                </li>
            <?php endwhile ?>
        </ul>

    <?php else: ?>
        <p>Aucun article</p>
    <?php endif; ?>
    <div class="paginate-container">
        <?= paginate_links() ?>
    </div>
</div>
<?php get_footer() ?>
