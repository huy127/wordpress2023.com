<?php 
/* 
Template Name: Trang liên hệ
*/
?>

<?php global $theme_uri; ?>

<?php
    $contact_phone = get_theme_mod('contact_phone');
    $contact_email = get_theme_mod('contact_email');
    $contact_open_time = get_theme_mod('contact_open_time');
    $contact_address = get_theme_mod('contact_address');
?>

<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template-parts/page/breadcrumb');?>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p><?= $contact_phone; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p><?= $contact_address; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p><?= $contact_open_time; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p><?= $contact_email; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37912.52179436488!2d108.17513490070127!3d16.038370154019493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219bfacedf0c5%3A0x16129ea36d822c93!2zQ-G7rWEgSMOgbmcgVOG6oXAgSMOzYSBUaWtp!5e0!3m2!1svi!2s!4v1686146985447!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <?= do_shortcode('[contact-form-7 id="100" title="Form liên hệ 1"]');?>
        </div>
    </div>
    <!-- Contact Form End -->
    
    <?php endwhile; ?>
<?php get_footer(); ?>