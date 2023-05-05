<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();


?>
<main>
    <section class="head_single">
        <h2><?= get_the_title(); ?></h2>
    </section>
    <section class="container">
        <div class="carousel_imovel owl-carousel">
            <?php

            $gallery = get_post_meta(get_the_ID(), 'field_gallery', true);

            foreach ( (array) $gallery as $attachment_id => $attachment_url ) {

                echo wp_get_attachment_image( $attachment_id, 'large' );

            }

            ?>
        </div>
    </section>

    <section class="container info_home">
        <h3 class="title_info_home">Descrição</h3>

        <?php the_content(); ?>

        <div class="d-flex text-center btn_text_desc">
            <a href="" class="btn-default">Gostei do imóvel</a>
        </div>
    </section>

    <section class="imoveis_related container">

        <h3 class="title_info_home">Imóveis semelhantes</h3>

      

        <section class="imoveis_list">

            <?php

                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ];

                $results = new WP_Query($args);

                if($results->have_posts()):
                    while($results->have_posts()):
                        $results->  the_post();
                        $files = get_post_meta( get_the_ID(), 'field_gallery', true );
            ?>

            <article class="card_imovel">
                <a href="<?= get_the_permalink(); ?>">
                        
                        <?php

                            if ( !empty( $files ) ) {
                            $first_file = reset( $files );
                            
                            }
                        ?>

                    <img src="<?= $first_file ?>" alt="">
                    <div class="">
                        <h4><?= get_the_title(); ?></h4>

                        <p><?= get_the_excerpt(); ?></p>
                    </div>
                </a>
            </article>

            <?php endwhile; endif; wp_reset_query() ?>

        </section>

    </section>
</main>

<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function(){
        $(".carousel_imovel").owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });

</script>
<?php endwhile; endif; ?>
<?php get_footer(); ?>