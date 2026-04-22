<?php get_header(); ?>

<section class="services-page">
    <div class="container">

        <h1>Our Services</h1>
        <p>We provide high-quality IT solutions.</p>

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

                <div class="service-item">

                    <h2><?php the_title(); ?></h2>

                    <p><?php the_field('service_description'); ?></p>

                    <a href="<?php the_permalink(); ?>">Read More →</a>

                </div>

        <?php endwhile;
        endif; ?>

        <div class="services-cta">
            <h2>Need help with your project?</h2>
            <p>Let’s discuss how we can help your business grow.</p>

            <a href="<?php echo site_url('/contact'); ?>" class="btn">
                Contact Us
            </a>
        </div>

    </div>

</section>

<?php get_footer(); ?>