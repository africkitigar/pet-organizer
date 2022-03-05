<?php 
$image = $block['image'];
$text = $block['text'];
$cf7_shortcode = $block['cf7_shortcode'];
?>

<?php if ($text || $image || $cf7_shortcode): ?>
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
          <?php if ( $text ): ?>
          <div class="col4 flex flex-vertical-center">
                <div><?php echo $text; ?></div>
            </div>
           <?php endif; ?>
           
            <div class="col8 flex">
              <?php if ( $cf7_shortcode ): ?>
              <div class="contact-form">
                  <?php echo do_shortcode($cf7_shortcode); ?>
              </div>
              <?php endif; ?>
              
               <?php if ( $image ): ?>
               <div class="pet-img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
               <?php endif; ?>
            </div>
           
            
            
        </div>
    </div>
</section>	
<?php endif; ?>