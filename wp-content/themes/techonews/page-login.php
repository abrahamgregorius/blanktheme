<?php 
if(is_user_logged_in()) {wp_redirect(admin_url());}
session_start();
?>
<?php get_header() ?>


<div class="login-app">
    <figure>
        <img width="150px" src="<?php echo get_theme_file_uri('assets/images/logo.png') ?>" alt="">
    </figure>
    <?php if(isset($_SESSION['errors'])): ?>
        <ul>
            <?php foreach($_SESSION['errors'] as $error) : ?>
                <li><?= $error ?> </li>    
            <?php endforeach?>
            <?php session_destroy() ?>
        </ul>
    <?php endif ?>


    <?php wp_login_form(['redirect' => admin_url()]); ?>
</div>



<?php get_footer() ?>