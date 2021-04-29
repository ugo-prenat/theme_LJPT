<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
        <div class="article-section">
            <h1><?php the_title() ?></h1>
            <p class="author-and-date"><?php the_author() ?> le <?php echo get_the_date() ?></p>
            <p><?php the_content() ?></p>
        </div>

    <?php endwhile ?>
<?php else: ?>
    <p>Aucun article</p>
<?php endif; ?>

<?php get_footer() ?>