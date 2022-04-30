<?php get_header(); ?>
<section>
	<div class="main">
		<div class='section-1 container'>
			<div class="content-1-1">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>

						<article>
							<?php if(has_post_thumbnail()): ?>			
								<a href="<?=the_permalink(); ?>">
									<?=the_post_thumbnail('medium',array('class' => 'post-image')); ?>
								</a>
							<?php endif; ?>
							<div class="article-content">
								<h5><a href="<?=the_permalink(); ?>"><?=the_title( $before = '', $after = '', $echo = true ) ?></a></h5>
								<p>
									<?=get_the_date(); ?> | 
									<a href="<?php get_author_posts_url(the_author_meta( 'ID')); ?>"><?=the_author(); ?></a>
									>><?php the_category( $separator = '-'); ?>
								</p>
								<p><?php the_excerpt(); ?></p>

								<p><?php comments_number( ' 0 comentários', ' 1 comentário', '% Comentários', $deprecated = '' ) ?> | <<a href="<?php the_permalink() ?>"> Leia mais..</a></p>
							</div>
						</article>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>