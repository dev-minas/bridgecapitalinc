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

    $('.employment_type').live('change', function() {

        emp_type_change($(this));
    });

    $("#btnadd").click(function(){

        //$("#repeat").append("<strong>Lorem ipsum.</strong>");
        $("#tab4_form").children().hide();
        $("#tab4_form").append($("#cei_toclone").html());

    });

});

function emp_type_change(obj) {

    if (obj.val() == 'Active Military Duty') {

        obj.parents().find(".rank").first().removeClass("hidden");
        obj.parents().find(".time-period").first().removeClass("hidden");
        obj.parents().find(".years-in-same-field").first().removeClass("hidden");
        obj.parents().find(".total-income").first().removeClass("hidden");
        obj.parents().find(".branch").first().removeClass("hidden");
        obj.parents().find(".business-phone").first().removeClass("hidden");
        obj.parents().find(".company-street").first().removeClass("hidden");
        obj.parents().find(".company-zip-state").first().removeClass("hidden");
        obj.parents().find(".company-city").first().removeClass("hidden");

        obj.parents().find(".position").first().addClass("hidden");
        obj.parents().find(".company-name").first().addClass("hidden");
        obj.parents().find(".type-of-business").first().addClass("hidden");
    }
    if (obj.val() == 'Employed') {

        obj.parents().find(".position").first().removeClass("hidden");
        obj.parents().find(".type-of-business").first().removeClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".company-name").first().removeClass("hidden");

        obj.parents().find(".time-period").first().removeClass("hidden");
        obj.parents().find(".years-in-same-field").first().removeClass("hidden");
        obj.parents().find(".total-income").first().removeClass("hidden");
        obj.parents().find(".business-phone").first().removeClass("hidden");
        obj.parents().find(".company-street").first().removeClass("hidden");
        obj.parents().find(".company-zip-state").first().removeClass("hidden");
        obj.parents().find(".company-city").first().removeClass("hidden");
        obj.parents().find(".retirement-date").first().addClass("hidden");
    }
    if (obj.val() == 'Self Employed') {

        obj.parents().find(".position").first().removeClass("hidden");
        obj.parents().find(".type-of-business").first().removeClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".company-name").first().removeClass("hidden");

        obj.parents().find(".time-period").first().removeClass("hidden");
        obj.parents().find(".years-in-same-field").first().removeClass("hidden");
        obj.parents().find(".total-income").first().removeClass("hidden");
        obj.parents().find(".business-phone").first().removeClass("hidden");
        obj.parents().find(".company-street").first().removeClass("hidden");
        obj.parents().find(".company-zip-state").first().removeClass("hidden");
        obj.parents().find(".company-city").first().removeClass("hidden");
        obj.parents().find(".retirement-date").first().addClass("hidden");
    }
    if (obj.val() == 'Retired') {

        obj.parents().find(".retirement-date").first().removeClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".time-period").first().addClass("hidden");
        obj.parents().find(".years-in-same-field").first().addClass("hidden");
        obj.parents().find(".total-income").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".business-phone").first().addClass("hidden");
        obj.parents().find(".company-street").first().addClass("hidden");
        obj.parents().find(".company-zip-state").first().addClass("hidden");
        obj.parents().find(".company-city").first().addClass("hidden");
        obj.parents().find(".position").first().addClass("hidden");
        obj.parents().find(".type-of-business").first().addClass("hidden");
        obj.parents().find(".company-name").first().addClass("hidden");
    }
    if (obj.val() == 'Other/Unemployed') {

        obj.parents().find(".retirement-date").first().addClass("hidden");
        obj.parents().find(".rank").first().addClass("hidden");
        obj.parents().find(".time-period").first().addClass("hidden");
        obj.parents().find(".years-in-same-field").first().addClass("hidden");
        obj.parents().find(".total-income").first().addClass("hidden");
        obj.parents().find(".branch").first().addClass("hidden");
        obj.parents().find(".business-phone").first().addClass("hidden");
        obj.parents().find(".company-street").first().addClass("hidden");
        obj.parents().find(".company-zip-state").first().addClass("hidden");
        obj.parents().find(".company-city").first().addClass("hidden");
        obj.parents().find(".position").first().addClass("hidden");
        obj.parents().find(".type-of-business").first().addClass("hidden");
        obj.parents().find(".company-name").first().addClass("hidden");
    }
}





