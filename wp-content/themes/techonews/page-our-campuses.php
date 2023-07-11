<?php get_header() ?>

    <?php $wp_query = new WP_query([
        'post_type' => 'campus',

    ])  ?>

    <?php while(have_posts()): the_post() ?>
        <h2><?php the_title() ?></h2>
        <figure>
            <img width="200" src="<?php echo get_field('image')['url'] ?>" alt="">
        </figure>

        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>


        <p><?= get_field('location') ?></p>
        <p><?php the_content() ?></p>
        <?php 
        
        $campus_id = get_the_ID();
        echo do_shortcode("[campus_gallery campus-id='$campus_id']");
        
        ?>
    <?php endwhile ?>


<?php get_footer() ?>