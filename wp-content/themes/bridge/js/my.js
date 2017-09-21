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

    $(".team_block").mouseover(function () {
        $(this).find(".team_name").animate({ 'marginTop': '-100px' }, 200);
        $(this).find(".team_position").removeClass("hidden");
    });

    $(".team_block").mouseout(function () {
        $(this).find(".team_name").animate({ 'marginTop': '-55px' }, 200);
        $(this).find(".team_position").addClass("hidden");
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

    $('.property_type').live('change', function() {

        property_type_change($(this));
    });

    $('.diff_maddress').click(function() {
        diff_maddress_click($(this));
    });

    $("#btnadd").click(function(){

        //$("#repeat").append("<strong>Lorem ipsum.</strong>");
        $("#tab5_form").children().hide();
        $("#tab5_form").append($("#cei_toclone").html());

    });

    $(".company-name-input").keyup(function() {

        $(".emp_name").text( this.value );
    });

    $(".total_income_input").keyup(function() {

        $(".income_numb").text( this.value );
    });

    $(".branch_select").change(function() {

        $(".emp_name").text( this.value );
    });

    $(".main_form").submit(function (event) {

        event.preventDefault();

        $(".submit").val('Processing');

        $.ajax( {
            type: "POST",
            url: '/form_submit.php',
            data: $(".main_form").serialize(),
            success: function( response ) {
                alert(response);
                $(".submit").val('Submit');
            }
        });

    });

    $(".continue").click(function (event) {

        event.preventDefault();

        if (validate_req($(this))) {

            var index = $(this).data('index');

            if (index == 2 && !$("#co_borrower").is(':checked')) {
                index = 3;
            }

            $(".tab").hide();
            $("#tab" + index).show();
            $("#tab" + index + " h1")[0].scrollIntoView();
        }
    });

    $(".req").focus(function() {
        $(this).css('border-color', '#ccc');
        $(this).css('background-color', '#fff');
    });
});

function validate_req(obj) {
    var ret = true;
    var req_elem = obj.parent().parent().find(".req");
    var form_div;
    req_elem.each(function() {

        var elem = $(this);

        if(elem.val() == '') {

            ret = false;
            blink_input(elem);
            form_div = elem.parent().parent();
        }
        if (!ret) {
            form_div[0].scrollIntoView();
        }
    });

    return ret;
}

function blink_input (obj) {
    var cnt = 0;
    var timer = setInterval(function () {

        cnt++;
        if (cnt == 4) {

            clearInterval(timer);
        }
        else {
            if(cnt % 2 == 1) {
                obj.css('border-color', 'red');
                obj.css('background-color', '#fdd');
            }
            else {
                obj.css('border-color', '#ccc');
                obj.css('background-color', '#fff');
            }
        }
    }, 300);
}

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

function property_type_change(obj) {

    if (obj.val() == 'Single Family' || obj.val() == 'Townhouse/Rowhouse') {

        obj.parent().parent().find(".number_of_units").removeClass("hidden");
        obj.parent().parent().find(".number_of_stories").addClass("hidden");
    }
    if (obj.val() == 'Condo') {

        obj.parent().parent().find(".number_of_stories").removeClass("hidden");
        obj.parent().parent().find(".number_of_units").addClass("hidden");
    }
    if (obj.val() != 'Single Family' && obj.val() != 'Townhouse/Rowhouse' && obj.val() != 'Condo' ) {

        obj.parent().parent().find(".number_of_stories").addClass("hidden");
        obj.parent().parent().find(".number_of_units").addClass("hidden");
    }
}

function diff_maddress_click(obj) {

    if (obj.val() == 'Yes') {
        obj.parent().parent().find(".my_mailing_address").removeClass("hidden");
    }
    else {
        obj.parent().parent().find(".my_mailing_address").addClass("hidden");
    }
}

