<?php 

// Test shortcode 

	function form_test_shortcode(){
		ob_start();
		?>
			<!-- Development shortcode -->

		
			<?php echo('<h1 class="color">Hello World2</h1>')?>

		
			<!-- Development shortcode -->
	<?php
		return ob_get_clean();

	}
	
	add_shortcode('form-test-shortcode', 'form_test_shortcode');