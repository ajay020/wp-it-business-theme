<section class="services">
    <div class="container">
        <h2>Our Services</h2>

        <div class="services-grid">

            <?php
            $query = new WP_Query([
                'post_type' => 'service',
                'posts_per_page' => 3
            ]);

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
            ?>

                    <div class="service-card">
                        <?php if ($icon = get_field('service_icon')): ?>
                            <img src="<?php echo $icon; ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>

                        <h3><?php the_title(); ?></h3>

                        <p><?php the_field('service_description'); ?></p>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>
</section>