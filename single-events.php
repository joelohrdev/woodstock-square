<?php get_header(); ?>

<div class="container mx-auto my-10">
    <h1 class="text-peach text-3xl font-bold mb-5"><?php the_title(); ?></h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-12 px-5 md:px-0">
<!--        --><?php //if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
<!--            <div class="event pb-2 mb-2">-->
<!--                <a href="--><?php //the_permalink(); ?><!--" class="text-peach font-bold text-xl">--><?php //the_title(); ?><!--</a>-->
<!--                <p class="text-black text-sm font-semibold">-->
<!--                    --><?php
//                    $date = DateTime::createFromFormat('Y/m/d', get_field('start_date'));
//                    echo $date->format('F d, Y');
//                    ?><!-- |-->
<!--                    --><?php //the_field('start_time'); ?><!-- --->
<!--                    --><?php //the_field('end_time'); ?><!--</p>-->
<!--                --><?php //if(get_field('featured_image')) : ?>
<!--                    <img class="my-2" class="mt-2" src="--><?php //the_field('featured_image'); ?><!--" alt="--><?php //the_title(); ?><!--">-->
<!--                --><?php //endif; ?>
<!--            </div>-->
<!--        --><?php //endwhile; else : ?>
<!--            <p>There are no events today.</p>-->
<!--        --><?php //endif; ?>
    </div>
</div>

<?php get_footer(); ?>
