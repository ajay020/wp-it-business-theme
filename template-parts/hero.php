<section class="hero">
    <div class="container">
        <h1><?php the_field('hero_title'); ?></h1>

        <p><?php the_field('hero_description'); ?></p>

        <a href="<?php the_field('hero_button_link'); ?>" class="btn">
            <?php the_field('hero_button_text'); ?>
        </a>
    </div>
</section>