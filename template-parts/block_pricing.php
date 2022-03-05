<?php 
$text = $block['text'];
$pricing_tables = $block['pricing_tables'];
$big_description = $block['big_description'];
?>

<?php if ($pricing_tables): ?>
<section id="pricing" class="pricing-section">
    <div class="container">
        
          <?php if ( $text ): ?>
           <div class="pricing-intro text-center">
                <?php echo $text; ?>
            </div>
           <?php endif; ?>
           

        <div class="row"> 
            <?php if ($big_description): ?>
                <div class="col8">
                    <?php echo $big_description; ?>
                </div>                
            <?php endif; ?>
            <?php foreach($pricing_tables as $table): ?>
            <div class="col4">
                <div class="pricing-table">
                    <div class="table-title"><?php echo $table['title']; ?></div>
                    <div class="table-price">$<?php echo $table['price']; ?><span>/mo</span></div>
                    
                    <div class="table-features">
                        <?php echo $table['features_text']; ?>
                    </div>
                    
                    <div class="text-center">
                      <?php 
                        $link = $table['cta_link'];
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>	
<?php endif; ?>