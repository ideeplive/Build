<?php global $deeplive; ?>
<?php /* Template Name: Products */ ?>
<?php get_header(); ?>
    <div class="content_top">
        <h3 class="m_1">Products</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
                        
                        <?php
                        $post_content = new WP_Query(array(
                            'post_type' => 'products',
                            'posts_per_page' => 21,
                        ));
                        ?>

					<?php while($post_content->have_posts()) : $post_content->the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?>
                                       </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>"><?php read_more(5); ?></a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
						
						
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<!--------------Footer--------------->
<?php get_footer(); ?>