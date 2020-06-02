<?php
$tomorrow = date('Y/m/d', time()+86400);
//$tomorrow->modify('+1 day');

$args = array(
    'post_type'      => 'events',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'start_date',
    'meta_query'     => array(
        array(
            'key'     => 'start_date',
            'value'   => $tomorrow,
            'compare' => '=',
            'type'    => 'DATE',
        )
    ),
);
$loop = new WP_Query($args);
?>
<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="event border-b pb-2 mb-2">
        <a href="<?php the_permalink(); ?>" class="text-peach text-xl font-bold"><?php the_title(); ?></a>
        <p class="text-black text-sm font-semibold">
            <?php
            $date = DateTime::createFromFormat('Y/m/d', get_field('start_date'));
            echo $date->format('F d, Y');
            ?> |
            <?php the_field('start_time'); ?> -
            <?php the_field('end_time'); ?></p>
            <?php if(get_field('featured_image')) : ?>
                <img class="my-2" src="<?php the_field('featured_image'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
    </div>
<?php endwhile; else : ?>
    <p>There are no events today.</p>
<?php endif; ?>
