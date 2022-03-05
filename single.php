<?php get_header(); ?>

<!-- post thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
	<?php get_template_part('template-parts/post-top-banner'); ?>
<?php endif; ?>

<div class="single-content">
<div class="container-narrow">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( !has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<h1><?php the_title(); ?></h1>
		<?php endif; ?>


			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<div class="gutenberg"><?php the_content(); // Dynamic Content ?></div>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>


			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>
