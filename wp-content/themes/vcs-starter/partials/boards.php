<section class = "board-section" >


	<div class = "boards" id = "boards">
					<p>SHOP</p>
					<h2>Surfboards</h2>
	</div>
			<div class="container owl-carousel owl-theme">



				<?php
				if(have_rows('bb_board_block_repeater')):
					while(have_rows('bb_board_block_repeater')):
						the_row();
						//get_sub_field('lauko_pavadinimas'); //grazina
						//the_sub_field('lauko_pavadinimas'); //spausdina

						$image = get_sub_field('board_image');
						$background = get_sub_field('board_background');
						?>


							<div class = "board">					
								<div class = "pilkas-backgroundas">
									<img src="<?php echo $background['sizes']['board-background']; ?>" alt="<?php echo $background['alt'] ?>" />
								</div>
						<div class= "board-image">
							<img src="<?php echo $image['sizes']['board']; ?>" alt="<?php echo $image['alt'] ?>" />
						</div>
						
						<div class = "aprasymas">
							<p><?php the_sub_field('category'); ?></p>
							<h6><?php the_sub_field('board_name'); ?></h6>
							<p><?php the_sub_field('price'); ?></p>
							<p>BUY</p>
						</div>
								</div>
						
						<?php



					endwhile;

				endif;
				?>
					



				
				
			
			</div>
			<div class = "text-with-blue-line">
				<div class = "with-horizontal-line">
						<a href="#">SHOW ALL</a>
					</div>
				<div class = "horizontal-line"></div>
			</div>
		</section>