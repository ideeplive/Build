<?php global $deeplive; ?>
<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
    <!-- contect Write Start -->
    <div class="single_top">
        <div class="container">





            <?php if($deeplive['contact-switch'] == 1) : ?>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.1141170074998!2d77.69348861482057!3d12.835901690945017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6d1c5f5059f9%3A0x5486c517bc4ad6d2!2sEmpocruit%20Infotech%20Private%20Limited!5e0!3m2!1sen!2sin!4v1631002616275!5m2!1sen!2sin"> </iframe>
            </div>
            <?php endif ?>






            <div class="col-md-9 contact_left">
                <h1><?php echo $deeplive['contact-left-title']; ?></h1>
                <p><?php echo $deeplive['contact-left-paragraph']; ?></p>
                <form>
                    <div class="column_2">
                        <input type="text" class="text" placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" class="text" placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:2.7%">
                        <input type="text" class="text" placeholder="" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:2.7%">
                    </div>
                    <div class="column_3">
                        <textarea value="Message" placeholder="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    </div>
                    <div class="form-submit1">
                        <input type="submit" value="Send Message">
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>
            <div class="col-md-3 contact_right">
                <h2><?php echo $deeplive['address-title']; ?></h2>
                <address class="address">
                 <?php echo $deeplive['address-one']; ?>
              </address>
                <address class="address">
                <?php echo $deeplive['address-two']; ?>
              </address>
                <address class="address">
                <?php echo $deeplive['address-three']; ?>
              </address>
            </div>
        </div>
    </div>

<!--------------Footer--------------->
<?php get_footer(); ?>