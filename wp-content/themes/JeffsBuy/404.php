<?php global $deeplive; ?>
<?php get_header(); ?>
    <div class="single_top">
        <div class="container">
            <div class="error-404 text-center">
                <h1><?php echo $deeplive['404-main']; ?></h1>
                <p><?php echo $deeplive['404-title']; ?></p>
                <a class="b-home" href="<?php echo esc_url(home_url('/')); ?>"><?php echo $deeplive['404-des']; ?></a>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php get_footer(); ?>