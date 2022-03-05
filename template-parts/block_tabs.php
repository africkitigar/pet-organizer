<?php 
$tabs = $block['tabs'];
?>

<?php if ($tabs): 
$i = 0;
$j = 0; 
?>
<section id="qr-codes" class="tabs-section">
    <div class="container">
       <div class="tabs-wrapper flex">
        <div class="tab-titles">
        <?php foreach($tabs as $t): $i++; ?>
            <div class="tab-title <?php if($i==1){echo 'active';}; ?>" id="tab<?php echo $i; ?>"><?php echo $t['tab_title']; ?></div>
        <?php endforeach; ?>
        </div>
        
        <div class="tab-contents">
        <?php foreach($tabs as $t): $j++; ?>
            <div class="<?php if($j==1){echo 'active';}; ?>" tab="tab<?php echo $j; ?>"><?php echo $t['tab_content']; ?></div>
        <?php endforeach; ?>
        </div>
        </div>
    </div>
</section>	
<?php endif; ?>

<script>
jQuery(document).ready(function(){
  jQuery(".tab-title").click(function(){
    jQuery(this).siblings().removeClass('active');
    jQuery(this).addClass('active');
    var id = jQuery(this).attr('id');

    jQuery('[tab=' + id + ']').siblings().removeClass('active');
    jQuery('[tab=' + id + ']').addClass('active');

  });
});//ready
</script>