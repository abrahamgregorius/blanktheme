<?php get_header() ?>

    <?php $wp_query = new WP_query([
        'post_type' => 'campus',

    ])  ?>

    <?php while(have_posts()): the_post() ?>
        <h2><?php the_title() ?></h2>
        <figure>
            <img width="200" src="<?php echo get_field('image')['url'] ?>" alt="">
        </figure>

        <p><?= get_field('location') ?></p>
        <p><?php the_content() ?></p>
    <?php endwhile ?>


<?php get_footer() ?>