<?php 
$image = $block['image'];
$text = $block['text'];
?>

<?php if ($text || $image): ?>
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
           <?php if ( $image ): ?>
            <div class="col4">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endif; ?>
            
            <div class="col8 flex flex-vertical-center">
               <div class="about-text"><?php echo $text; ?></div> 
            </div>
        </div>
    </div>
</section>	
<?php endif; ?>