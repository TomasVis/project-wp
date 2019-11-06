		<section class = "video-section">
			<div class = "video-container">
				

				<div class ="video">
					<?php 

						$image = get_field('vs_video');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['sizes']['photo-for-video']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					<div class = "play-button-container">
						<i class="fas fa-4x fa-play-circle"></i>
					</div>
					
				</div>
			</div>
			<div class ="shore-section">
				<?php 

					$image = get_field('vs_image');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['sizes']['side-photo']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>


				<p><?php the_field('vs_paragraph')?></p>
				<div class = "with-horizontal-line">
						<a href="#">READ MORE</a>
				</div>
					

			</div>
				
				
			
			
		</section>