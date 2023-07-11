<?php get_header(); ?>

    <div class="content">
        <div class="single">
        <?php while($var = have_posts()) : the_post() ?>
            <div class="content-single">
                <h1> <?php the_title() ?> </h1>
                <h5> <?php the_date() ?> </h5>
                <p> <?php the_content() ?> </p>
            </div>
        <?php endwhile ?>
        </div>
    </div>

<?php get_footer(); ?>