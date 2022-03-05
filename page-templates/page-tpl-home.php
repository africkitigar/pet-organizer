<?php /* Template Name: Home Page Template */ get_header(); ?>

<?php $featuredLarge = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
<?php $featuredMedium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
<!-- <div class="container"> -->
	<div class="main-hero">
		 <picture>
	       <source srcset="<?php echo $featuredMedium[0]; ?>" media="(max-width: 480px)">
	       <img src="<?php echo $featuredLarge[0]; ?>">
	    </picture>
	    <div class="main-hero-inner flex flex-center flex-vertical-center">
           <div class="main-hero-inner-overlay animated"></div>
	        <div class="main-hero-data">
	            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      				<div class="gutenberg"><?php the_content(); // Dynamic Content ?></div>

      				<?php endwhile; endif;?>

	        </div>
	    </div>
	</div>

    
<!-- </div> -->
<?php get_footer(); ?>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    	  grabCursor: true,
        effect: "creative",
        speed:1800,
        creativeEffect: {
          prev: {
            shadow: true,
            translate: ["-20%", 0, -1],
          },
          next: {
            translate: ["100%", 0, 0],
          },
        },
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
    });
</script>

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



<script>

jQuery(window).scroll(function () {
    

    if (jQuery('.main-hero').isInViewport()) {
      jQuery('.main-hero-inner-overlay').addClass('hero-animation');
    } else {
      jQuery('.main-hero-inner-overlay').removeClass('hero-animation');
    }

    jQuery('.columns-section:not(.single-column)').each(function(i, el){

      if (jQuery(this).isInViewport()) {
          jQuery(this).find('>:first-child .column-background').addClass('animate__rotateInUpLeft');
          jQuery(this).find('>:nth-child(2) .column-background').addClass('animate__fadeInRight');
          jQuery(this).find('.column-inner-overlay').addClass('zoomIn');
      } else {
          jQuery(this).find('>:first-child .column-background').removeClass('animate__rotateInUpLeft');
          jQuery(this).find('>:nth-child(2) .column-background').removeClass('animate__fadeInRight');
          jQuery(this).find('.column-inner-overlay').removeClass('zoomIn');
      }
    });

});
</script>