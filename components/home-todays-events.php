<?php
$today = date('Y-m-d');

$args = array(
    'post_type'      => 'events',
    'meta_key'       => 'date',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'date',
//    'meta_query'     => array(
//        array(
//            'key'     => 'start_date',
//            'compare' => '>',
//            'value'   => date("Y-m-d"),
//        ),
//        array(
//            'key' => 'end_date',
//            'compare' => '<=',
//            'value'   => date("Y-m-d", strtotime("+30 days")),
//        )
//    ),
);
$loop = new WP_Query($args);
?>
<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="event border-b pb-2 mb-2">
        <a href="<?php the_permalink(); ?>" class="text-peach font-bold text-3xl"><?php the_title(); ?></a>
        <p class="text-black text-sm font-semibold">
            <?php the_field('date'); ?> || <?php echo $today; ?> |
            <?php the_field('start_time'); ?> -
            <?php the_field('end_time'); ?></p>
    </div>
<?php endwhile; else : ?>
    <p>There are no events today.</p>
<?php endif; ?>
