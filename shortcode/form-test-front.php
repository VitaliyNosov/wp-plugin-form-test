<?php 

// Test shortcode 

	function form_test_shortcode(){
		ob_start();
		?>
			<!-- Development shortcode -->

		
			<div class="form-container">
        		<form role="form" method="post">
            		<div class="input-section">
                		<span>
                    		<input type="text" name="name" placeholder="Name" autocomplete="new-password">
                		</span>
                		<span>
                    		<input type="email" name="email" placeholder="Email" autocomplete="new-password">
                		</span>
            		</div>
            		<div class="input-section">
                		<span>
                    		<input type="text" name="phone" placeholder="Phone" autocomplete="new-password">
                		</span>
                		<span>
                    		<input type="date" name="date" id="date" autocomplete="new-password">
                		</span>
            		</div>
                		<button type="submit" name="submitbtm" value="Submit">Submit</button>
        		</form>
    		</div>

		
			<!-- Development shortcode -->
	<?php
		return ob_get_clean();

	}
	
	add_shortcode('form-test-shortcode', 'form_test_shortcode');