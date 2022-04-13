<?php 

// Test shortcode 

	function form_test_shortcode(){
		ob_start();
		?>
			<!-- Development shortcode -->

		
			<div class="form-container">
        		<form action="">
            		<div class="input-section">
                		<span>
                    		<input type="text" placeholder="Name" autocomplete="new-password">
                		</span>
                		<span>
                    		<input type="text" placeholder="Email" autocomplete="new-password">
                		</span>
            		</div>
            		<div class="input-section">
                		<span>
                    		<input type="text" placeholder="Phone" autocomplete="new-password">
                		</span>
                		<span>
                    		<input type="date" name="date" id="date" autocomplete="new-password">
                		</span>
            		</div>
                		<button type="submit">Submit</button>
        		</form>
    		</div>

		
			<!-- Development shortcode -->
	<?php
		return ob_get_clean();

	}
	
	add_shortcode('form-test-shortcode', 'form_test_shortcode');