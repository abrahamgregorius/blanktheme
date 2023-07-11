<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>

</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <div class="logo"><h1><a href="<?= home_url() ?>">TechnoNews</a></h1></div>
        </div>
        <div class="navbar-right">
            <ul>
                <?php wp_nav_menu([
                    'theme_location' => 'navbar-menu',
                    'container' => 'div',
                ])?>
            </ul>
        </div>
    </div>

    