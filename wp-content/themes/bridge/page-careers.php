<?php

// send mail

get_header(); ?>

    <div class="bg_home_2 bg_careers bg_contact_small">
        <h2>CAREERS</h2>

        <p class="careers_txt">
            Bridge Capital Inc. offer variety of career paths. We are always searching for the next talent to hire. The key characteristic traits that we are looking to in our potential candidates are Enthusiasm, Energy, Intelligence and Integrity.  We offer complete training and all the tools to elevate you to success. Apply now and become part of something great.
        </p>
    </div>

    <div class="bg_home_2 av_pos_list">

        <h2>Available Positions</h2>

        <div class="careers_block">
            <span>Asistant</span>
            <button>Applay</button>
        </div>

        <div class="careers_block">
            <span>Sr. Loan Originator</span>
            <button>Applay</button>
        </div>

        <div class="careers_block">
            <span>Jr. Loan Originator</span>
            <button>Applay</button>
        </div>

        <div class="careers_block">
            <span>Marketing Director</span>
            <button>Applay</button>
        </div>

        <div class="careers_block">
            <span>Processor</span>
            <button>Applay</button>
        </div>

        <div class="careers_block">
            <span>Transaction Coordinator</span>
            <button>Applay</button>
        </div>

    </div>

    <div class="bg_home_2 bg_contact hidden">
        <div class="contact_left" style="margin-top: 0;">
            <form method="post" class="mail_form" enctype="multipart/form-data">
                <div class="form_element">
                    <label for="name">Position*</label>
                    <input type="text" name="Position" id="input_position" />
                </div>
                <div class="form_element">
                    <label for="name">Your Name*</label>
                    <input type="text" name="Name" />
                </div>
                <div class="form_element">
                    <label for="email">Your Email*</label>
                    <input type="text" name="Email" />
                </div>
                <div class="form_element">
                    <label for="price">Subject</label>
                    <input type="text" name="Subject" />
                </div>
                <div class="form_element">
                    <label for="message">Yout Message</label>
                    <textarea rows="7" name="Message"></textarea>
                </div>
                <div class="form_element">
                    <label for="message">Attachment (CV)</label>
                    <input type="file" name="Attachment" />
                </div>
                <div class="form_element">
                    <label> &nbsp; </label>
                    <input type="hidden" name="Subj" value="Careers Form Submited" />
                    <input class="submit" type="submit" name="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>

<?php get_footer(); ?>