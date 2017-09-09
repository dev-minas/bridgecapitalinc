$(document).ready(function () {

    $(".div_mob_menu").click(function () {
        $(".div_mmenu").animate({top: 0}, 400);
    });

    $(".close").click(function () {
        $(".div_mmenu").animate({top: -1000}, 400);
    });

    // Your code here
    var params = {
        price: '300000',
        down_payment: '30000'
    }
    $('.mcalc').mortgagecalc(params);


    $(".continue").click(function (event) {
        event.preventDefault();

        var index = $(this).data('index');

        $(".tab").hide();
        $("#tab" + index).show();
    });


    $(".team_block").click(function () {

        $(".bg_team_bio").show();

        var name = $(this).find(".team_name").html();
        var bio = $(this).find(".team_bio").html();
        $(".team_bio_cont").html('<h2>' + name + '</h2><br>' + bio + '<br /><br /><a id="view_all"></a>');

        $(".team_img").css("opacity", "0.6");
        $(this).find(".team_img").css("opacity", "1");

        $('html, body').animate({
            scrollTop: $(".bg_team_bio").offset().top
        }, 400);

        $("#view_all").click(function () {

            $('html, body').animate({
                scrollTop: $(".bg_team").offset().top
            }, 400);
        });
    });

    $('.employment_type').change(function() {

        if (this.value == 'Active Military Duty') {

            $(this).parent().parent().find(".company_name").first().addClass("hidden")
            $(this).nextAll(".branch").first().removeClass("hidden");
        }
        if (this.value == 'Employed') {
            $(this).nextAll(".company_name").first().removeClass("hidden");
            $(this).nextAll(".branch").first().addClass("hidden");
        }

    });

});

/*$(".box").click(function() {
 $(this).nextAll(".box-data").first().css("display", "block");
 });*/



