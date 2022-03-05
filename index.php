<?php get_header(); ?>
<div class="page-section">
	<div class="container">
		<div class="row">
			<div class="col9 posts-loop">
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>				
			</div>
			
			<div class="col3">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /page-section -->
<?php get_footer(); ?>

