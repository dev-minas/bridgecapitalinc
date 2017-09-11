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
            $(this).parents().find(".rank").first().removeClass("hidden");
            $(this).parents().find(".time-period").first().removeClass("hidden");
            $(this).parents().find(".years-in-same-field").first().removeClass("hidden");
            $(this).parents().find(".total-income").first().removeClass("hidden");
            $(this).parents().find(".branch").first().removeClass("hidden");
            $(this).parents().find(".business-phone").first().removeClass("hidden");
            $(this).parents().find(".company-street").first().removeClass("hidden");
            $(this).parents().find(".company-zip-state").first().removeClass("hidden");
            $(this).parents().find(".company-city").first().removeClass("hidden");

            $(this).parents().find(".position").first().addClass("hidden");
            $(this).parents().find(".company-name").first().addClass("hidden");
            $(this).parents().find(".type-of-business").first().addClass("hidden");
        }


        if (this.value == 'Employed') {

            $(this).parents().find(".position").first().removeClass("hidden");
            $(this).parents().find(".type-of-business").first().removeClass("hidden");
            $(this).parents().find(".rank").first().addClass("hidden");
            $(this).parents().find(".branch").first().addClass("hidden");
            $(this).parents().find(".company-name").first().removeClass("hidden");


            $(this).parents().find(".time-period").first().removeClass("hidden");
            $(this).parents().find(".years-in-same-field").first().removeClass("hidden");
            $(this).parents().find(".total-income").first().removeClass("hidden");
            $(this).parents().find(".business-phone").first().removeClass("hidden");
            $(this).parents().find(".company-street").first().removeClass("hidden");
            $(this).parents().find(".company-zip-state").first().removeClass("hidden");
            $(this).parents().find(".company-city").first().removeClass("hidden");
            $(this).parents().find(".retirement-date").first().addClass("hidden");
        }

        if (this.value == 'Self Employed') {
            $(this).parents().find(".position").first().removeClass("hidden");
            $(this).parents().find(".type-of-business").first().removeClass("hidden");
            $(this).parents().find(".rank").first().addClass("hidden");
            $(this).parents().find(".branch").first().addClass("hidden");
            $(this).parents().find(".company-name").first().removeClass("hidden");


            $(this).parents().find(".time-period").first().removeClass("hidden");
            $(this).parents().find(".years-in-same-field").first().removeClass("hidden");
            $(this).parents().find(".total-income").first().removeClass("hidden");
            $(this).parents().find(".business-phone").first().removeClass("hidden");
            $(this).parents().find(".company-street").first().removeClass("hidden");
            $(this).parents().find(".company-zip-state").first().removeClass("hidden");
            $(this).parents().find(".company-city").first().removeClass("hidden");
            $(this).parents().find(".retirement-date").first().addClass("hidden");


        }

        if (this.value == 'Retired') {
            $(this).parents().find(".retirement-date").first().removeClass("hidden");
            $(this).parents().find(".rank").first().addClass("hidden");
            $(this).parents().find(".time-period").first().addClass("hidden");
            $(this).parents().find(".years-in-same-field").first().addClass("hidden");
            $(this).parents().find(".total-income").first().addClass("hidden");
            $(this).parents().find(".branch").first().addClass("hidden");
            $(this).parents().find(".business-phone").first().addClass("hidden");
            $(this).parents().find(".company-street").first().addClass("hidden");
            $(this).parents().find(".company-zip-state").first().addClass("hidden");
            $(this).parents().find(".company-city").first().addClass("hidden");
            $(this).parents().find(".position").first().addClass("hidden");
            $(this).parents().find(".type-of-business").first().addClass("hidden");
            $(this).parents().find(".company-name").first().addClass("hidden");
        }

        if (this.value == 'Other/Unemployed') {
            $(this).parents().find(".retirement-date").first().addClass("hidden");
            $(this).parents().find(".rank").first().addClass("hidden");
            $(this).parents().find(".time-period").first().addClass("hidden");
            $(this).parents().find(".years-in-same-field").first().addClass("hidden");
            $(this).parents().find(".total-income").first().addClass("hidden");
            $(this).parents().find(".branch").first().addClass("hidden");
            $(this).parents().find(".business-phone").first().addClass("hidden");
            $(this).parents().find(".company-street").first().addClass("hidden");
            $(this).parents().find(".company-zip-state").first().addClass("hidden");
            $(this).parents().find(".company-city").first().addClass("hidden");
            $(this).parents().find(".position").first().addClass("hidden");
            $(this).parents().find(".type-of-business").first().addClass("hidden");
            $(this).parents().find(".company-name").first().addClass("hidden");
        }




       /* else {
            $(this).parents().find(".branch").first().addClass("hidden");
            $(this).parents().find(".company_name").first().removeClass("hidden");

            $(this).parents().find(".rank").first().addClass("hidden");
            $(this).parents().find(".position").first().removeClass("hidden");

            $(this).parents().find(".type-of-business").first().removeClass("hidden");
        }*/


      /*  if (this.value == 'Retired') {
            $(this).parents().find(".retirement-date").first().removeClass("hidden");

            $(this).parents().find(".retirement-date").first().nextAll().addClass("hidden");
        }*/

      /*  else {
            $(this).parents().find(".retirement-date").first().addClass("hidden");
        }
*/

        /*if (this.value == 'Employed') {
            $(this).nextAll(".company_name").first().removeClass("hidden");
            $(this).nextAll(".branch").first().addClass("hidden");
        }

*/

        // if (this.value == 'Employed') {
        //
        // }
    });

    $("#btnadd").click(function(){
        $("#repeat").append("<strong>Lorem ipsum.</strong>");
    });

});





