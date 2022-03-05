<?php get_header(); ?>
<?php if (is_front_page()): ?>
<div class="home-hero">
	<div class="container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="gutenberg"><?php the_content(); // Dynamic Content ?></div>

		<?php endwhile; endif;?>
	</div>
</div>	
<?php endif; ?>
<div class="page-section">
	<div class="container">
    <?php if (!is_front_page()): ?>
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="gutenberg"><?php the_content(); // Dynamic Content ?></div>

		<?php endwhile; endif;?>
    <?php endif; ?>
	</div><!-- /container -->
	
	<div class="page-builder">
  	    <?php pet_content(); ?>
    </div>
</div><!-- /page-section -->

<?php get_footer(); ?>
