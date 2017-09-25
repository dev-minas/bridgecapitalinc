<?php get_header(); ?>

    <div class="bg_home_2 bg1">
        <h1>Welcome</h1>
        <p class="sub_title secondary_title">We look forward to putting our <br> mortgage services to work for you!</p>
        <a class="btn btn_applay" href="/refinance-or-purchase">Applay now</a>
        <a class="btn btn_loan" href="#">Find a loan Originator</a>
    </div>

    <a class="scrl_menu" name="mission"></a>
    <div class="bg_home_2">
        <h2>Mission Statement</h2>
        <p><?=get_post(1)->post_content?></p>
    </div>

    <a class="scrl_menu" name="vision"></a>
    <div class="bg_home_2 bg2 our_vision">
        <h2>Our Vision</h2>
        <p><?=get_post(23)->post_content?></p>
    </div>

    <a class="scrl_menu" name="loantypes"></a>
    <div class="bg_home_2 pd5">
        <h2>Loan Types</h2>
        <div class="bg_home_2_half first">
            <h3><?=get_post(25)->post_title?></h3>
            <?=get_post(25)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3><?=get_post(27)->post_title?></h3>
            <?=get_post(27)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3><?=get_post(29)->post_title?></h3>
            <?=get_post(29)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3><?=get_post(31)->post_title?></h3>
            <?=get_post(31)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3><?=get_post(69)->post_title?></h3>
            <?=get_post(69)->post_content?>
        </div>
        <div class="bg_home_2_half">
            <h3><?=get_post(71)->post_title?></h3>
            <?=get_post(71)->post_content?>
        </div>
    </div>

    <a class="scrl_menu" name="qualification"></a>
    <div class="bg_home_2 bg3">
        <h2>Qualification Process</h2>
        <p><?=get_post(33)->post_content?></p>
        <a href="/qualification" class="btn_qp">LEARN MORE</a>
    </div>

    <a class="scrl_menu" name="buyingahome"></a>
    <div class="bg_home_2 bg4">
        <h2>Buying a Home</h2>
        <p><?=get_post(35)->post_content?></p>
    </div>

    <div class="bg_home_2 bg5 mcalc">
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Chrome, Safari and Opera
            document.documentElement.scrollTop = 0; // For IE and Firefox
        }
    </script>

<?php get_footer(); ?>