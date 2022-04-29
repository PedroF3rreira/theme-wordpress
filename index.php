<?php get_header(); ?>
<section class="container">
	<div class="main">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>

				<article>
					<?php if(has_post_thumbnail()): ?>			
						<a href="<?=the_permalink(); ?>">
							<?=the_post_thumbnail('medium',array('class' => 'post-image')); ?>
						</a>
					<?php endif; ?>
					<h2><a href="<?=the_permalink(); ?>"><?=the_title( $before = '', $after = '', $echo = true ) ?></a></h2>
					<p><?=get_the_date(); ?> | 
						<a href="<?php get_author_posts_url(the_author_meta( 'ID')); ?>"><?=the_author(); ?></a>
					</p>
				</article>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>