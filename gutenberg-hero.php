<!-- Setting up our Variables for our hero component -->
<?php
	$bg = get_field('hero_image');
	$heading = get_field('hero_heading');
	$tagline = get_field('hero_tagline');
	$height = get_field('hero_height');
?>

<div class="hero d-flex flex-column justify-content-center" style="background-image:url('<?php echo $bg; ?>'); min-height: <?php echo $height; ?>px;">
	<div class="hero-text">
		<h1><?php echo $heading; ?></h1>
		<p><?php echo $tagline; ?></p>
	</div><!--hero-text-->
</div><!--hero -->