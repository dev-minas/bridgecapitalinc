<?php get_header(); ?>
<?php

// reed ress
$feed_url = "https://www.cnbc.com/id/10000664/device/rss/rss.html";

$rss = new DOMDocument();
$rss->load($feed_url);
$feed = array();
$feed_html = '';

foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
}

// echo "<pre>"; print_r($feed); exit();

$limit = 5;
for($x=1;$x<=$limit;$x++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));

    $feed_html .= '<div class="slider slider_'.$x.'">
<strong><a target="_blank" href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />
<small><em>Posted on '.$date.'</em></small>
<p>'.$description.'</p>
</div>';

}

?>

    <div class="bg_home_2 bg1">
        <h1>Welcome</h1>
        <p class="sub_title secondary_title">We look forward to putting our <br> mortgage services to work for you!</p>
        <a class="btn btn_applay" href="/refinance-or-purchase">Applay now</a>
        <a class="btn btn_loan" href="/team">Find a loan Originator</a>
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
            <div>
                <h3><?=get_post(25)->post_title?></h3>
                <?=get_post(25)->post_content?>
            </div>
        </div>
        <div class="bg_home_2_half">
            <div>
                <h3><?=get_post(27)->post_title?></h3>
                <?=get_post(27)->post_content?>
            </div>
        </div>
        <div class="bg_home_2_half">
            <div>
                <h3><?=get_post(29)->post_title?></h3>
                <?=get_post(29)->post_content?>
            </div>
        </div>
        <div class="bg_home_2_half">
            <div>
                <h3><?=get_post(31)->post_title?></h3>
                <?=get_post(31)->post_content?>
            </div>
        </div>
        <div class="bg_home_2_half">
            <div>
                <h3><?=get_post(69)->post_title?></h3>
                <?=get_post(69)->post_content?>
            </div>
        </div>
        <div class="bg_home_2_half">
            <div>
                <h3><?=get_post(71)->post_title?></h3>
                <?=get_post(71)->post_content?>
            </div>
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
        <a class="btn btn_applay" href="/refinance-or-purchase">Applay now</a>
        <a class="btn btn_loan" href="/team">Find a loan Originator</a>
    </div>

    <div class="bg_home_2 bg5 mcalc">
    </div>

    <div class="bg_home_2">
        <?=$feed_html?>
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