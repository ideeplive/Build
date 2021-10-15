<?php global $deeplive; ?>
<!DOCTYPE HTML>
<html>

<head>
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="" />
    <style>
	        .banner {
            background: url("<?php echo $deeplive['banner-image-real']['url']; ?>") no-repeat center top;
			margin-top: 63px;
            }
            body{
                background:<?php echo $deeplive['body-color']; ?> !important;
                
            }
            .content_top {
                padding: <?php echo $deeplive['opt-slider-float']; ?>em 0 !important;
                background: <?php echo $deeplive['frontpage-body-color']; ?> !important;
            }
            .footer{
                background:<?php echo $deeplive['footer-background-color']; ?> !important;
            }
            .box_3 h3 {
                color: <?php echo $deeplive['footer-title-color']; ?> !important;
            }
            
            .box_3 h4 a {
                color: <?php echo $deeplive['footer-hover-color']; ?> !important;
            }
            
            .box_3 p {
                color: <?php echo $deeplive['footer-paragraph-color']; ?> !important;
                font-size: 0.85em;
            }
            .logo h1 {
                font-family: <?php echo $deeplive['logo-font']['font-family']; ?> !important;
            }
            
            .logo h1 a span {
                color: <?php echo $deeplive['logo-text-one-color']; ?> !important;
            }
            
            .logo h1 a {
                color: <?php echo $deeplive['logo-text-two-color']; ?> !important;
            }
            .col_1_of_3:hover .shop-holder {
                border: 8px solid <?php echo $deeplive['products-border-color']; ?> !important;
            }
            
            .shop-holder {
                border: 8px solid <?php echo $deeplive['products-border-color-hover']; ?> !important;
            }

            .shop-content>div a {
                font-size: <?php echo $deeplive['shop-content-title']; ?>px !important;
            }
            .shop-content h3 {
                font-size: <?php echo $deeplive['shop-content-des']; ?>px !important;
            }









        
	</style>
	
	
	
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>






    <link href="<?php  echo esc_url( get_template_directory_uri()); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="<?php  echo esc_url( get_template_directory_uri()); ?>/css/style.css" rel='stylesheet' type='text/css' />
    <script src="<?php  echo esc_url( get_template_directory_uri()); ?>/js/simpleCart.min.js">
    </script>
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php  echo esc_url( get_template_directory_uri()); ?>/js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="<?php  echo esc_url( get_template_directory_uri()); ?>/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php  echo esc_url( get_template_directory_uri()); ?>/js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    

<script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

