				</div>
		<!-- /body-content -->
		</div>
		<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container text-center">

					<?php get_template_part('template-parts/socials'); ?>

					<div class="footer-top text-center">
						<div class="footer-widget">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer1')) ?>
						</div>
					</div>


					<?php if ( has_nav_menu( 'footer-menu' ) ) {
							wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
						} ?>
						
				<div class="copyright">© 2021 Power-QR. All rights reserved</div>

				</div><!-- /container -->
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		<a href="javascript:void(0)" id="return-to-top"><i class="fas fa-arrow-circle-up"></i></a><!-- back to top -->
		<?php wp_footer(); ?>

		<?php if (is_front_page()): ?>
			<script>
jQuery(document).ready(function(){

  jQuery(window).scroll(function () {

      jQuery(".page-builder section").each(function(){
        if (jQuery(this).isInViewport2()) {
           var sectionID = '/#'+jQuery(this).attr('id');
           console.log(jQuery(this).attr('id'));

           
           if(sectionID != undefined){
              jQuery('header ul li a').removeClass('active');
              jQuery('header ul li a[href="' + sectionID + '"]').addClass('active');
           }
           
        }
      });

  });

  // Add smooth scrolling to all links
  jQuery("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top - 77
      }, 800, function(){

      });
    } // End if
  });
});
</script>
		<?php endif; ?>

	</body>
</html>
