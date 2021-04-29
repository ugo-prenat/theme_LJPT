<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
        <div class="single-post-container">
            <div class="titles">
                <h1><?php the_title() ?></h1>
                <p class="author-and-date"><?php the_author() ?> le <?= get_the_date() ?></p>
            </div>
            <div class="single-post-content"><?= get_the_content() ?></div>
        </div>

    <?php endwhile ?>
<?php else: endif; ?>

<?php get_footer() ?>