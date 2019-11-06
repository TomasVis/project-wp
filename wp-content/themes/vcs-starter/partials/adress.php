<section class = "adress" id = "places">
				<div class = "adress-cont">
					<div>
						<?php 

						$image = get_field('as_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['sizes']['side-photo']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
					</div>
					<div class = adress-paragraph>
						<p><?php the_field('as_image_description')?></p>
						<h2><?php the_field('as_adress')?></h2>

						<?php
							$link = get_field('as_link');
							//dump($link);
							if(!empty($link)):
								?><div class = "with-horizontal-line">
										
									
								<a href="<?php echo $link['url']?>" <?php echo $link['target'] != '' ? 
								'taget ="_blank"' : ''?>>
									<?php echo $link['title']?>
								</a>
								</div>
							<?php
							endif



						?>
						
						<!-- <div class = "horizontal-line"></div> -->
					</div>
				</div>


</section>