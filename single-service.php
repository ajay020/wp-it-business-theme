<?php get_header(); ?>

<section class="single-service">
    <div class="container">

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()): ?>
                    <div class="service-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>

                <div class="service-content">
                    <!-- <?php the_content(); ?> -->
                    <p><?php the_field('service_description'); ?></p>
                </div>

        <?php endwhile;
        endif; ?>

    </div>
</section>

<?php get_footer(); ?>