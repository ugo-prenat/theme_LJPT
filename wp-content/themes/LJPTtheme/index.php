<?php get_header(); ?>
<div class="main-img" style="background-image: url('<?= get_theme_mod('homepage_banner') ?>')">
    <div class="titles">
        <h1>Association <?= get_bloginfo('name') ?></h1>
        <p><?= get_bloginfo('description') ?></p>
    </div>
    <div class="sidebar-container">
        <?php get_sidebar('homepage') ?>
    </div>
    <div class="fade"></div>
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

    <div class="top-of-page-btn-container" onclick="goTopOfPage()">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.002 492.002" style="enable-background:new 0 0 492.002 492.002;" xml:space="preserve"><g><g><path d="M484.136,328.473L264.988,109.329c-5.064-5.064-11.816-7.844-19.172-7.844c-7.208,0-13.964,2.78-19.02,7.844    L7.852,328.265C2.788,333.333,0,340.089,0,347.297c0,7.208,2.784,13.968,7.852,19.032l16.124,16.124    c5.064,5.064,11.824,7.86,19.032,7.86s13.964-2.796,19.032-7.86l183.852-183.852l184.056,184.064    c5.064,5.06,11.82,7.852,19.032,7.852c7.208,0,13.96-2.792,19.028-7.852l16.128-16.132    C494.624,356.041,494.624,338.965,484.136,328.473z"/></g></g></svg>
    </div>
</div>
<?php get_footer() ?>
