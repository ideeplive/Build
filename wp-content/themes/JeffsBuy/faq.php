<?php global $deeplive; ?>

<?php /* Template Name: faq */ ?>

<?php get_header(); ?>

<div class="single_top">
	 <div class="container"> 
	  <div class="box_4">
	  	<div class="col-md-12 about_left">
		
		
		<?php echo $deeplive['faq-full']; ?>
		
	  			
	  	</div>

	  	
	  </div>
   <h3 class="m_2">Related Products</h3>
         <div class="container">
          		<div class="box_3">
				  <?php $category_name = 'men';
			$singleproducts = new WP_Query(array(
					'post_type' => 'products',
					'category_name' => $category_name,
					'posts_per_page' => 4,
					)); ?>
			
				<?php while($singleproducts -> have_posts()) : $singleproducts -> the_post(); ?>
                <div class="col-md-3">
                    <div class="content_box">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?>
                        </a>
                    </div>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <!-- <p>$ 199</p> -->
                </div>
				<?php endwhile; ?>
			        <div class="clearfix"> </div>
          		</div>
          	</div>
       </div>
</div>      
<?php get_footer(); ?>
