
<?php get_header(); ?>

    <main>

        <section class="container">
            <h2><?= get_the_title(); ?></h2>

            <?php the_content(); ?>
        </section>

    </main>

<?php get_footer(); ?>