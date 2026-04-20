<section class="testimonials">
    <div class="container">
        <h2>What Our Clients Say</h2>

        <div class="testimonials-grid">

            <?php
            $query = new WP_Query([
                'post_type' => 'testimonial',
                'posts_per_page' => 3
            ]);

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
            ?>

                    <div class="testimonial-card">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>

                        <p><?php the_content(); ?></p>
                        <h4><?php the_title(); ?></h4>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>
</section>