<link rel="stylesheet" href="<?php  echo esc_url( get_template_directory_uri()); ?>/css/etalage.css">
    <script src="<?php  echo esc_url( get_template_directory_uri()); ?>/js/jquery.etalage.min.js"></script>
    <script>
        jQuery(document).ready(function($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });

        });
    </script>
    <!--initiate accordion-->
    <script type="text/javascript">
        $(function() {

            var menu_ul = $('.menu_drop > li > ul'),
                menu_a = $('.menu_drop > li > a');

            menu_ul.hide();

            menu_a.click(function(e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true, true).slideUp('normal');
                }
            });

        });
    </script>



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header_bottom navbar navbar-default navbar-fixed-top">
        <div class="container ">
            <div class="col-xs-12 header-bottom-left ">
                <div class="col-xs-2 logo">
                    <h1>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $deeplive['logo']['url']; ?>" width="24" height="34"><span><?php echo $deeplive['logo-text-one']; ?></span><?php echo $deeplive['logo-text-two']; ?></a>
                    </h1>
                </div>
                <div class="col-xs-6 menu ">
                    <ul class="megamenu skyblue ">
					<li class="active grid"><a class="color2" href="#">Home</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                        <h4> Section One </h4>
                                            <ul>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Furnishings</a></li>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Decor</a></li>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Kitchen & Cookware</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                        <h4> Section Two </h4>
                                            <ul>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Dinning</a></li>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Lightning and Electrical</a></li>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Bags and Trolleys</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                        <h4> Section Three </h4>
                                            <ul>
                                                <li><a href="https://localhost/jeffsbuy/shop/">Gym equipments</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="color1" href="#">Men</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4><a href="#">T-Shirts and Shirts</a></h4>
                                            <ul>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Casual Shirts</a></li>
                                                <li><a href="#">Formal Shirts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Sweatshirt</h4>
                                            <ul>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Blazers & Coats</a></li>
                                                <li><a href="#">Suits</a></li>
                                                <li><a href="#">Sherwani</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Pant</h4>
                                            <ul>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Casual Trousers</a></li>
                                                <li><a href="#">Formal Trousers</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Track Pants & Joggers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Innerwear</h4>
                                            <ul>
                                                <li><a href="#">Briefs & Trunks</a></li>
                                                <li><a href="#">Boxers</a></li>
                                                <li><a href="#">Vests</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="#">Casual Shoes</a></li>
                                                <li><a href="#">Sports Shoes</a></li>
                                                <li><a href="#">Formal Shoes</a></li>
                                                <li><a href="#">Sneakers</a></li>
                                                <li><a href="#">Sandels & Floaters</a></li>
                                                <li><a href="#">Flip Flops</a></li>
                                                <li><a href="#">Socks</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Accessories</h4>
                                            <ul>
                                                <li><a href="#">Sunglasses & Frames</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Belts</a></li>
                                                <li><a href="#">Wallet</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a class="color2" href="#">Women</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Indian & Fusion Wear</h4>
                                            <ul>
                                                <li><a href="#">Kurtas & Suits</a></li>
                                                <li><a href="#">Kurtis, Tunics & Tops</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                                <li><a href="#">Leggings, Salwars & Churidars</a></li>
                                                <li><a href="#">Skirts & Palazzos</a></li>
                                                <li><a href="#">Sarees</a></li>
                                                <li><a href="#">Dress Materials</a></li>
                                                <li><a href="#">Lehenga Cholis</a></li>
                                                <li><a href="#">Dupattas & Shawls</a></li>
                                                <li><a href="#">Jackets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Western Wear</h4>
                                            <ul>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Tops</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Trousers & Capris</a></li>
                                                <li><a href="#">Shorts & Skirts</a></li>
                                                <li><a href="#">Shrugs</a></li>
                                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                                <li><a href="#"> Jackets & Coats</a></li>
                                                <li><a href="#">Blazers & Waistcoats</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="#">Levis</a></li>
                                                <li><a href="#">Persol</a></li>
                                                <li><a href="#">Nike</a></li>
                                                <li><a href="#">Edwin</a></li>
                                                <li><a href="#">New Balance</a></li>
                                                <li><a href="#">Jack & Jones</a></li>
                                                <li><a href="#">Paul Smith</a></li>
                                                <li><a href="#">Ray-Ban</a></li>
                                                <li><a href="#">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>                        
						<li class="grid"><a class="color2" href="#">Accessories</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Indian & Fusion Wear</h4>
                                            <ul>
                                                <li><a href="#">Kurtas & Suits</a></li>
                                                <li><a href="#">Kurtis, Tunics & Tops</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                                <li><a href="#">Leggings, Salwars & Churidars</a></li>
                                                <li><a href="#">Skirts & Palazzos</a></li>
                                                <li><a href="#">Sarees</a></li>
                                                <li><a href="#">Dress Materials</a></li>
                                                <li><a href="#">Lehenga Cholis</a></li>
                                                <li><a href="#">Dupattas & Shawls</a></li>
                                                <li><a href="#">Jackets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Western Wear</h4>
                                            <ul>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Tops</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Trousers & Capris</a></li>
                                                <li><a href="#">Shorts & Skirts</a></li>
                                                <li><a href="#">Shrugs</a></li>
                                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                                <li><a href="#"> Jackets & Coats</a></li>
                                                <li><a href="#">Blazers & Waistcoats</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="#">Levis</a></li>
                                                <li><a href="#">Persol</a></li>
                                                <li><a href="#">Nike</a></li>
                                                <li><a href="#">Edwin</a></li>
                                                <li><a href="#">New Balance</a></li>
                                                <li><a href="#">Jack & Jones</a></li>
                                                <li><a href="#">Paul Smith</a></li>
                                                <li><a href="#">Ray-Ban</a></li>
                                                <li><a href="#">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>                        
						<li class="grid"><a class="color2" href="https://localhost/jeffsbuy/kids/">Kids</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Indian & Fusion Wear</h4>
                                            <ul>
                                                <li><a href="#">Kurtas & Suits</a></li>
                                                <li><a href="#">Kurtis, Tunics & Tops</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                                <li><a href="#">Leggings, Salwars & Churidars</a></li>
                                                <li><a href="#">Skirts & Palazzos</a></li>
                                                <li><a href="#">Sarees</a></li>
                                                <li><a href="#">Dress Materials</a></li>
                                                <li><a href="#">Lehenga Cholis</a></li>
                                                <li><a href="#">Dupattas & Shawls</a></li>
                                                <li><a href="#">Jackets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Western Wear</h4>
                                            <ul>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Tops</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Trousers & Capris</a></li>
                                                <li><a href="#">Shorts & Skirts</a></li>
                                                <li><a href="#">Shrugs</a></li>
                                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                                <li><a href="#"> Jackets & Coats</a></li>
                                                <li><a href="#">Blazers & Waistcoats</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="#">Levis</a></li>
                                                <li><a href="#">Persol</a></li>
                                                <li><a href="#">Nike</a></li>
                                                <li><a href="#">Edwin</a></li>
                                                <li><a href="#">New Balance</a></li>
                                                <li><a href="#">Jack & Jones</a></li>
                                                <li><a href="#">Paul Smith</a></li>
                                                <li><a href="#">Ray-Ban</a></li>
                                                <li><a href="#">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>                        
						<li class="grid"><a class="color2" href="#">Electronics</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Indian & Fusion Wear</h4>
                                            <ul>
                                                <li><a href="#">Kurtas & Suits</a></li>
                                                <li><a href="#">Kurtis, Tunics & Tops</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                                <li><a href="#">Leggings, Salwars & Churidars</a></li>
                                                <li><a href="#">Skirts & Palazzos</a></li>
                                                <li><a href="#">Sarees</a></li>
                                                <li><a href="#">Dress Materials</a></li>
                                                <li><a href="#">Lehenga Cholis</a></li>
                                                <li><a href="#">Dupattas & Shawls</a></li>
                                                <li><a href="#">Jackets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Western Wear</h4>
                                            <ul>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Tops</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Trousers & Capris</a></li>
                                                <li><a href="#">Shorts & Skirts</a></li>
                                                <li><a href="#">Shrugs</a></li>
                                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                                <li><a href="#"> Jackets & Coats</a></li>
                                                <li><a href="#">Blazers & Waistcoats</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="#">Levis</a></li>
                                                <li><a href="#">Persol</a></li>
                                                <li><a href="#">Nike</a></li>
                                                <li><a href="#">Edwin</a></li>
                                                <li><a href="#">New Balance</a></li>
                                                <li><a href="#">Jack & Jones</a></li>
                                                <li><a href="#">Paul Smith</a></li>
                                                <li><a href="#">Ray-Ban</a></li>
                                                <li><a href="#">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
						<li class="grid"><a class="color2" href="#">Appliances</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Indian & Fusion Wear</h4>
                                            <ul>
                                                <li><a href="#">Kurtas & Suits</a></li>
                                                <li><a href="#">Kurtis, Tunics & Tops</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                                <li><a href="#">Leggings, Salwars & Churidars</a></li>
                                                <li><a href="#">Skirts & Palazzos</a></li>
                                                <li><a href="#">Sarees</a></li>
                                                <li><a href="#">Dress Materials</a></li>
                                                <li><a href="#">Lehenga Cholis</a></li>
                                                <li><a href="#">Dupattas & Shawls</a></li>
                                                <li><a href="#">Jackets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Western Wear</h4>
                                            <ul>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Tops</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Trousers & Capris</a></li>
                                                <li><a href="#">Shorts & Skirts</a></li>
                                                <li><a href="#">Shrugs</a></li>
                                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                                <li><a href="#"> Jackets & Coats</a></li>
                                                <li><a href="#">Blazers & Waistcoats</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="#">Levis</a></li>
                                                <li><a href="#">Persol</a></li>
                                                <li><a href="#">Nike</a></li>
                                                <li><a href="#">Edwin</a></li>
                                                <li><a href="#">New Balance</a></li>
                                                <li><a href="#">Jack & Jones</a></li>
                                                <li><a href="#">Paul Smith</a></li>
                                                <li><a href="#">Ray-Ban</a></li>
                                                <li><a href="#">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="color3" href="https://localhost/jeffsbuy/faq/">FAQ</a></li>
                        <li><a class="color5" href="https://localhost/jeffsbuy/about/">About</a></li>
                        <li><a class="color4" href="https://localhost/jeffsbuy/contact/">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
