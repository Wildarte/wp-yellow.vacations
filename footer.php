<footer class="footer">
        <div class="container d-flex content_footer">
            <div class="f-100 text-center logo_footer">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img src="<?= esc_url($logo[0]) ?>" alt="">
            </div>
            <div class="f-25 col_footer">
                <h3>Quer saber mais?</h3>

                <p>Entre em contato conosco no telefone +1 (407) 683-2878 ou +1 (407) 724-5516. Ou se prefirir, nos envie uma mensagem através do formulário abaixo.</p>
            </div>
            <div class="f-25 social_footer col_footer">
                <h3>Redes Sociais</h3>

                <div class="list_social ">
                    <a href=""><i class="bi bi-facebook"></i> Facebook</a>
                    <a href=""><i class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
            <div class="f-25 col_footer">
                <h3>Escritório</h3>

                <p>9852 Emerald Berry Dr Winter Garden, FL 34787</p>
                <p><a href="mailto:hello@yellow.vacations"><i class="bi bi-envelope"></i> hello@yellow.vacations</a></p>
                <p><a href="Tel:+14076832878"><i class="bi bi-telephone"></i> +1 (407) 683-2878</a></p>
                </p>
            </div>
            <div class="f-25 col_footer">
                <h3>Quer Trabalhar Conosco?</h3>

                <p>A YELLOW.vacations está crescendo e estamos buscando profissionais apaixonados por criar experiências únicas aos nossos hóspedes. Nos envie seu currículo junto com uma carta se apresentando para: <a href="mailto:team@yellow.vacations">team@yellow.vacations</a></p>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="container d-flex">
                <div class="f-50">
                    <p>© 2023 Todos os direitos reservados</p>
                </div>
    
                <div class="f-50">
                    <p></p>
                </div>
            </div>
            
        </div>
    </footer>


    <?php wp_footer(); ?>


</body>
</html>