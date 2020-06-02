<div class="feature-location">
    <?php
    $args = array(
        'post_type'      => 'locations',
        'posts_per_page' => 1,
        'orderby'        => 'rand',
    );
    $loop = new WP_Query($args);
    ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <img src="<?php the_field('image_of_location'); ?>" alt="">
    <?php endwhile; ?>
</div>