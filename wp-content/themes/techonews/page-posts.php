<?php get_header() ?>

<div class="content">

<div class="head-post">
    <div class="head-logo">
        <h1>All posts</h1>
    </div>

    <div class="head-category">
        <?php wp_list_categories() ?>
    </div>
</div>

<?php
    $paged = get_query_var('paged') ?? 1;
    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => $paged,
    ]);
?>

<?php while($query->have_posts()) : $query->the_post() ?>
    <div class="content-index">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <p><?php the_content() ?></p>
    </div>
<?php endwhile ?>

<?= paginate_links([
    'total' => $query->max_num_pages,
    'current' => 'max(1, $paged)'
]) ?>

</div>

<?php get_footer() ?>