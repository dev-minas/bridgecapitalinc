<?php get_header(); ?>

    <div class="bg_home_2 bg1">
        <h1>Welcome</h1>
        <p class="sub_title">We look forward to putting our <br> mortgage services to work for you!</p>
        <a class="btn btn_applay" href="/refinance-or-purchase">Applay now</a>
        <a class="btn btn_loan" href="#">Find a loan officer</a>
    </div>

    <a class="scrl_menu" name="mission"></a>
    <div class="bg_home_2">
        <h2>Mission Statement</h2>
        <p><?=get_post(1)->post_content?></p>
    </div>

    <a class="scrl_menu" name="vision"></a>
    <div class="bg_home_2 bg2">
        <h2>Our Vision</h2>
        <p><?=get_post(23)->post_content?></p>
    </div>

    <a class="scrl_menu" name="loantypes"></a>
    <div class="bg_home_2 pd5">
        <h2>Loan Types</h2>
        <div class="bg_home_2_half first">
            <h3>FIXED RATE</h3>
            <?=get_post(25)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3>ADJUSTABLE RATE (ARM)</h3>
            <?=get_post(27)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3>HYBRID ARM</h3>
            <?=get_post(29)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3>OTHER</h3>
            <?=get_post(31)->post_content?>
        </div>
    </div>

    <a class="scrl_menu" name="qualification"></a>
    <div class="bg_home_2 bg3">
        <h2>Qualification Process</h2>
        <p><?=get_post(33)->post_content?></p>
        <a href="#" class="btn_qp">LEARN MORE</a>
    </div>

    <a class="scrl_menu" name="buyingahome"></a>
    <div class="bg_home_2 bg4">
        <h2>Buying a Home</h2>
        <p><?=get_post(35)->post_content?></p>
    </div>

    <div class="bg_home_2 bg5 mcalc">
    </div>

    <div class="bg_home_2 bg6">
        <img src="<?php bloginfo('template_url'); ?>/img/banner.png" />
    </div>

<?php get_footer(); ?>