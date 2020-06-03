<?php get_header(); ?>

<?php
$args = array(
	'post_type'      => 'locations',
	'posts_per_page' => -1,
	'order'          => 'ASC',
	'orderby'        => 'title',
);
$loop = new WP_Query($args);
?>

<div class="container mx-auto my-10">
	<h1 class="text-peach text-3xl font-bold mb-5">Businesses</h1>
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-12 px-5 md:px-0">
		<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
			<div class="business pb-2 mb-2">
				<a href="<?php the_permalink(); ?>" class="text-peach font-bold text-xl">
					<?php the_title(); ?>
					<img class="my-2 object-cover h-48 w-full" class="mt-2" src="<?php the_field('image_of_location'); ?>" alt="<?php the_title(); ?>" />
					<div class="flex justify-between text-sm font-semibold">
						<?php the_field('phone_number'); ?>
						<?php if ( get_field('price') != 0) : ?>
							<div class="rating">
								Price:
								<?php
								$price = get_field('price');
								$x = 1;
								while( $x <= $price ) {
									echo '$';
									$x++;
								}
								?>
							</div>
						<?php endif; ?>
					</div>
				</a>
			</div>
		<?php endwhile; else : ?>
			<p>There are Businesses</p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
