<?php
	if(have_rows('repeater_lauko_pavadinimas')):
		while(have_rows('repeater_lauko_pavadinimas')):
			the_row();
			//get_sub_field('lauko_pavadinimas'); //grazina
			//the_sub_field('lauko_pavadinimas'); //spausdina
			?>
				<!-- KARTOJAMAS HTML KODAS -->
			<?php



		endwhile;

	endif;
?>