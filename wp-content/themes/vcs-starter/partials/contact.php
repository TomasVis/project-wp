		<section class = "form-section">
			<!-- <div> -->
				<div class = "vertical-line">
				
				</div>

				<h2><?php the_field('cf_header'); ?></h2>
				<p><?php the_field('cf_paragraph'); ?></p>
				
				<div class = "forma">
					<?php echo do_shortcode(get_field('cf_contact_form_shortcode')); ?>
				</div> 
			<!-- </div> -->
		</section>