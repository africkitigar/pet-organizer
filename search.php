<?php get_header(); ?>
<div class="page-section">
	<div class="container">
		<div class="row">
			<div class="col12">
				<h1><?php echo sprintf( __( '%s Search Results for 2 ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
					<h1 class="page-title"><?php if ( function_exists( 'pll_the_languages' ) ) {
                                    if(pll_current_language() == 'mk') {
                                        echo 'Резултати од пребарувањето';
                                    } else if(pll_current_language() == 'sq') {
                                        echo 'LAJME DHE NGJARJE'; 
                                    }  else if(pll_current_language() == 'en') {
                                        echo 'NEWS'; 
                                    }  

                                    echo get_search_query();
                        
                }?></h1>
</div>
				<?php get_template_part('loop'); ?>

		
			
			

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /page-section -->
<?php get_footer(); ?>