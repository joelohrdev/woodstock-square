<?php get_header(); ?>

    <?php if(is_front_page()) : ?>
    <div>
        <?php get_template_part('components/home', 'featured-location'); ?>
    </div>

    <?php get_template_part('components/home', 'todays-events'); ?>

    <?php get_template_part('components/home', 'tomorrow-events'); ?>

    <?php endif; ?>

    <?php if(!is_front_page()) : ?>
        <div class="container mx-auto my-10">
            <h1 class="text-peach font-bold uppercase text-2xl"><?php the_title(); ?></h1>
            <?php get_template_part('components/home', 'featured-location'); ?>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>