<?php
// Template Name: Custom Template

get_header();
?>
<section>
	<div class="container myCustomFeature">
		<h1 class="text-center">Daily Vanity post</h1>
		<?php 
			$ajaxUrl = get_field( "ajax_url" );

			if( $ajaxUrl!='' ) {
				
			} else {
				echo 'empty';
			}
		?>
		<input type="hidden" id="hiddenUrl" value="<?php echo $ajaxUrl; ?>">
		<div class="wrapper">
			<div class="loading">Loading</div>
			
			<div class="carousel">
				
			</div>
		</div>
	</div>

	
</section>



<?php
get_footer();
?>