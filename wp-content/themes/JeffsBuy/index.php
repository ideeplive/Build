<?php global $deeplive; ?>
<!--------------Header Area--------------->
<?php get_header(); ?>
<!--------------Content--------------->


				<!-- Post WordPress Function Use Start -->
				<?php while (have_posts()) : the_post(); ?>

					<article>
						<?php  the_post_thumbnail();  ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y, G'); ?> with <?php comments_popup_link('comment nai','akta comment ase','% comments','classbosatechan','comments off'); ?>]</div>

						<?php read_more(30); ?>...<a href="<?php permalink_link(); ?>">read more</a>

					</article>
					<?php  endwhile ?>
					<!-- End of Post -->

					<!-- Pagination WordPress Function Use Start -->
					<?php /*
						the_post_navigation(array(
							'prev_text' => 'Ager Post',
							'next_text' => 'Porer Post',
							'screen_reader_text' => ''


						));
						*/
					?>
					<?php /*
						the_posts_pagination(array(
							'prev_text' => 'prev',
							'next_text' => 'next',
							'screen_reader_text' => ''
						)); */
					?>
					


					<ul id="pagi">
						<?php 
						the_posts_pagination(array(
							'prev_text' => 'prev',
							'next_text' => 'next',
							'screen_reader_text' => '',
							'prev_link' => '<li>',
							'next_link' => '</li>'
							
						));
						?>
					</ul>
					<!-- End of Pagination -->

<!--------------Footer--------------->
<?php get_footer(); ?>