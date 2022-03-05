<?php 
$logos = $block['logos'];
$logos_section_title = $block['logos_section_title'];
?>

<?php if ($logos): ?>
<section class="section-logos">
		<?php if ($logos_section_title): ?>
				<h3 class="text-center"><?php echo $logos_section_title; ?></h3>
		<?php endif; ?>

		<div class="logos-wrapper">
		<?php foreach ($logos as $logo): ?>
			<?php if ($logo['logo_url']): ?>
			<a href="<?php echo $logo['logo_url']; ?>" target="_blank">
			<?php endif; ?>

				<img src="<?php echo $logo['logo_image']['url']; ?>">

			<?php if ($logo['logo_url']): ?>
			</a>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
</section>	


<?php endif; ?>