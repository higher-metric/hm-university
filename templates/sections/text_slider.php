<?php
/**
 * Builder - Text Slider Section.
 *
 * @package hm-university
 * @since 1.0.0
 */

// Get slides.
$slides = get_sub_field( 'slides' );

// Check Slides.
if ( ! $slides ) {
	return;
}

// Counter.
$counter = 0;
?>
<div class="text-slider-section section">
	<div class="text-slider">
		<?php foreach ( $slides as $slide ) {
			$slide_text = $slide['slide_text'];
			?>
			<div class="text-slide" data-slidr="<?php echo $counter; ?>">
				<div class="text-slide-inner">
					<div class="text-slide-content">
						<?php echo $slide_text; ?>
					</div>
				</div>
			</div>
		<?php $counter ++; } ?>
	</div>
</div>
