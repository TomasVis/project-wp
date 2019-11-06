<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset=<?php bloginfo('charset'); ?>>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php wp_title(); ?></title>
		
		<?php wp_head(); ?>
	</head>
	<body>
		<div class = "burger">
				<i class="fa fa-2x fa-bars" aria-hidden="true"></i>
		</div>
		<section class="nav" >

			<div class = "icon">
				<?php if(get_field('logo_type','option')):
					echo "<h2>".get_field('text','option')."<h2>";

				else:
					$image = get_field('image','option');
					//dump($image);
					echo '<img src="'.$image['sizes']['logo'].'" alt="'.$image['alt'].'">';

				endif;
			?>


			</div>
			<div class = "navigation">
				<?php
					$args = [
						'menu-class' => 'navigation',
						'container' => false,
						'theme-location' => 'primary-navigation'


					];
					wp_nav_menu($args);


				?>

			</div>
			<div class = "social-media">
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