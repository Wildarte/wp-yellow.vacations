
<?php get_header();
//Template Name: Home
?>

    <main>

        <section class="hero">
            <div class="over_hero">
                <div class="container d-flex content_hero">
                    <div class="f-50 left_hero animate__animated animate__zoomIn">
                        
                        <p class="over_title">Satisfação, lucro, hospedagem.</p>
                        <h1 class="title-main">Experiências inesquecíveis aos hóspedes e retorno para os proprietários</h1>
                        <p class="desc-default">Nosso foco é garantir que os hóspedes tenham experiências inesquecíveis e, ao mesmo tempo, obter lucro para os proprietários.</p>
                        
                        <a href="" class="btn-default">Comece agora</a>
                    </div>
    
                    <div class="f-50">
    
                    </div>
                </div>
            </div>
            

        </section>

        <section class="cards">
            <div class="container content_cards d-flex">

                <article class="card_feat animate__animated animate__fadeInDown" style="animation-delay: .5s">
                    <div class="icon_card">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>

                    <h3>CUIDAMOS DE TUDO</h3>

                    <p>Preocupe-se apenas com o rendimento do seu imóvel, todo o resto é com a gente.</p>
                </article>

                <article class="card_feat animate__animated animate__fadeInDown" style="animation-delay: 1s">
                    <div class="icon_card">
                        <i class="bi bi-kanban"></i>
                    </div>

                    <h3>Gestão de Contas</h3>

                    <p>Efetuamos o pagamento de contas e impostos sem cobrança adicional.</p>
                </article>

                <article class="card_feat animate__animated animate__fadeInDown" style="animation-delay: 1.5s;">
                    <div class="icon_card">
                        <i class="bi bi-emoji-smile"></i>
                    </div>

                    <h3>Sua experiência</h3>

                    <p>Nós nos preocupamos profundamente com sua experiência e satisfação.</p>
                </article>

                <article class="card_feat animate__animated animate__fadeInDown" style="animation-delay: 2s">
                    <div class="icon_card">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>

                    <h3>Marketing</h3>

                    <p>Divulgamos sua casa em diversos portais, incluindo AirBnB e Booking.com.</p>
                </article>

            </div>
        </section>

        <section class="services" id="services">
            <div class="content_services">
                <header class="container head_services">
                    <h2 class="title-sec text-center">Conheça nossos serviços</h2>
                </header>

                <section class="list_services d-flex">
                    <article class="card_service">
                        <div class="content_card_service">
                            <div class="card_service_front">
                                <h3>Marketing e Reservas</h3>
                                <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822_960_720.jpg" alt="">
                            </div>
    
                            <div class="card_service_back">
                                <p>Fazemos a divulgação das sua casas nos principais portais, tais como AirBnB, HomeAway/VRBO, Booking.com entre tantos outros.

                                    Monitoramos diariamente a agenda de todas as casas para garantir que os preços estão adequados para o período e ajustamos de acordo.</p>
                            </div>
                        </div>
                    </article>

                    <article class="card_service">
                        <div class="content_card_service">
                            <div class="card_service_front">
                                <h3>Gestão de contas e manutenção contínua</h3>
                                <img src="https://cdn.pixabay.com/photo/2016/03/09/09/43/bag-1245954_960_720.jpg" alt="">
                            </div>
    
                            <div class="card_service_back">
                                <p>Fazemos o pagamento de todas as contas, fornecedores e impostos por você sem qualquer custo adicional.

                                    Além disso, criamos um calendário com todas as manutenções recorrentes da casa para manter ela sempre em perfeito estado de conservação e uso! </p>
                            </div>
                        </div>
                    </article>

                    <article class="card_service">
                        <div class="content_card_service">
                            <div class="card_service_front">
                                <h3>Experiência dos Hóspedes</h3>
                                <img src="https://cdn.pixabay.com/photo/2016/11/29/08/47/bonding-1868513_960_720.jpg" alt="">
                            </div>
    
                            <div class="card_service_back">
                                <p>Todo mundo sabe que a Disney é um local mágico, nós fazemos o possível para tornar cada hospedagem memorável para as famílias que escolhem nossas casas, sempre tentamos entender o objetivo da visita e tornar essa experiência única!

                                    ​Hóspedes felizes = review 5 estrelas! E esse é nosso objetivo em todas as reservas!</p>
                            </div>
                        </div>
                    </article>

                </section>
            </div>
        </section>

        <section class="section_imovel" id="imoveis">
            <div class="container">
                <header class="head_imoveis_list">
                    <h2 class="title-sec text-center">Alguns imóveis em destaque</h2>
                </header>

                <section class="imoveis_list">
                    <?php

                        $args = [
                            'post_type' => 'post',
                            'post_per_page' => 8
                        ];

                        $result_imoveis = new WP_Query($args);

                        if($result_imoveis->have_posts()):
                            while($result_imoveis->have_posts()):
                                $result_imoveis->the_post();

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

                    <?php endwhile; endif; wp_reset_query(); ?>

                    
                </section>


                <div class="d-flex text-center btn_text_desc">
                    <a href="<?= home_url(); ?>/imoveis" class="btn-default">Ver Todos os Imóveis</a>
                </div>
            </div>
        </section>

        <section class="ban">
            <div class="container content_ban">

            </div>
        </section>

        <section class="sec_about" id="sobre">
            <div class="container d-flex">
              <div class="f-50 left_about">
                <h2 class="title-sec">Somos apaixonados por gestão e criar experiências memoráveis para hóspedes.</h2>

                <p class="">Somos um time apaixonado por gestão e experiência. Nossa missão é criar experiências memoráveis para nossos hóspedes e garantir o retorno do seu investimento.</p>

                <p>Se você está pensando em comprar ou se já comprou a sua casa de férias em Orlando na Flórida, nós seremos o seu principal parceiro.</p>

                <p>Contamos com profissionais experientes no mercado local que poderão te ajudar a tornar esse investimento rentável e ainda permitir o uso do imóvel quando bem entender.</p>

                <div class="d-flex text-center btn_text_desc">
                    <a href="" class="btn-default">Saiba Mais</a>
                </div>
              </div>
              <div class="f-50 about_right">
                <div class="over_about_right">
                    <h3>Sobre</h3>
                    <p>Nós somos entusiastas da administração e buscamos proporcionar vivências inesquecíveis aos visitantes.</p>
                </div>
                <img class="img_fixed_about" src="<?= get_template_directory_uri(); ?>/assets/img/about.png" alt="">
                <img class="float_img_about" src="<?= get_template_directory_uri(); ?>/assets/img/dots-2.png" alt="">
              </div>
            </div>
        </section>

        <section class="cta_sec">
            <h2 class="title-sec">Invista em Orlando com a nossa ajuda</h2>
            <div class="d-flex text-center btn_text_desc">
                <a href="" class="btn-default btn_cta">Fale com um consultor</a>
            </div>
        </section>

        <section class="sec-default" id="depoimentos">
            <div class="container">
                <header class="head_dep">
                    <h2 class="title-sec text-center">Sua casa, nossa hospitalidade.</h2>
                </header>

                <section class="owl-carousel section_dep">
                    <article class="card_dep">
                        <div class="photo_dep">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="">
                            <h3>Tim, Joplin, MO</h3>
                        </div>

                        <div class="text_dep">
                        This place was more than perfect for our family of 5! The pool was a great feature, giving our kids hours of fun, and all the TVs have Netflix and Prime. Plenty of towels and and extra ones for the pool. Definitely would stay here again!
                        </div>
                    </article>

                    <article class="card_dep">
                        <div class="photo_dep">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="">
                            <h3>Tim, Joplin, MO</h3>
                        </div>

                        <div class="text_dep">
                        This place was more than perfect for our family of 5! The pool was a great feature, giving our kids hours of fun, and all the TVs have Netflix and Prime. Plenty of towels and and extra ones for the pool. Definitely would stay here again!
                        </div>
                    </article>
                </section>

                <div class="text_desc">
                    <p>Estamos sempre aprimorando nossos serviços para proporcionar experiências únicas e rentáveis em Orlando.<br>
                        Conte com nossa equipe apaixonada e experiente para investir em uma casa de férias com confiança.</p>

                </div>
            </div>
        </section>


        <script src="<?= get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
        <script>

            $(document).ready(function(){
                $(".section_dep").owlCarousel({
                    loop:true,
                    margin:10,
                    nav:false,
                    autoplay:true,
                    autoplayTimeout:4000,
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

        <section class="sec_contato" id="contato">
            <div class="container d-flex content_contato">
                <div class="f-50 left_contato">
                    <img src="" alt="">
                    <h2 class="title-sec color-white">Entre em contato e vamos conversar sobre seu empreendimento</h2>  
                </div>

                <div class="f-50 right_contato">
                    <form action="" method="post">
                        <input type="text" name="" id="" placeholder="nome">
                        <input type="text" name="" id="" placeholder="telefone">
                        <input type="email" name="" id="" placeholder="email">
                        <textarea name="" id="" cols="30" rows="10" placeholder="sua mensagem..."></textarea>
                        <button type="submit" class="btn-default">Enviar</button>
                    </form>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>