
<?php get_header();
//Template Name: blog
?>

    <main>    

        <section class="section_imovel" id="imoveis">
            <div class="container">
                <header class="head_imoveis_list">
                    <h2 class="title-sec text-center">Alguns imóveis em destaque</h2>
                </header>

                <section class="imoveis_list">
                    <?php

                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                                $files = get_post_meta( get_the_ID(), 'field_gallery', true );
                    ?>
                    <article class="card_imovel">
                        <a href="<?= get_the_permalink(); ?>">
                        <?php
                        

                        if ( !empty( $files ) ) {
                          $first_file = reset( $files );
                          
                        }
                        ?>
                            <img src="<?= $first_file; ?>" alt="">
                            <div class="info_card_imovel">
                                <h4><?= get_the_title(); ?></h4>

                                <p><?= get_the_excerpt(); ?></p>
                            </div>
                        </a>
                    </article>

                    <?php endwhile; endif; ?>

                    
                </section>

                <?php
                    
                    get_template_part('template-parts/content','pagination');

                ?>
            </div>
        </section>

        <section class="cta_sec">
            <h2 class="title-sec">Invista em Orlando com a nossa ajuda</h2>
            <div class="d-flex text-center btn_text_desc">
                <a href="" class="btn-default btn_cta">Fale com um consultor</a>
            </div>
        </section>
    
    </main>

<?php get_footer(); ?>