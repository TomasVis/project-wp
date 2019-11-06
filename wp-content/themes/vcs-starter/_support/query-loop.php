<?php


$args = [

	//usklausos parametrai masyvo formatu


];
	//issiunciame uzklausa i duombaze ir issaugome atsakyma i kintamaji $result
$result = new WP_Query($args);

//Ciklas isvedimui

if($result->have_posts()):
	while ($result->have_posts()):
		$result->the_post();
		?>

		<!-- HTML BLOKAS -->
		<?php
	endwhile;
endif;

wp_reset_postdata(); //Atstatome pradine puslapio uzklausa

?>