<?php $featuredLarge = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
<?php $featuredMedium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
<div class="post-top-banner flex flex-center">
    <div class="post-top-banner-inner animated fadeIn">
        <picture>
            <source srcset="<?php echo $featuredMedium[0]; ?>" media="(max-width: 480px)">
            <source srcset="<?php echo $featuredLarge[0]; ?>" media="(max-width: 1024px)">
            <?php the_post_thumbnail();  ?>
        </picture>

        <div class="post-data">
            <h1 class="animated fadeInLeft"><?php the_title(); ?></h1>
				
			<span class="date animated fadeInLeft delay1"><?php the_time('F j, Y'); ?></span>
        </div>
    </div>
</div>