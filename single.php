<?php get_header(); ?>

    <div class="content-wrap">
        <div class="content">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article>

                    <header>
                        <?php the_title('<h1>', '</h1>'); ?>
                    </header>

                    <section>
                        <?php the_content(); ?>
                    </section>

                </article>

            <?php endwhile; else: endif; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>

<?php get_footer(); ?>