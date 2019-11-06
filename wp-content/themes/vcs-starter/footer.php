		<section class = "footer">
			<div>
				<?php if(get_field('logo_type','option')):
					echo "<h2>".get_field('text','option')."<h2>";

				else:
					$image = get_field('image','option');
					//dump($image);
					echo '<img src="'.$image['sizes']['logo'].'" alt="'.$image['alt'].'">';

				endif;
			?>
			</div>
			<div>


				<?php
					$args = [
						'menu-class' => 'navigation',
						'container' => false,
						'theme-location' => 'Footer Navigation'


					];
					wp_nav_menu($args);


				?>

			</div>
			<div>
				<?php
					if(have_rows('social_media_repeater')):
						while(have_rows('social_media_repeater')):
							the_row();
							//get_sub_field('lauko_pavadinimas'); //grazina
							//the_sub_field('lauko_pavadinimas'); //spausdina
							$linkas = get_sub_field('link');
							$ikona = get_sub_field('icon');
							?>
								<!-- KARTOJAMAS HTML KODAS -->
								<!-- <?php dump($linkas); ?> -->
								<?php

									if(!empty($linkas)):

								?>
									<a href="<?php echo $linkas['url']; ?>" rel= "nofolow" 
										<?php echo $linkas['target'] !='' ? 'target="_blank"' : '' ?>
										><?php echo $ikona; ?></a>
								<?php
									endif;
								?>

							<?php
						endwhile;
					endif;
				?>
			</div>
		</section>	
		<?php wp_footer(); ?>
	</body>
</html>