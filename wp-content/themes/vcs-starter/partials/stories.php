		<section class = "articles" id = "events">






			<?php
				if(have_rows('sf_stories_repeater')):
					while(have_rows('sf_stories_repeater')):
						the_row();


						$image = get_sub_field('photo');
						$check = get_sub_field('story_nr');
						

						if ($check % 2 != 0):
							?>
							<div class = "article-block">
								<div class = "text-block">
									<p><?php the_sub_field('story_nr'); ?></p> 
									<h2><?php the_sub_field('heading'); ?></h2>
									<p><?php the_sub_field('paragraph'); ?></p>
									<div class = "with-horizontal-line">
										<a href="#">READ MORE</a>
									</div>
								</div>
						
								<div class = "articles-image">
									<img src="<?php echo $image['sizes']['side-photo']; ?>" alt="<?php echo $image['alt'] ?>" />
									<div class = "outside-content1">
										<p><?php the_sub_field('photo_description'); ?></p>
									</div>
									
								</div>
					
							</div>
							
							<?php
						endif;
						if ($check % 2 == 0):
							?>
							<div class = "article-block">

								<div class = "articles-image">
									<img src="<?php echo $image['sizes']['side-photo']; ?>" alt="<?php echo $image['alt'] ?>" />
									<div class = "outside-content1">
										<p><?php the_sub_field('photo_description'); ?></p>
									</div>
									
								</div>
								<div class = "text-block">
									<p><?php the_sub_field('story_nr'); ?></p> <!-- big number -->
									<h2><?php the_sub_field('heading'); ?></h2>
									<p><?php the_sub_field('paragraph'); ?></p>
									<div class = "with-horizontal-line">
										<a href="#">READ MORE</a>
									</div>
								</div>
						
								
					
							</div>
							
							<?php
						endif;


					endwhile;
				endif;
			?>				
		</section>	