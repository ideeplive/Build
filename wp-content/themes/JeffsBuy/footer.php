<?php global $deeplive; ?>
   </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer_top">
<?php

		$layout = $deeplive['footer-shortable']['enabled'];

		if ($layout): foreach ($layout as $key=>$value) {

			switch($key) {

				case 'footer-1': get_template_part( 'footer_templates/footersectionone', 'footer-1' );
				break;

				case 'footer-2': get_template_part( 'footer_templates/footersectiontwo', 'footer-2' );
				break;

				case 'footer-3': get_template_part( 'footer_templates/footersectionthree', 'footer-3' );
				break;

			}

		}

		endif;

?>
<?php // get_template_part( 'footer_templates/footersectionone', 'footer-1' ); ?>
<?php // get_template_part( 'footer_templates/footersectiontwo', 'footer-2' ); ?>
<?php // get_template_part( 'footer_templates/footersectionthree', 'footer-3' ); ?>

                <div class="clearfix"> </div>
            </div>
            <div class="footer_bottom">
                <div class="copy">
                    <p>Copyright © <?php echo $deeplive['footer-copyright-date']; ?> <?php echo $deeplive['footer-copyright-name']; ?> All Rights Reserved.<a href="<?php echo $deeplive['footer-text-url']; ?>" target="_blank"> <?php echo $deeplive['footer-copyright-name']; ?></a> </p>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>