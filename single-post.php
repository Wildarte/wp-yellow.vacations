<?php get_header(); ?>

<main>
    <section class="head_single">
        <h2>Casa de Campo</h2>
    </section>
    <section class="container">
        <div class="carousel_imovel owl-carousel">
            <img src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2017/08/27/10/16/interior-2685521_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2017/01/07/17/48/interior-1961070_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940174_960_720.jpg" alt="">
        </div>
    </section>

    <section class="container info_home">
        <h3 class="title_info_home">Descrição</h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis incidunt assumenda similique, quaerat esse saepe aperiam unde cumque pariatur veritatis voluptatem iusto omnis fugit nam molestias, veniam alias vitae consectetur, dicta molestiae quis amet. Ipsum voluptas voluptate accusamus quasi placeat.</p>
        
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil aperiam odit sapiente fugiat tempora quam eaque sed aliquam voluptatibus amet error perspiciatis enim ipsa magni, officia possimus fugit sit omnis nulla molestias commodi. Minus, sunt.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quae odit libero, nostrum voluptatem maiores quidem laboriosam possimus eos aperiam sit exercitationem corporis non aliquid, qui officiis porro delectus perspiciatis ad debitis consequuntur dolorum assumenda repellendus. Maxime voluptatibus ex nesciunt voluptas doloremque iusto perspiciatis alias, minima, tempore nam dolor rem.</p>

        <div class="d-flex text-center btn_text_desc">
            <a href="" class="btn-default">Gostei do imóvel</a>
        </div>
    </section>

    <section class="imoveis_related container">

        <h3 class="title_info_home">Imóveis semelhantes</h3>

        <section class="imoveis_list">
            <article class="card_imovel">
                <a href="">
                    <img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/living-room-1835923_960_720.jpg" alt="">
                    <div class="info_card_imovel">
                        <h4>South Padre Island, Texas</h4>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint nemo voluptates repudiandae, hic dolorem molestiae perspiciatis recusandae cum autem totam.</p>
                    </div>
                </a>
            </article>

            <article class="card_imovel">
                <a href="">
                    <img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/living-room-1835923_960_720.jpg" alt="">
                    <div class="info_card_imovel">
                        <h4>South Padre Island, Texas</h4>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint nemo voluptates repudiandae, hic dolorem molestiae perspiciatis recusandae cum autem totam.</p>
                    </div>
                </a>
            </article>

            <article class="card_imovel">
                <a href="">
                    <img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/living-room-1835923_960_720.jpg" alt="">
                    <div class="info_card_imovel">
                        <h4>South Padre Island, Texas</h4>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint nemo voluptates repudiandae, hic dolorem molestiae perspiciatis recusandae cum autem totam.</p>
                    </div>
                </a>
            </article>

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
<?php get_footer(); ?>