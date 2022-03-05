<?php 
$text = $block['text'];
$image = $block['image'];
$features = $block['features'];
?>

<?php if ($features || $text): ?>
<section id="features" class="features-section">
    <div class="container">
        <div class="row">
           
           <?php if ( $text ): ?>
               <div class="col12">
                   <div class="features-intro"> <?php echo $text; ?></div>                 
                </div>
               <?php endif; ?>
            <div class="col8">
               
               <div class="features-list row">
                   <?php foreach($features as $f): ?>
                   <div class="col6">
                      <?php 
                        if( !empty( $f['icon'] ) ): ?>
                           <div class="feauture-icon">
                            <img src="<?php echo esc_url($f['icon']['url']); ?>" alt="<?php echo esc_attr($f['icon']['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        
                       <div class="feature-list-title"><?php echo $f['title']; ?></div>
                       <div class="feature-list-content"><?php echo $f['text']; ?></div>
                   </div><!--/col6-->
                    <?php endforeach; ?>
               </div>
            </div><!--/col8-->

            
            <?php 
            if( !empty( $image ) ): ?>
            <div class="col4">
               <div class="flex flex-center flex-vertical-center">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
               </div>
            </div><!--/col4-->
            <?php endif; ?>
        </div>
           
    </div>
</section>	
<?php endif; ?>