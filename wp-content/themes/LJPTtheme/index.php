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
                            <? wp_trim_excerpt() ?>
                        </div>
                        <div class="article-btns">
                            <div class="article-btn read-more-btn-container">
                                <a href="<?php the_permalink() ?>" class="read-more-btn">
                                    <p>Afficher l'article</p>
                                    <div class="animation-container">
                                        <div class="animation"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-btn share-btn">
                                <div class="share-btn-title">
                                    <div class="animation-container">
                                        <div class="animation"></div>
                                    </div>
                                    <p>Partager</p>
                                </div>
                                <div class="share-btn-social-network">
                                    <a href="<?= getTwitterShareLink(get_the_title(), get_the_permalink()) ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z"/></g></g></svg>
                                    </a>
                                    <a href="<?= getFacebookShareLink(get_the_title(), get_the_permalink()) ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>
                                    </a>
                                    <a href="<?= getWhatsappShareLink(get_the_title(), get_the_permalink()) ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M440.164,71.836C393.84,25.511,332.249,0,266.737,0S139.633,25.511,93.308,71.836S21.473,179.751,21.473,245.263    c0,41.499,10.505,82.279,30.445,118.402L0,512l148.333-51.917c36.124,19.938,76.904,30.444,118.403,30.444    c65.512,0,127.104-25.512,173.427-71.836C486.488,372.367,512,310.776,512,245.263S486.488,118.16,440.164,71.836z     M387.985,336.375L359.67,364.69c-23.456,23.456-90.011-5.066-148.652-63.708c-58.642-58.642-87.165-125.195-63.708-148.652    l28.314-28.314c5.864-5.864,15.372-5.864,21.236,0l35.393,35.393c5.864,5.864,5.864,15.372,0,21.236l-21.236,21.236    c20.599,43.487,55.615,78.502,99.102,99.101l21.236-21.236c5.864-5.864,15.372-5.864,21.236,0l35.393,35.393    C393.849,321.004,393.849,330.511,387.985,336.375z"/></g></g></svg>
                                    </a>
                                </div>
                            </div>
                            
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
