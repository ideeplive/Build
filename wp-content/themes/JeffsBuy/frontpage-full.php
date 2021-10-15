<?php global $deeplive; ?>
<!--------------Header Area--------------->
<?php get_header(); ?>

    <div class="banner">
        <div class="container">
            <div class="banner_desc">
                <h1><?php echo $deeplive['banner-h1']; ?></h1>
                <h2><?php echo $deeplive['banner-para']; ?></h2>
            </div>
        </div>
    </div>
<!--------------Content--------------->
<!-- Men Section Start -->
    <div class="content_top">
        <h3 class="m_1">MEN Products</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
					<?php $category_name = 'men';
					$jeffmenproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => $category_name,
							'posts_per_page' => 5,
							)); ?>
					
					<?php while($jeffmenproducts -> have_posts()) : $jeffmenproducts -> the_post(); ?>
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
<!-- Men Section End -->

<!-- Women Section Start -->
    <div class="content_top">
        <h3 class="m_1">WOMEN Products</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
					<?php $jeffwomenproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => 'Men',
							'posts_per_page' => 5,
							)); ?>
					
					<?php while($jeffwomenproducts -> have_posts()) : $jeffwomenproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?></a>
								</div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>">information</a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Women Section End -->

<!-- Accessories Section Start -->
    <div class="content_top">
        <h3 class="m_1">Accessories</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
					<?php $jeffaccessoriesproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => 'Men',
							'posts_per_page' => 5,
							)); ?>
					
					<?php while($jeffaccessoriesproducts -> have_posts()) : $jeffaccessoriesproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?> </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>">information</a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Accessories Section End -->

<!-- Kids Section Start -->
    <div class="content_top">
        <h3 class="m_1">Kids</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
					<?php $jeffkidsproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => 'Men',
							'posts_per_page' => 5,
							)); ?>
					
					<?php while($jeffkidsproducts -> have_posts()) : $jeffkidsproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?> </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>">information</a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Accessories Section Start -->

<!-- Accessories Section Start -->
    <div class="content_top">
        <h3 class="m_1">Home</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
					<?php $jeffhomeproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => 'Men',
							'posts_per_page' => 5,
							));
					?>
					
					<?php while($jeffhomeproducts -> have_posts()) : $jeffhomeproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?> </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>">information</a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Accessories Section Start -->

<!-- Electronics Section Start -->
    <div class="content_top">
        <h3 class="m_1">Electronics</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
					<?php $jeffelectronicsproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => 'Men',
							'posts_per_page' => 5,
							));
					?>
					
					<?php while($jeffelectronicsproducts -> have_posts()) : $jeffelectronicsproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?> </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>">information</a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Electronics Section End -->

<!-- Appliances Section Start -->
    <div class="content_top">
        <h3 class="m_1">Appliances</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					<?php $jeffappliancesproducts = new WP_Query(array(
							'post_type' => 'products',
							'category_name' => 'Men',
							'posts_per_page' => 5,
							)); ?>
					
					<?php while($jeffappliancesproducts -> have_posts()) : $jeffappliancesproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?> </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>">information</a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Appliances Section End -->
 <!--------------Footer--------------->
<?php get_footer(); ?>