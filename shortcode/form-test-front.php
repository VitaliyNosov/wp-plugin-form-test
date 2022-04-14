<?php 

// Test shortcode 

	function form_test_shortcode(){
		ob_start();
		?>
			<!-- Development shortcode -->

		<div class="overlay js-overlay-campaign">
			<div class="form-body">
			<div class="form-container popup js-popup-campaign">
        		<form action="#" role="form" method="post" id="form-test">
					<div class="button-close js-close-campaign">
						<i class="far fa-window-close"></i>
					</div>
            		<div class="input-section">
                		<span>
                    		<input type="text" name="userName" required="required" placeholder="Name" autocomplete="new-password">
                		</span>
                		<span>
                    		<input type="email" name="userEmail" required="required" placeholder="Email" autocomplete="new-password">
                		</span>
            		</div>
            		<div class="input-section">
                		<span>
                    		<input type="text" name="userPhone" required="required" placeholder="Phone" autocomplete="new-password">
                		</span>
                		<span>
                    		<input type="date" name="userDate" required="required" id="date" autocomplete="new-password">
                		</span>
            		</div>
                		<button type="submit" name="submitbtm" value="Submit">Submit</button>
        		</form>
    		</div>
			</div>
		</div>
			<!-- button form: -->

			<div class="button-form-body">
				<button class="button-popup-form animated-btn js-button-campaign" id="button-popup-form" href="#form">
					<i class="fas fa-paper-plane"></i>
				</button>
			</div>

			<!-- button form. -->

		
			<!-- Development shortcode -->
	<?php
		return ob_get_clean();

	}
	
	add_shortcode('form-test-shortcode', 'form_test_shortcode');