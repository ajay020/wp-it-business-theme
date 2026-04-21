<?php
/* Template Name: Contact Page */
get_header();
?>

<section class="contact">
    <div class="container">

        <!-- <h1><?php the_title(); ?></h1> -->

        <div class="contact-grid">

            <div class="contact-info">
                <h2>Contact Info</h2>
                <p>
                    Email:
                    <a href="mailto:<?php the_field('contact_email'); ?>">
                        <?php the_field('contact_email'); ?>
                    </a>
                </p>
                <p>Phone: <?php the_field('contact_phone'); ?></p>
                <p>Address: <?php the_field('contact_address'); ?></p>
            </div>

            <div class="contact-form">
                <h2>Send a Message</h2>

                <?php echo do_shortcode('[contact-form-7 id="542da6b" title="Contact form 1"]'); ?>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>