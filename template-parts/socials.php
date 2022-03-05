<div class="socials">
<?php
//vars
	$facebook_link = get_field('facebook_url', 'option');
	$twitter_link = get_field('twitter_url', 'option');
	$youtube_link = get_field('youtube_url', 'option');
	$instagram_url = get_field('instagram_url', 'option');
	$linkedln_url = get_field('linkedln_url', 'option');
?>

<?php if(!empty($facebook_link)):  ?>
	<a href="<?php echo $facebook_link; ?>" target="_blank" >
		<i class="fab fa-facebook-f"></i>
	</a>
<?php endif;  ?>

<?php if(!empty($linkedln_url)):  ?>
	<a href="<?php echo $linkedln_url; ?>" target="_blank" >
		<i class="fab fa-linkedin-in"></i>
	</a>
<?php endif;  ?>	

<?php if(!empty($twitter_link)):  ?>	
	<a href="<?php echo $twitter_link; ?>" target="_blank" >
		<i class="fab fa-twitter"></i>
	</a>
<?php endif;  ?>	
							
<?php if(!empty($instagram_url)):  ?>
	<a href="<?php echo $instagram_url; ?>" target="_blank" >
		<i class="fab fa-instagram"></i>
	</a>
<?php endif;  ?>								

<?php if(!empty($youtube_link)):  ?>
	<a href="<?php echo $youtube_link; ?>" target="_blank" >
		<i class="fab fa-youtube"></i>
	</a>
<?php endif;  ?>
	
</div>	