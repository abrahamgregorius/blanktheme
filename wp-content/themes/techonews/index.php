<?php get_header(); ?>

    <div class="content">
        <h1 id="head">List of posts</h1>

        <?php echo do_shortcode('[sayhello name="Admin"]') ?>

        <!-- <img src="<?= get_theme_file_uri('./assets/images/Dank Memes and Rare Pepes1.jfif') ?>" alt=""> -->

        <?php while($var = have_posts()): the_post()?>
            <div class="content-index">
                <h2>
                    <a href="<?php the_permalink() ?>"> <?= the_title() ?> </a>    
                </h2>
                <p><?php the_excerpt() ?></p>
                <!-- <div class="read-more">
                    <a href="<?php the_permalink() ?>">Read more</a>
                </div> -->
            </div>
        <?php endwhile ?>

        <?= paginate_links() ?>

    </div>

<?php get_footer(); ?>


