<?php get_header() ?>


<div class="single-campus-app">
    <h1>Detail Campus</h1>

    <?php while (have_posts()) : the_post() ?>
        <figure>
            <img width="200" src="<?= get_field('image')['url'] ?>" alt="">
        </figure>

        <h2><?php the_title() ?></h2>

        <p><?= get_field('location') ?></p>

        <div>
            <?php the_content() ?>
        </div>

</div>

<?php endwhile ?>

<?php get_footer() ?>