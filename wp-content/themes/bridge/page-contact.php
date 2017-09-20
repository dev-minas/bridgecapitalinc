<?php

// send mail

get_header(); ?>

    <div class="bg_home_2 bg_contact">
        <h1>CONTACT US</h1>

        <div class="contact_left">
            <form method="post" class="main_form">
                <div class="form_element">
                    <label for="name">Your Name*</label>
                    <input type="text" name="Name" value="" />
                </div>
                <div class="form_element">
                    <label for="email">Your Email*</label>
                    <input type="text" name="Email" value="" />
                </div>
                <div class="form_element">
                    <label for="price">Subject</label>
                    <input type="text" name="Subject" value="" />
                </div>
                <div class="form_element">
                    <label for="message">Yout Message</label>
                    <textarea rows="7" name="Message"></textarea>
                </div>
                <div class="form_element">
                    <label> &nbsp; </label>
                    <input class="submit" type="submit" name="submit" value="Submit" />
                </div>
            </form>
        </div>
        <div class="contact_right">
            <!--<img src="<?php /*bloginfo('template_url'); */?>/img/c_icon_location.png" />-->
            <i class="inl fa fa-map-marker cont_icons_map" aria-hidden="true"></i>
            <span>
                221 E. Glenoaks Blvd. Suite 225A <br />
                Glendale CA 91207
            </span>
            <br /><br />
            <!--<img src="<?php /*bloginfo('template_url'); */?>/img/c_icon_phone.png" />-->
            <i class="inl fa fa-phone cont_icons_phone" aria-hidden="true"></i>
            <span>818.616.7900</span>
            <br /><br />
           <!-- <img src="<?php /*bloginfo('template_url'); */?>/img/c_icon_mail.png" />-->
            <i class="inl fa fa-envelope cont_icons_env" aria-hidden="true"></i>
            <span>Info@bridgecapitalinc.com</span>
            <br /><br />
            <hr /><br />
            Monday – Friday: 9 am to 5 pm <br />
            Saturday, Sunday: Closed
            <br /><br />
            <a href=""><img src="<?php bloginfo('template_url'); ?>/img/c_icon_tw.png" /></a>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/img/c_icon_fb.png" /></a>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/img/c_icon_in.png" /></a>
            <a href=""><img src="<?php bloginfo('template_url'); ?>/img/c_icon_p.png" /></a>
            <br /><br />
        </div>
    </div>

<?php get_footer(); ?>