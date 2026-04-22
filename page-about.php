<?php
/* Template Name: About Page */
get_header();
?>

<section class="about">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <div class="about-content">

            <div class="about-text">
                <h2>About Us</h2>
                <p> <?php the_field("about_text") ?></p>
            </div>

            <div class="about-mission">
                <h2>Our Mission</h2>
                <p> <?php the_field("mission_text") ?></p>

            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>