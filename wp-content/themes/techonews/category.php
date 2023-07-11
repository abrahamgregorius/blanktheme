<?php get_header() ?>

<div class="content">
<div class="head-post">
    <div class="head-logo">
        <h1>Articles: <?php single_cat_title() ?> </h1>
    </div>

    <div class="head-category">
        <?php wp_list_categories() ?>
    </div>
</div>

    
    <?php while(have_posts()): the_post() ?>
    <div class="content-index">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <p><?php the_excerpt() ?></p>
    </div>  
    <?php endwhile ?>

</div>



<?php get_footer() ?>