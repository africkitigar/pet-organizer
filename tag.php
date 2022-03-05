<?php get_header(); ?>
<div class="page-section">
	<div class="container">
		<div class="row">
			<div class="col8">
				<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>				
			</div>
			
			<div class="col4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /page-section -->
<?php get_footer(); ?>
