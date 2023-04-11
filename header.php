<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <?php wp_head(); ?>
</head>
<body>
    
    <header class="header">
        <div class="container content_header d-flex">
            <div class="logo_header">
                <a href="">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                    <img src="<?= esc_url( $logo[0] ); ?>" alt="Yellow Vacations" title="Yellow Vacations">
                </a>
            </div>
            <nav class="menu">
                <?php wp_nav_menu([
                    'menu' => 'Main Menu',
                    'theme_location' => 'my_main_menu',
                    'container' => false
                ]) ?>

                <a href="" class="btn-default btn-blue">Saiba Mais</a>
            </nav>
        </div>
    </header>