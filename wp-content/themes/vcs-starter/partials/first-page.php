		<section class="first-page">						
			<div class="container1 owl-carousel owl-theme">
				
								<?php
				if(have_rows('fp_photos_repeater')):
					while(have_rows('fp_photos_repeater')):
						the_row();
						$image = get_sub_field('image');
						?>
						<div class = "first-page-elements">
						<div class= "photo">
							<img src="<?php echo $image['sizes']['main-photo']; ?>" alt="<?php echo $image['alt'] ?>" />
						</div>

						<div class="paragraph">
							<p><?php the_sub_field('first_word'); ?></p>
							<h1><?php the_sub_field('title'); ?></h1>
							<p><?php the_sub_field('paragraph'); ?></p>					
						</div>
					
						</div>
						<?php



					endwhile;

				endif;
				?>

			
			</div>			
			<div class = "numbering">
			</div>
			<div class ="owl-nav">
			</div>
    		</div> 
			<div class = "outside-content">
					<p>FIRST SURFING MAGAZINE</p>					
			</div>
			
		</section >	